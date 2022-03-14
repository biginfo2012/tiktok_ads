<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\AdData;
use App\Models\AdFav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdController extends Controller
{
    //
    public function loginAd($email, $pw){
        $device = mt_rand(1000000000, 9999999999);
        $postData = [
            'email' => $email,
            'password' => $pw
        ];
        $url = "https://www.pipiads.com/v1/api/member/login";
        $ch = curl_init($url);
        $authorization = "device_id: " . $device;
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));

        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($httpcode == 200)
        {
            $tokenData = json_decode($response, true);
            Log::info('login email: ' . $email);
            Account::where('email', $email)->update(['access_token' => $tokenData['access_token'], 'device_id' => $device]);
            return true;
        }
        else{
            Log::error('loginAd error:' . $response);
            return false;
        }
    }

    public function getAd(){
        $accounts = Account::all()->toArray();
        $min = date('i');
        $numbers = range(0, 9);
        if($min%10 == 0 ){
            shuffle($numbers);
        }
        $num = $numbers[$min%10];
        if(!isset($accounts[$num]['access_token'])){
            if($this->loginAd($accounts[$num]['email'], $accounts[$num]['password'])){
                $accunt = Account::where('email', $accounts[$num]['email'])->first();
                $access_token = $accunt->access_token;
                $device_id = $accunt->device_id;
                Log::info('client_email: ' . $accounts[$num]['email']);
                $this->searchAd($access_token, $device_id);
            }
        }
        else{
            Log::info('client_email: ' . $accounts[$num]['email']);
            $this->searchAd($accounts[$num]['access_token'], $accounts[$num]['device_id']);
        }
    }

    public function searchAd($accss_token, $device_id){
        $headers  = [
            'Cookie: uid=' .$accss_token,
            'Content-Type: application/json',
            'access_token: ' .$accss_token,
            'device_id: ' . $device_id
        ];
        $postData = [
            "button" => [],
            "channel" => 0,
            "current_page" => 1,
            "exclude_history"=> 0,
            "exclude_word"=> [],
            "keyword"=> [],
            "page_size"=> 20,
            "region"=> ["JP"],
            "search_type"=> 1,
            "sort"=> 1
        ];
        $url = "https://www.pipiads.com/v1/api/at/video/search";
        $ch = curl_init($url);
//        $access_token = "access_token: " . $accss_token;
//        $device = "device_id: " . $device_id;
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($httpcode == 200)
        {
            $result = json_decode($response, true);
            $data = $result['result']['data'];
            foreach ($data as $item){
                $ad_id = $item['ad_id'];
                $ad = [
                    'ad_id' => $item['ad_id'],
                    'play_count' => $item['play_count'],
                    'share_count' => $item['share_count'],
                    'digg_count' => $item['digg_count'],
                    'video_url' => $item['video_url'],
                    'duration' => $item['duration'],
                    'create_time' => $item['tiktok_create_time'],
                    'app_name' => $item['app_name'],
                    'app_url' => $item['app_url'],
                    'root_path' => $item['root_path'],
                    'desc' => $item['desc'],
                    'app_image' => $item['app_image'],
                    'app_title' => $item['app_title'],
                    'url' => $item['url'],
                    'cover' => $item['cover'],
                ];
                AdData::updateOrCreate(['ad_id' => $ad_id], $ad);
            }
            return true;
        }
        else{
            Log::error('searchAd error:' . $response);
            $account = Account::where('access_token', $accss_token)->where('device_id', $device_id)->first();
            $this->loginAd($account->email, $account->password);
            return false;
        }
    }

    public function dashboard(){
        if(Auth::user()->pay == 1){
            return view('dashboard');
        }
        else{
            return redirect()->back();
        }
    }

    public function detail($id){
        $data = AdData::find($id);
        return view('detail', compact('data'));
    }

    public function getAdData(Request $request){
        $this->getAd();
        $duration = $request->duration;
        $page = $request->page;
        $type = $request->type;
        if($type == 'search' || $type == 'fav'){
            if (!isset($duration)) {
                $start_date = strtotime('1900-01-01 00:00:00');
                $end_date = strtotime('2200-01-01 00:00:00');
            }
            else {
                $arr = explode(' to ', $duration);
                if(count($arr) == 1){
                    $start_date = strtotime(date('Y-m-d', strtotime($arr[0])) . ' 00:00:00');
                    $end_date = strtotime(date('Y-m-d', strtotime($arr[0])) . ' 23:59:59');
                }
                else{
                    $start_date = strtotime(date('Y-m-d', strtotime($arr[0])) . ' 00:00:00');
                    $end_date = strtotime(date('Y-m-d', strtotime($arr[1])) . ' 23:59:59');
                }
            }
        }
        else{
            if($type == 'prev'){
                $start_date = strtotime(date('Y-m-01', strtotime('-1 month')) . ' 00:00:00');
                $end_date = strtotime(date('Y-m-01') . ' 00:00:00');
            }
            else if($type == 'current'){
                $start_date = strtotime(date('Y-m-01') . ' 00:00:00');
                $end_date = strtotime(date('Y-m-d H:i:s'));
            }
            else if($type == 'thirty'){
                $start_date = strtotime(date('Y-m-d', strtotime('-30 days')) . ' 00:00:00');
                $end_date = strtotime(date('Y-m-d H:i:s'));
            }
            else if($type == 'week'){
                $start_date = strtotime(date('Y-m-d', strtotime('-7 days')) . ' 00:00:00');
                $end_date = strtotime(date('Y-m-d H:i:s'));
            }
            else{
                $start_date = strtotime(date('Y-m-d') . ' 00:00:00');
                $end_date = strtotime(date('Y-m-d H:i:s'));
            }
        }

        if(isset($request->genre)){
            $genre = explode(',', $request->genre);
            if(isset($request->dest)){
                $dest = explode(',', $request->dest);
                if($request->type == 'fav'){
                    $user_id = Auth::user()->id;
                    $total = AdData::with('fav')->whereHas('fav', function($query) use ($user_id){$query->where('user_id', $user_id);})
                        ->where('create_time', '>=', $start_date)->where('create_time', '<=', $end_date)->get()->count();
                    $data = AdData::with('fav')->whereHas('fav', function($query) use ($user_id){$query->where('user_id', $user_id);})
                        ->where('create_time', '>=', $start_date)->where('create_time', '<=', $end_date)
                        ->orderBy('updated_at', 'desc')->offset(($page - 1) * 20)->limit(20)->get();
                }
                else{
                    $total = DB::table('ad_data')->where('create_time', '>=', $start_date)->where('create_time', '<=', $end_date)
                        ->where(function($query) use ($genre) {
                            foreach($genre as $word){
                                $query->orWhere('genre', 'like', '%'.$word.'%');
                            }
                        })
                        ->where(function($query) use ($dest) {
                            foreach($dest as $word){
                                $query->orWhere('dest', 'like', '%'.$word.'%');
                            }
                        })->get()->count();
                    $data = DB::table('ad_data')->where('create_time', '>=', $start_date)->where('create_time', '<=', $end_date)
                        ->where(function($query) use ($genre) {
                            foreach($genre as $word){
                                $query->orWhere('genre', 'like', '%'.$word.'%');
                            }
                        })
                        ->where(function($query) use ($dest) {
                            foreach($dest as $word){
                                $query->orWhere('dest', 'like', '%'.$word.'%');
                            }
                        })->orderBy('updated_at', 'desc')->offset(($page - 1) * 20)->limit(20)->get();
                }
            }
            else{
                if($request->type == 'fav'){
                    $user_id = Auth::user()->id;
                    $total = AdData::with('fav')->whereHas('fav', function($query) use ($user_id){$query->where('user_id', $user_id);})
                        ->where('create_time', '>=', $start_date)->where('create_time', '<=', $end_date)
                        ->get()->count();
                    $data = AdData::with('fav')->whereHas('fav', function($query) use ($user_id){$query->where('user_id', $user_id);})
                        ->where('create_time', '>=', $start_date)->where('create_time', '<=', $end_date)
                        ->offset(($page - 1) * 20)->limit(20)
                        ->orderBy('updated_at', 'desc')->get();
                }
                else{
                    $total = DB::table('ad_data')->where('create_time', '>=', $start_date)->where('create_time', '<=', $end_date)
                        ->where(function($query) use ($genre) {
                            foreach($genre as $word){
                                $query->orWhere('genre', 'like', '%'.$word.'%');
                            }
                        })->get()->count();
                    $data = DB::table('ad_data')->where('create_time', '>=', $start_date)->where('create_time', '<=', $end_date)
                        ->where(function($query) use ($genre) {
                            foreach($genre as $word){
                                $query->orWhere('genre', 'like', '%'.$word.'%');
                            }
                        })->orderBy('updated_at', 'desc')->offset(($page - 1) * 20)->limit(20)->get();
                }
            }
        }
        else{
            if(isset($request->dest)){
                $dest = explode(',', $request->dest);
                if($request->type == 'fav'){
                    $user_id = Auth::user()->id;
                    $total = AdData::with('fav')->whereHas('fav', function($query) use ($user_id){$query->where('user_id', $user_id);})
                        ->where('create_time', '>=', $start_date)
                        ->where('create_time', '<=', $end_date)->get()->count();
                    $data = AdData::with('fav')->whereHas('fav', function($query) use ($user_id){$query->where('user_id', $user_id);})
                        ->where('create_time', '>=', $start_date)
                        ->where('create_time', '<=', $end_date)->orderBy('updated_at', 'desc')
                        ->offset(($page - 1) * 20)->limit(20)
                        ->get();
                }
                else{
                    $total = DB::table('ad_data')->where(function($query) use ($dest) {
                            foreach($dest as $word){
                                $query->orWhere('dest', 'like', '%'.$word.'%');
                            }
                        })->where('create_time', '>=', $start_date)->where('create_time', '<=', $end_date)->get()->count();
                    $data = DB::table('ad_data')->where(function($query) use ($dest) {
                            foreach($dest as $word){
                                $query->orWhere('dest', 'like', '%'.$word.'%');
                            }
                        })->where('create_time', '>=', $start_date)->where('create_time', '<=', $end_date)
                        ->orderBy('updated_at', 'desc')
                        ->offset(($page - 1) * 20)->limit(20)
                        ->get();
                }
            }
            else{
                if($request->type == 'fav'){
                    $user_id = Auth::user()->id;
                    $total = AdData::with('fav')->whereHas('fav', function($query) use ($user_id){$query->where('user_id', $user_id);})
                        ->where('create_time', '>=', $start_date)->where('create_time', '<=', $end_date)->get()->count();
                    $data = AdData::with('fav')->whereHas('fav', function($query) use ($user_id){$query->where('user_id', $user_id);})
                        ->where('create_time', '>=', $start_date)->where('create_time', '<=', $end_date)
                        ->orderBy('updated_at', 'desc')->offset(($page - 1) * 20)->limit(20)->get();
                }
                else{
                    $total = AdData::where('create_time', '>=', $start_date)->where('create_time', '<=', $end_date)->get()->count();
                    $data = AdData::where('create_time', '>=', $start_date)->where('create_time', '<=', $end_date)
                        ->orderBy('updated_at', 'desc')->offset(($page - 1) * 20)->limit(20)->get();
                }
            }
        }

        $page_count = (int)($total/20);
        if($total > $page_count * 20){
            $page_count = $page_count +1;
        }
        foreach ($data as $item){
            $fav = AdFav::where('user_id', Auth::user()->id)->where('ad_id', $item->id)->first();
            if(isset($fav)){
                $item->genre_id = 1;
            }
        }
        return view('ad-list', compact('total', 'data', 'page', 'page_count'));
    }
    public function favAd(Request $request){
        $user_id = Auth::user()->id;
        if($request->type == 0){
            AdFav::where('user_id', $user_id)->where('ad_id', $request->id)->delete();
        }
        else{
            AdFav::create(['user_id' => $user_id, 'ad_id' => $request->id]);
        }
        return response()->json(['status' => true]);
    }
    public function saveAd(Request $request){
        AdData::where('id', $request->id)->update(['genre' => $request->genre, 'dest' => $request->dest]);
        return response()->json(['status' => true]);
    }
}
