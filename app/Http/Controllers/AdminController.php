<?php

namespace App\Http\Controllers;

use App\Model\CategoryModel;
use App\Model\CategoryStyleModel;
use App\Model\CategoryTypeModel;
use App\Model\PostModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request){
        return view('admin.dashboard');
    }

    public function insertPost(){

        $categories = (new CategoryModel())->all();
        $types      = (new CategoryTypeModel())->all();
        $styles     = (new CategoryStyleModel())->all();
        return view('admin.post', compact(['categories', 'types', 'styles']));
    }

    public function deleteSlug(Request $request){
        return '34234';
    }

    public function slug($slug = null ){

        $exist = false;
        $postModel = new PostModel();
        $post = $postModel->where('slug', $slug )->get(['title', 'slug']);
        if( !$post->isEmpty()){
            $exist = array( 'index' => 'Post' , 'data' => $post );
        }
        if( !$exist ){
            $categoryModel = new CategoryModel();
            $category = $categoryModel->where( 'slug', $slug )->get();
            if( !$category->isEmpty()){
                $exist = array( 'index' => 'Category' , 'data' => $category );
            }
        }
        if( !$exist ){
            $categoryTypeModel = new CategoryTypeModel();
            $type = $categoryTypeModel->where('slug', $slug )->get();
            if( !$type->isEmpty()){
                $exist = array( 'index' => 'CategoryType' , 'data' => $type );
            }
        }
        if( !$exist ){
            $categoryStyleModel = new CategoryStyleModel();
            $style = $categoryStyleModel->where('slug', $slug )->get();
            if( !$style->isEmpty()){
                $exist = array( 'index' => 'CategoryType' , 'data' => $style );
            }
        }
        $status = 200;
        $data = array(
            'status'    => $status,
            'message'   => 'chưa tồn tại slug: ' . $slug,
            'internal'  => 'chưa tồn tại slug',
            'data'      => $exist
        );
        if( $exist ){
            $data = array(
                'status'    => $status,
                'message'   => 'exist slug: ' . $slug,
                'internal'  => 'exist slug',
                'data'      => $exist
            );
        }
        return response()->json($data, $status);
    }
}
