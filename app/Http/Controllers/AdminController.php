<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request){
        return view('admin.dashboard');
    }

    public function insertPost(Request $request){
        
        $tag_activity = array();
        $topics       = (new TopicModel())->all();
        $tags         = (new TagModel())->all();
        /// get data input
        $slug         = isset( $args['slug'] ) ? $args['slug'] : null ;
        ///get error and data old
        $messages   = $this->container->flash->getMessages();
        if(!empty($messages)){
            @list( 'post' => $post, 'errors' => $errors ) = $messages[static::$DF_ERROR_SAVE_POST][0];
        }
        /// if is first request => old data null
        if( empty( $post ) ){

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
