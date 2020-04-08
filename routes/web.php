<?php

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

Route::get('/login', "AuthController@loginIndex");
Route::get('/register', "AuthController@registerIndex");
Route::post('/register', "AuthController@register");
Route::post('/login', "AuthController@login");
Route::get('/logout', "AuthController@logout");