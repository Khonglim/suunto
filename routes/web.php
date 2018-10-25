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

Route::get('/bts', 'BtsController@BtsShow')->name('BtsShow');









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
