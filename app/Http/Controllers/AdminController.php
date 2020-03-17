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

        $categories = (new CategoryModel())->all();
        $types      = (new CategoryTypeModel())->all();

        /// if is first request => old data null
        if( $slug ){

            $postModel = new PostModel();
            $post = $postModel->getPostBySlug( $slug );
            if( $post ){
                /// get tag activity
                $tag_activity = $post->getTagActivity();
            }
        }
        return $this->container->view->render( 
            $res , 'admin/post-save.twig' , 
            compact( [ 'post' , 'errors', 'topics', 'tags', 'tag_activity'] ) 
        );
        return view('admin.post');
    }
}
