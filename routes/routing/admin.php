<?php

Route::get('/',function(){return "hùng đẹp trai home page client";})->name('CLIENT_HOME');
Route::group(['prefix' => 'admin'], function () {

    Route::get('/login','LoginController@getLogin')->name('ADMIN_LOGIN');
    Route::post('/login','LoginController@postLogin')->name('ADMIN_POST_LOGIN');
    Route::get('/logout','LoginController@logout')->name('ADMIN_LOGOUT');

    Route::group(['prefix' => '/', 'middleware' => 'CHECK_ADMIN_LOGIN'], function () {

        Route::get('/dashboard','AdminController@dashboard')->name('ADMIN_DASHBOARD');
        Route::get('/post','AdminController@insertPost')->name('ADMIN_INSERT_POST');
        Route::post('/post','AdminController@savePost')->name('ADMIN_POST_INSERT_POST');
        
        Route::delete('/delete/{slug}','AdminController@deleteSlug')->name('ADMIN_DELETE_SLUG');
    });
});