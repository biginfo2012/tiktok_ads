<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Exception\CardException;
use Stripe\Stripe;

class UserController extends Controller
{
    //
    public function modify(Request $request){
        User::where('id', Auth::user()->id)->update(['name' => $request->name]);
        return response()->json(['status' => true]);
    }
    public function pwModify(Request $request){
        if(Hash::check($request->current_pw, Auth::user()->password)){
            User::where('id', Auth::user()->id)->update(['password' => Hash::make($request->new_pw)]);
            return response()->json(['status' => true]);
        }
        else{
            return response()->json(['status' => false]);
        }

    }
    public function pay(Request $request){
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $stripe_token = $request->stripeToken;
        $email = $request->email;
        $price = intval($request->price);
        $cus_id = null;
        $error = null;
        try {
            $customer = Customer::create([
                'email' => $email,
                'source' => $stripe_token
            ]);
            $cus_id = $customer->id;

        } catch (CardException $e) {
            $body = $e->getJsonBody();
            $err = $body['error'];
            $error = 'Customer ' . $email . ': error: ' . $err['code'];
        } catch (\Exception $e) {
            $error = 'Stripe Api Issue :' . $e->getCode();
        }

        if ($error != null) {
            session()->flash('error', $error);
            return redirect()->back();
        }

        try {
            $customerInfo = Customer::retrieve($cus_id);
//            $cardinfo = $customerInfo->sources->data;
//            $card_number = $cardinfo[0]->id;
//            $countryCode = $cardinfo[0]->country;
//            $card = $customerInfo->sources->retrieve($card_number);
//            $card->name = $name;
//            $card->save();

            $cardInfo = [
                'email' => $request->email,
                'stripe_cus_id' => $cus_id
            ];
            //Card::updateOrCreate(['user_id' => Auth::id()], $cardInfo);
        } catch (CardException $e) {
            $body = $e->getJsonBody();
            $err = $body['error'];
            $error = 'Customer ' . $email . ': error: ' . $err['code'];
        } catch (\Exception $e) {
            $error = 'Stripe Api Issue :' . $e->getCode();
        }
        if ($error != null) {
            $cu = Customer::retrieve($cus_id);
            $cu->delete();
            session()->flash('error', $error);
            return redirect()->back();
        }

        try {
            $charge = Charge::create([
                "amount" => $price * 100,
                "currency" => "JPY",
                "customer" => $cus_id,
                "capture" => false,
                'description' => "Buying Chips"
            ]);

            $source = $charge->source;

            $ch_id = $charge->id;
            $status = $charge->status;
            $payment_method = $charge->payment_method;
            $out = $charge->outcome;
            if ($out->reason == 'elevated_risk_level') {
                $error = 'Your card was declined. Please try with another card';
            } else if ($out->reason == 'highest_risk_level') {
                $error = 'Your card was declined. Please try with another card';
            } else if ($out->reason == 'merchant_blacklis') {
                $error = 'Your card was declined. Please try with another card';
            } else if ($source->funding == 'prepaid') {
                $error = 'Sorry, but we dont allow prepaid Cards. Please use a credit / debit valid card';
            }

            if (strpos($ch_id, 'ch_') === false || $charge->failure_message != '') {
                $error = $charge->failure_message;
            }
            if ($error != null) {
                $cu = Customer::retrieve($cus_id);
                $cu->delete();
                session()->flash('error', $error);
                return redirect()->back();
            }

        } catch (CardException $e) {
            $body = $e->getJsonBody();
            $err = $body['error'];
            $error = 'Customer ' . $email . ': error: ' . $err['code'];
            if ($err['decline_code'] == 'do_not_honor') {
                $error = 'Your card don\'t have funds or isn\'t active';
            }
        } catch (\Exception $e) {
            $error = 'The card validation cant be executed at this moment. Please retry later';
        }
        if ($error != null) {
            $cu = Customer::retrieve($cus_id);
            $cu->delete();
            session()->flash('error', $error);
            return redirect()->back();
        }

        //write payment log
        $log = [
            'user_id' => Auth::id(),
            'price' => $price,
            'status' => $status,
            'paid_date' => date('Y-m-d'),
            'payment_id' => $ch_id,
            'payment_method' => $payment_method,
        ];
        //Payment::create($log);

        session()->flash('payment_success', 1);

        return redirect()->back();
    }
}