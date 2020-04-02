<?php 


Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('CHANGE_LANGUAGE');


Route::group(['middleware' => 'LANGUAGE'], function() {
    Route::get('/','HomeController@home')->name('CLIENT_HOME');
    
    Route::get('/topic/{slug?}','HomeController@cate')->name('CLIENT_GET_CATE');
    Route::get('/search','HomeController@search')->name('SEARCH');
    
});