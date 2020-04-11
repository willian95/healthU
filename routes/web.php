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

Route::get('/upload', "VideoController@upload");
Route::post('/upload', "VideoController@store");

Route::get('/account', 'UserController@account');
Route::get('/user/videos/fetch/{page}', 'VideoController@userVideos');

Route::get('/admin/dashboard', "DashboardController@index")->name('admin.dashboard');
Route::get('/admin/videos/index', 'VideoController@adminIndex')->name('admin.video.index');
Route::get('/admin/videos/fetch/{page}', 'VideoController@fetch');
Route::post('/admin/videos/approve/', 'VideoController@approve');
Route::post('/admin/videos/reject/', 'VideoController@reject');

