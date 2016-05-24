<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/pay-school', 'PageController@pay');
Route::get('/features', 'PageController@feature');
Route::get('/about-upg', 'PageController@about');
Route::get('/home', 'PageController@home');
Route::get('/account', 'PageController@account');
Route::get('/paymethods', 'PageController@paymethods');
Route::get('/ontransactions', 'PageController@ontransactions');
Route::get('/pasttransactions', 'PageController@pasttransactions');
Route::get('/dashboard', 'adminController@dashboard');
Route::get('/clientarea', 'adminController@client');
Route::get('/completedtrans', 'adminController@completed');
Route::get('/ongoingtrans', 'adminController@ongoing');
