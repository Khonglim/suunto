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

Route::get('/chiangrai', 'ProvincialController@ChiangraiShow')->name('chiangrai');

Route::get('/chiangmai', 'ProvincialController@ChiangmaiShow')->name('chiangmai');

Route::get('/lampang', 'ProvincialController@LampangShow')->name('lampang');

Route::get('/nakhonratchasima', 'ProvincialController@NakhonratchasimaShow')->name('nakhonratchasima');

Route::get('/nonthaburi', 'ProvincialController@NonthaburiShow')->name('nonthaburi');

Route::get('/pathumthani', 'ProvincialController@PathumthaniShow')->name('pathumthani');

Route::get('/prachuapkhirikhan', 'ProvincialController@PrachuapkhirikhanShow')->name('prachuapkhirikhan');

Route::get('/phuket', 'ProvincialController@PhuketShow')->name('phuket');

Route::get('/rayong', 'ProvincialController@RayongShow')->name('rayong');

Route::get('/songkhla', 'ProvincialController@SongkhlaShow')->name('songkhla');

Route::get('/samutsakhon', 'ProvincialController@SamutsakhonShow')->name('samutsakhon');

Route::get('/samutprakan', 'ProvincialController@SamutprakanShow')->name('samutprakan');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
