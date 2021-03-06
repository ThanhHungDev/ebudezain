<?php 
Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('CHANGE_LANGUAGE');

Route::get('/404', function(){
    echo 'không tìm thấy trang';
})->name('CLIENT_404');

Route::group(['middleware' => 'LANGUAGE'], function() {

    Route::get('/phpinfor', function(){ echo phpinfo();})->name('CLIENT_GET_POST');

    Route::get('/','HomeController@home')->name('CLIENT_HOME');
    
    Route::get('/topic/{slug?}','HomeController@cate')->name('CLIENT_GET_CATE');
    Route::get('/search','HomeController@search')->name('SEARCH');
    
    Route::get('/{slug}', 'HomeController@post')->name('CLIENT_GET_POST');

    
});

