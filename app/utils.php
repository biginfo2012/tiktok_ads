<?php

use Illuminate\Support\Facades\Mail;
function sendRegisterEmail($details, $email){
    Mail::to($email)->send(new \App\Mail\SendRegister($details));
}
function sendContactEmail($data, $email){
    $details = $data;
    Mail::to($email)->send(new \App\Mail\SendContact($details));
}
function sendCreditCodeEmail($password, $email){
    $details = array(
        'credit_code'=> $password,
        'email' => $email
    );
    Mail::to($email)->send(new \App\Mail\SendCreditCodeEmail($details));
}
function sendCodeEmail($verify_code, $email){
    $details = array(
        'verify_code'=> $verify_code,
    );
    Mail::to($email)->send(new \App\Mail\SendCodeEmail($details));
}
function sendCashEmail($details, $email){

    Mail::to($email)->send(new \App\Mail\CashSendEmail($details));
}

function contractType($contract_type){
    switch ($contract_type) {
        case 1:
            return "所長";
        case 2:
            return "班長";
        case 3:
            return "一般A";
        case 4:
            return "一般B";
        case 5:
            return "その他";
    }
    return "";
}
function custom_number_format($n, $precision = 3) {
    if ($n < 1000000) {
        // Anything less than a million
        $n_format = number_format($n);
    } else if ($n < 1000000000) {
        // Anything less than a billion
        $n_format = number_format($n / 1000000, $precision) . 'M';
    } else {
        // At least a billion
        $n_format = number_format($n / 1000000000, $precision) . 'B';
    }

    return $n_format;
}
function kmb($count, $precision = 2) {
    if ($count < 1000000) {
// Anything less than a million
        $n_format = number_format($count / 1000) . 'K';
    } else if ($count < 1000000000) {
// Anything less than a billion
        $n_format = number_format($count / 1000000, $precision) . 'M';
    } else {
// At least a billion
        $n_format = number_format($count / 1000000000, $precision) . 'B';
    }
    return $n_format;
}

function substrwords($text, $maxchar, $end='...') {
    if (mb_strlen($text) > $maxchar) {
        $len = mb_strlen($text);
        $output = mb_substr($text, 0, $maxchar, 'utf-8');

        $output .= $end;
    }
    else {
        $output = $text;
    }
    return $output;
}

function generateRandomString($length = 25) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function generateJsessionString($length = 22) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ+-';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

