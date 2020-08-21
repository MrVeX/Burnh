<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes([
    'verify' => false,
    'register'=> true,
    ]);


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/user', 'UserController@index')->name('user');
Route::post('/user/update', 'UserController@update')->name('updateUserInfo');
Route::get('/logout', 'LogoutController@logout')->name('logout');
