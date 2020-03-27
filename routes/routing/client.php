<?php 


Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('CHANGE_LANGUAGE');


Route::group(['middleware' => 'LANGUAGE'], function() {
    Route::get('/',function(){
        return `hùng đẹp trai home page client
        
        <a href="{!! route('user.change-language', ['en']) !!}">English</a>
        <a href="{!! route('user.change-language', ['vi']) !!}">Vietnam</a>
        `;
    })->name('CLIENT_HOME');

});