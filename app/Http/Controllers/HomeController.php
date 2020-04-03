<?php

namespace App\Http\Controllers;

use App\FactoryModel\IFactoryModel;
use App\Http\Controllers\Controller;
use App\Model\PostModel;
use Cookie;
use Config;
use Illuminate\Http\Request;

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

    public function search(Request $request){

        $DF_LIMIT  = config('system.limit');
        $condition = $request->all();
        $data      = array();

        $data['post']    = (new PostModel())->search($condition)->paginate($DF_LIMIT);
        return view( 'client.search', compact(['data']));
    }
}
