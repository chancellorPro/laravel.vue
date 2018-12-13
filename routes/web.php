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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'StartController@index')->name('start');
Route::get('/get-json', 'StartController@getJson')->name('getJson');
Route::get('/chart-data', 'StartController@chartData')->name('chartData');
Route::get('/home', 'HomeController@index')->name('home');
