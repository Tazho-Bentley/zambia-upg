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

<<<<<<< HEAD
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
Route::get('/clientinfo', 'adminController@client');
Route::get('/completedtrans', 'adminController@completed');
Route::get('/ongoingtrans', 'adminController@ongoing');
=======
Route::group(['middleware'=>['web']], function()
{
    Route::get('/home', 'HomeController@index');
    Route::get('/pay-school', 'PageController@pay');
    Route::get('/features', 'PageController@feature');
    Route::get('/about-upg', 'PageController@about');
    Route::get('/home', 'ClientController@home');
    Route::get('/account', 'ClientController@account');
    Route::get('/paymethods', 'ClientController@paymethods');
    Route::get('/ontransactions', 'ClientController@ontransactions');
    Route::get('/pasttransactions', 'ClientController@pasttransactions');
   // Route::get('/dashboard', 'adminController@dashboard');
    Route::get('/clientarea', 'adminController@client');
    Route::get('/completedtrans', 'adminController@completed');
    Route::get('/ongoingtrans', 'adminController@ongoing');

    //Protect this login access request dont forget
    //Must login me out before
    //Routes to the backend login
    Route::get('/admin/login', [
        'uses' => 'AdminController@getLogin',
        'as'=>'admin.login'
    ]);

    Route::get('/admin/dashboard', [
        'uses' => 'AdminController@dashboard',
        'as'=>'admin.dashboard'
    ]);
    //Post route to log into the backend
    Route::post('/admin/auth', [
        'uses' => 'AdminController@postLogin',
        'as'=>'auth'
    ]);
});

>>>>>>> b0aa830dfc34bd6c3dfbc3796a4ad96ddd74b1bb
