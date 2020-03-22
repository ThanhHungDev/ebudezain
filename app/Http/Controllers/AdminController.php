<?php

namespace App\Http\Controllers;

use App\Model\CategoryModel;
use App\Model\CategoryStyleModel;
use App\Model\CategoryTypeModel;
use App\Model\PostModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function categoryTypesByCategoryId(Request $request){
        $categoryId = $request->input('id');

        if(!$categoryId){
            $types = (new CategoryTypeModel())->all(['id', 'name']);
        }else{
            $category = (new CategoryModel())->where('id', $categoryId)->first();
            $types = $category->category_type(['id', 'name']);
        }

        $status = 200;
        $data = array(
            'status'    => $status,
            'message'   => 'list data type ' . $categoryId,
            'internal'  => 'list data category',
            'data'      => $types
        );
        return response()->json( $data, $status );
    }

    public function categoryStylesByCategoryId(Request $request){

        $categoryId = $request->input('id');
        if(!$categoryId){
            $styles = (new CategoryStyleModel())->all(['category_style.id', 'category_style.name']);
        }else{
            $type = DB::table('category_type')->join('category', 'category.id', '=', 'category_type.category_id')
            ->where('category.id' , '=', $categoryId)->first(['category_type.id']);
            $styles = [];
            if($type){
                $typeId = $type->id;
                $styles = DB::table('category_style')->where('category_type_id', '=' , $typeId)
                ->get(['category_style.id', 'category_style.name']);
            }
        }
        $status = 200;
        $data = array(
            'status'    => $status,
            'message'   => 'list data style ' . $categoryId,
            'internal'  => 'list data category',
            'data'      => $styles
        );
        return response()->json( $data, $status );
    }

    public function categoryByTypeId(Request $request){
        $typeId = $request->input('id');

        if(!$typeId){
            $category = (new CategoryModel())->all(['category.id', 'category.name']);
        }else {
            $category = DB::table('category_type')->join('category', 'category.id', '=', 'category_type.category_id')
            ->where('category_type.id' , '=', $typeId)->get(['category.id', 'category.name']);
        }
        
        $status = 200;
        $data = array(
            'status'    => $status,
            'message'   => 'list data style ' . $typeId,
            'internal'  => 'list data category',
            'data'      => $category
        );
        return response()->json( $data, $status );
    }
    

    public function categoryStylesByTypeId(Request $request){
        $typeId = $request->input('id');

        if(!$typeId){
            $styles = (new CategoryStyleModel())->all(['category_style.id', 'category_style.name']);
        }else{
            $styles = (new CategoryTypeModel())->find($typeId)
            ->category_style(['category_style.id', 'category_style.name']);
        }
        
        $status = 200;
        $data = array(
            'status'    => $status,
            'message'   => 'list data style ' . $typeId,
            'internal'  => 'list data category',
            'data'      => $styles
        );
        return response()->json( $data, $status );
    }
}
