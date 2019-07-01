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

Route::get('/', [
    'uses' => 'ProductsController@getProducts',
    'as' => 'products.index'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix' => 'products'], function (){

    Route::get('/index', [
        'uses' => 'ProductsController@getProducts',
        'as' => 'products.index'
    ]);

    Route::get('/top', [
        'uses' => 'ProductsController@getTopProducts',
        'as' => 'products.top'
    ]);

    Route::get('/buy/{id}', [
        'uses' => 'ProductsController@buyProduct',
        'as' => 'product.buy',
        'middleware' => 'auth'
    ]);

});

Route::get('/customer/profile', [
    'uses' => 'CustomerController@getProfile',
    'as' => 'customer.profile',
    'middleware' => 'auth'
]);

Route::get('/api', [
    'uses' => 'CustomerController@getApi',
    'as' => 'api.test'
]);
