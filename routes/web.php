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
    return view('welcome');
});

Route::get('userinfo', function () {
    return view('userinfo');
});

Route::get('testing', function () {
    return view('testing');
});

Route::get('userinfo','RentalController@index');
// Route::get('','RentalController@create');
Route::get('/','RentalController@index');