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

Route::namespace('Auth')->group(function(){
    Route::namespace('Login')->group(function(){
        Route::get('/login','LoginController@login')->name('login');
        Route::post('/login','LoginController@CheckLogin');
    });
    Route::namespace('Register')->group(function(){
        Route::get('/register','RegisterController@register');
        Route::post('/confirm','RegisterConfirmController@confirm');
        Route::post('/added','RegisterAddedController@added');
    });
});

/*
Route::group(['middleware' => 'auth'],function(){
    Rote::namespace('Authenticated')->group(function(){
        Route::namespace('Admin')->group(function(){
            Route::
            Route::
            Route::
            Route::
        });
        Route::namespace('User')->group(function(){
            Route::
            Route::
            Route::
            Route::
        });
    });
});
*/
