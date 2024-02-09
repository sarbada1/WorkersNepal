<?php

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
    return view('welcome');
});

Route::controller(UserController::class)->group(function(){

Route::get('auth/signin','login')->middleware('alreadyLoggedIn')->name('auth.signin');
Route::get('auth/signup','register')->middleware('alreadyLoggedIn')->name('auth.signup');
Route::post('/register-user','registerUser')->name('register.user');
Route::post('/login-user' ,'loginUser')->name('login.user');
Route::get('/home/view' ,'profile')->middleware('isLoggedIn')->name('profile');
Route::get('/logout','logout')->name('auth.logout');
Route::get('/home/profile','user_info')->middleware('isLoggedIn')->name('user_info');
Route::get('/home/jobs','jobs')->middleware('isLoggedIn')->name('jobs');

});

