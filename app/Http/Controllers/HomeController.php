<?php

namespace App\Http\Controllers;

use App\FactoryModel\IFactoryModel;
use App\Http\Controllers\Controller;
use App\Model\PostModel;
use Config;
use Illuminate\Http\Request;
use App\Transfer\DataSidebarBuilder;
use App\Model\DataSidebar;
use Illuminate\Support\Facades\DB;

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

        $postModel    = $this->nomalModel->createPostModel();
        $post         = $postModel->firstPostBySlug($slug);
        $contentPost  = $post->content;
        $sidebarBuilder = new DataSidebarBuilder();
        $sidebarModel = $sidebarBuilder
                        ->setModel($this->nomalModel)
                        ->setPost($post->id)
                        ->settype($post->category_type_id)
                        ->setLimit($DF_LIMIT)
                        ->build();

        $sidebar['postNew']    = $sidebarModel->getPostsNew()->get()->toArray();
        $sidebar['postRelate'] = $sidebarModel->getPostsRelate();

        $postRelateIgnore = array_map(function($item){ return $item->id; }, $sidebar['postNew']);
        $sidebarModel     = $sidebarBuilder->setJobIgnore(implode(", ", $postRelateIgnore))->build();

        $sidebar['postRelateIgnore'] = $sidebarModel->getPostsRelateIgnore();

        $dataLayout = $post;

        return view('client.post', compact(['post', 'slug', 'sidebar', 'dataLayout']) );
    }

    public function home(){
        
        return view('client.home');
    }

    public function cate($slug = null){
        
        $topic    = null;
        $DF_LIMIT = config('system.limit');

        $typeModel = $this->nomalModel->createCategoryTypeModel();
        $topic     = $typeModel->firstTypeBySlug($slug);

        if( empty($topic) ){

            $styleModel = $this->nomalModel->createCategoryStyleModel();
            $topic      = $styleModel->firstStyleBySlug($slug);
        }

        if( empty($topic) ){

            $categoryModel = $this->nomalModel->createCategoryModel();
            $topic         = $categoryModel->firstCategoryBySlug($slug);
        }

        $sidebarBuilder = new DataSidebarBuilder();
        $sidebarModel   = $sidebarBuilder
                        ->setModel($this->nomalModel)
                        ->settype($topic->id)
                        ->setLimit($DF_LIMIT)
                        ->build();

        $sidebar['postNew'] = $sidebarModel->getPostsNew()->get()->toArray();

        $postRelateIgnore = array_map(function($item){ return $item->id; }, $sidebar['postNew']);
        $sidebarModel     = $sidebarBuilder->setJobIgnore(implode(", ", $postRelateIgnore))->build();

        $sidebar['postRelateIgnore'] = $sidebarModel->getPostsRelateIgnore();

        $dataLayout = $topic;

        return view('client.topic', compact(['topic', 'slug', 'sidebar', 'dataLayout']) );
    }

    public function search(Request $request){

        $DF_LIMIT  = config('system.limit');
        $condition = $request->all();
        $data      = array();

        $data['post']    = (new PostModel())->search($condition)->paginate($DF_LIMIT);
        return view( 'client.search', compact(['data']));
    }
}
