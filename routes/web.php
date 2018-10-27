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
Route::get('/', function () {
    return view('suunto.index');
});

Route::get('/ProvinceShow', 'ShowController@index');

Route::get('/SearchProvince/{province}', 'SearchController@index');

Auth::routes();





