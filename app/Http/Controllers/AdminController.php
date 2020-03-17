<?php

namespace App\Http\Controllers;

use App\Model\CategoryModel;
use App\Model\CategoryTypeModel;
use App\Model\PostModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request){
        return view('admin.dashboard');
    }

    public function insertPost(){

        return view('admin.post');
    }
}
