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

Route::group(['middleware'=>['web']], function()
{
    Route::get('/home', 'HomeController@index');
    Route::get('/pay-school', 'PageController@pay');
    Route::get('/features', 'PageController@feature');
    Route::get('/about-upg', 'PageController@about');

    Route::group(['middleware' => 'App\Http\Middleware\ClientMiddleware'], function(){
        Route::get('/account', 'ClientController@account');
        Route::get('/vendor-area', 'ClientController@dashboard');
        Route::get('/paymethods', 'ClientController@paymethods');
        Route::get('/ontransactions', 'ClientController@ontransactions');
        Route::get('/pasttransactions', 'ClientController@pasttransactions');
        Route::post('company-info-save','CompanyInfoController@storeCompanyInfo');
        Route::post('/payment', 'EditPaymentMethod@update');
    });

    Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
    {
        Route::get('/clientarea', 'adminController@client');
        Route::get('/completedtrans', 'adminController@completed');
        Route::get('/ongoingtrans', 'adminController@ongoing');
        Route::get('/dashboard', 'adminController@dashboard');
        Route::get('/adminaccount', 'adminController@account');

    });
});

