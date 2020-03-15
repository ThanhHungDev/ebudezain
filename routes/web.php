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
Route::get('/',function(){return "hùng đẹp trai home page client";})->name('CLIENT_HOME');
Route::group(['prefix' => 'admin'], function () {

    Route::get('/login','LoginController@getLogin')->name('ADMIN_LOGIN');
    Route::post('/login','LoginController@postLogin')->name('ADMIN_POST_LOGIN');
    Route::get('/logout','LoginController@logout')->name('ADMIN_LOGOUT');

    Route::group(['prefix' => '/', 'middleware' => 'check_admin_login'], function () {

        Route::get('/dashboard','AdminController@dashboard')->name('ADMIN_DASHBOARD');
    });
});
