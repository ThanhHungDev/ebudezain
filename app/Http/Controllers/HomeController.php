<?php

namespace App\Http\Controllers;

use App\FactoryModel\IFactoryModel;
use App\Http\Controllers\Controller;
use Cookie;
use Config;
use Request;

class HomeController extends Controller
{

    private $nomalModel = null;

    public function __construct(IFactoryModel $model) // Ở đây Service Container sẽ "tiêm" instance của RedisEventPusher vào
    {
        $this->nomalModel = $model;
    }

    public function changeLanguage($language){

        $CF_COOKIE_LANGUAGE = config('system.COOKIE_LANGUAGE');
        
        $time = time() + 60 * 60 * 24 * 360; //One year
        $cookie = Cookie::make($CF_COOKIE_LANGUAGE, $language, $time);
        return redirect()->back()->withCookie($cookie);
    }

    public function post( $slug ){

        $postModel = $this->nomalModel->createPostModel();
        $post = $postModel->firstPostBySlug($slug);
        
        $sidebar = $this->data_sidebar( $post->id );
        return $this->container->view->render( $res , 'client/post.twig', compact(['post', 'comments', 'slug', 'sidebar']) );
    }

    public function home(){
        return view('client.home');
    }

    public function cate($slug = null){
        return 1;
    }

    private function data_sidebar($post_id = 0, $topic_id = 0){

        $post         = array();
        $postModel = $this->nomalModel->createPostModel();

        $postsNew   = $postModel->getPostsNew()->get();
        $postsNewId = array_map(function($item){return $item->id;}, $postsNew->toArray());
        
        $conditionPostsRelateIgnore = implode(", ", $postsNewId);
        $conditionPostsRelate = array(
            (int)$post_id,
            (int)$topic_id,
            $conditionPostsRelateIgnore,
            (int)config('system.limit')
        );
        $postsRelated    = $postModel->getPostsRelateIgnore($conditionPostsRelate);


        return $post;
    }
}
