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

    public function insertPost($slug = null){

        $post = array(
            'id'               => null,
            'title'            => null,
            'slug'             => null,
            "excerpt"          => null,
            "content"          => null,
            "thumbnail"        => null,
            "category_type_id" => null,
            "like"             => null,
            'view'             => null,
            "publish"          => null,
            "site_name"        => null,
            "image_seo"        => null,
            "keyword_seo"      => null,
            "description_seo"  => null
        );
        $categories = (new CategoryModel())->all();
        $types      = (new CategoryTypeModel())->all();

        /// if is first request => old data null
        if( $slug ){

            $postModel = new PostModel();
            $postBySlug = $postModel->getPostBySlug( $slug );
            if($postBySlug){
                $post = $postBySlug;
            }
        }
        return view('admin.post', ['post' => $post]);
    }
}
