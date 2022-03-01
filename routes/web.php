<?php

use App\Http\Controllers\AdController;
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
Route::group(['middleware' => 'auth'], function (){
    Route::get('dashboard', [AdController::class, 'dashboard'])->name('dashboard');

    Route::get('detail/{id}', [AdController::class, 'detail'])->name('detail');

    Route::get('/user', function () {
        return view('user');
    })->name('user');

    Route::get('get-ad', [AdController::class, 'getAdData'])->name('get-ad');

});


require __DIR__.'/auth.php';
