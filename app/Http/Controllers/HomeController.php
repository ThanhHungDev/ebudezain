<?php

namespace App\Http\Controllers;

use App\FactoryModel\IFactoryModel;
use App\Http\Controllers\Controller;
use App\Model\PostModel;
use Cookie;
use Config;
use Illuminate\Http\Request;
use App\Transfer\DataSidebarBuilder;
use App\Model\DataSidebar;

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
        $DF_LIMIT = config('system.limit');

        $postModel = $this->nomalModel->createPostModel();
        $post = $postModel->firstPostBySlug($slug);
        $sidebar = (new DataSidebarBuilder())
                            ->setModel($this->nomalModel)
                            ->setPost($post->id)
                            ->settype($post->category_type_id)
                            ->setLimit($DF_LIMIT)
                            ->build();
        $postNew = $sidebar->getPostsNew()->get();
        $postRelate = $sidebar->getPostsRelate();
        

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
