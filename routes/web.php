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
Route::get('/register/', "AuthController@registerIndex");
Route::post('/register', "AuthController@register");
Route::get('/register/affiliate/{affiliate}', "AuthController@registerIndex");
Route::post('/login', "AuthController@login");
Route::get('/logout', "AuthController@logout");

Route::get('/countrys/country/fetch', "LocationController@fetchCountry");

Route::get('/categories', "CategoryController@indexUser")->name('categories.indexUser');;
Route::get('/categories/fetch', 'CategoryController@fetchAll');

Route::get('/upload', "VideoController@upload");
Route::post('/upload', "VideoController@store");

Route::get('/myaccount/', 'AccountController@myaccount');

Route::get('/account', 'UserController@account');
Route::post('/account/update', 'AccountController@accountUpdate')->name('account.update');
Route::post('/account/updatePass', 'AccountController@accountUpdatePass')->name('account.passUpdate');

Route::post('/account/fetch', 'AccountController@getUser')->name('account.getUser');
Route::get('/account/notices/fetch', 'AccountController@getNotices');
Route::get('/account/profile', 'AccountController@profile');
Route::get('/account/channel/index', 'ChannelController@index');
Route::post('/account/channel/store', 'ChannelController@store')->name('channel.store');
Route::get('/account/channel/user/fetch', 'ChannelController@fetchByUser');

Route::get('/channel/slug/{slug}', 'ChannelController@slug');
Route::get('/channel/user/fetch', 'ChannelController@fetchChannelByUser');
Route::get('/channel/video/{channelId}/{page}', 'ChannelController@fetchVideosByChannel');


Route::get('/user/videos/fetch/{page}', 'VideoController@userVideos');

Route::get('/notice/{slug}', 'NoticeController@slug');

Route::get('/referrals', "UserController@referrals");
Route::get('/myreferrals', "UserController@myreferrals");

Route::get('/balance', 'BalanceController@index');
Route::get('/balance/fetch', 'BalanceController@fetchBalance');

Route::get('/admin/dashboard', "DashboardController@index")->name('admin.dashboard');
Route::get('/admin/videos/index', 'VideoController@adminIndex')->name('admin.video.index');
Route::get('/admin/videos/fetch/{page}', 'VideoController@fetch');
Route::post('/admin/videos/approve/', 'VideoController@approve');
Route::post('/admin/videos/reject/', 'VideoController@reject');

Route::get('/admin/users/index', 'UserController@adminIndex')->name('admin.users.index');
Route::get('/admin/users/fetch/{page}', 'UserController@getAllUsers');
Route::post('/admin/users/upgradeTrainer', 'UserController@upgradeTrainer');
Route::post('/admin/users/downgradeUser', 'UserController@downgradeUser');

Route::get('/admin/notice/index', 'NoticeController@index')->name('admin.notice.index');
Route::get('/admin/notice/create', 'NoticeController@create')->name('admin.notice.create');
Route::get('/admin/notice/fetch/{page}', 'NoticeController@fetch')->name('admin.notice.fetch');
Route::post('/admin/notice/delete', 'NoticeController@delete')->name('admin.notice.delete');
Route::post('/admin/notice/store', 'NoticeController@store')->name('admin.notice.store');

Route::get('/admin/category/index', 'CategoryController@index')->name('admin.category.index');
Route::get('/admin/category/create', 'CategoryController@create')->name('admin.category.create');
Route::get('/admin/category/fetch/{page}', 'CategoryController@fetch')->name('admin.category.fetch');
Route::post('/admin/category/delete', 'CategoryController@delete')->name('admin.category.delete');
Route::post('/admin/category/store', 'CategoryController@store')->name('admin.category.store');

