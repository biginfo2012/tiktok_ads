<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::get('contact', [UserController::class, 'contact'])->name('contact');
Route::post('send-contact', [UserController::class, 'sendContact'])->name('send-contact');
Route::get('pay-register/{id}', [UserController::class, 'payRegister'])->name('pay-register');
Route::group(['middleware' => 'auth'], function (){
    Route::get('dashboard', [AdController::class, 'dashboard'])->name('dashboard');
    Route::get('detail/{id}', [AdController::class, 'detail'])->name('detail');
    Route::post('get-ad', [AdController::class, 'getAdData'])->name('get-ad');
    Route::post('fav-ad', [AdController::class, 'favAd'])->name('fav-ad');
    Route::post('save-ad', [AdController::class, 'saveAd'])->name('save-ad');
    Route::post('modify', [UserController::class, 'modify'])->name('modify');
    Route::post('pw-modify', [UserController::class, 'pwModify'])->name('pw-modify');
    Route::post('pay', [UserController::class, 'pay'])->name('pay');
    Route::post('pay-setting', [UserController::class, 'paySetting'])->name('pay-setting');
    Route::get('user', [UserController::class, 'user'])->name('user');
});


require __DIR__.'/auth.php';
