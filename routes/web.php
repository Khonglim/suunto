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

Route::get('/', function () {
    return view('suunto/index');
});

Route::get('/bts', function () {
    
});

Route::get('/bts', 'BkkController@BtsShow')->name('bts');

Route::get('/mrt', 'BkkController@MrtShow')->name('mrt');

Route::get('/shopping_mall', 'BkkController@ShopShow')->name('shopping_mall');

Route::get('/otherBKK', 'BkkController@OtherShow')->name('otherShow');


Route::get('/chon', 'ProvincialController@ChonShow')->name('chon');














Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
