<?php

namespace App\Http\Controllers;

use App\Http\Requests\VALIDATE_SAVE_POST;
use App\Model\CategoryModel;
use App\Model\CategoryStyleModel;
use App\Model\CategoryTypeModel;
use App\Model\PostActiveStyleModel;
use App\Model\PostModel;
use App\Repositories\Contracts\PostRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    private $SAVE_SUCCESS = 'SAVE_SUCCESS';

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
            $types = $category->category_type()->get(['id', 'name']);
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
            ->category_style()->get(['category_style.id', 'category_style.name']);
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

    public function savePost(VALIDATE_SAVE_POST $request){

        $post                   = new PostModel();
        $post->title            = $request['title'];
        $post->slug             = $request['slug'];
        $post->excerpt          = $request['excerpt'];
        $post->content          = $request['content'];
        $post->thumbnail        = $request['thumbnail'];
        $post->category_type_id = $request['category_type_id'];
        $post->site_name        = $request['site_name'];
        $post->image_seo        = $request['image_seo'];
        $post->keyword_seo      = $request['keyword_seo'];
        $post->description_seo  = $request['description_seo'];

        try{
            $post->save();
        }catch (\Exception $e){
            return redirect()->back()->with('SAVE_ERROR', 'error save post '.$e->getMessage());
        }

        $styles = $request->category_style_id;

        foreach( $styles as $style ){

            $postActiveStyle           = new PostActiveStyleModel();
            $postActiveStyle->post_id  = $post->id;
            $postActiveStyle->style_id = $style;

            try{
                $postActiveStyle->save();
            }catch (\Exception $e){
                return redirect()->back()->with('SAVE_ERROR', 'error save post active style '.$e->getMessage());
            }
        }
        $request->session()->flash($this->SAVE_SUCCESS, true);
        return redirect()->route('ADMIN_GET_EDIT_POST',  ['id' => $post->id]);
    }
    public function getEditPost($id){
        if(!is_numeric($id)){
            $post = PostModel::first();
        }else{
            $post = PostModel::find($id);
        }

        if($post == null){
            return redirect()->route('ADMIN_DASHBOARD');
        }
        
        $categories = (new CategoryModel())->all();
        $types      = (new CategoryTypeModel())->all();
        $styles     = (new CategoryStyleModel())->all();
        return view('admin.post-edit', compact(['post', 'categories', 'types', 'styles']));
    }
}
