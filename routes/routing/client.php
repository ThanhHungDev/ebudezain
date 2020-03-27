<?php 


Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('CHANGE_LANGUAGE');


Route::group(['middleware' => 'LANGUAGE'], function() {
    Route::get('/',function(){
        return "hùng đẹp trai home page client";
    })->name('CLIENT_HOME');
    
});