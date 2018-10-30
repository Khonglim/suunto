<?php

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
Route::resource('admin','AddLocalController');
Route::resource('addstore','AddstoreController');
Route::resource('online','OnlineController');

Route::get('/', function () {
    return view('suunto.index');
});

Route::get('/ProvinceShow', 'ShowController@province');
Route::get('/BkkShow', 'ShowController@bkk');

Route::get('/BtsShow', 'BkkController@BtsShow');
Route::get('/MrtShow', 'BkkController@MrtShow');
Route::get('/ShopShow', 'BkkController@ShopShow');
Route::get('/OtherShow', 'BkkController@OtherShow');

Route::get('/SearchProvince/{province}', 'SearchController@index');

Auth::routes();

Route::get('/online', function () {
    return view('suunto.shoponline.online');
});




