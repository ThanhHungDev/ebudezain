<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;
use Config;

class HomeController extends Controller
{

    public function changeLanguage($language){

        $CF_SESSION_LANGUAGE = config('system.SESSION_LANGUAGE');
        Session::put($CF_SESSION_LANGUAGE, $language);

        return redirect()->back();
    }
}
