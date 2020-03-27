<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Cookie;
use Config;

class HomeController extends Controller
{

    public function changeLanguage($language){

        $CF_COOKIE_LANGUAGE = config('system.COOKIE_LANGUAGE');
        
        $time = time() + 60 * 60 * 24 * 360; //One year
        $cookie = Cookie::make($CF_COOKIE_LANGUAGE, $language, $time);
        return redirect()->back()->withCookie($cookie);
    }
}
