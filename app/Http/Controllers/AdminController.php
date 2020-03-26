<?php

namespace App\Http\Controllers;

use App\Http\Requests\VALIDATE_SAVE_CATEGORY;
use App\Http\Requests\VALIDATE_SAVE_POST;
use App\Http\Requests\VALIDATE_SAVE_STYLE;
use App\Http\Requests\VALIDATE_SAVE_TYPE;
use App\Model\CategoryModel;
use App\Model\CategoryStyleModel;
use App\Model\CategoryTypeModel;
use App\Model\PostActiveStyleModel;
use App\Model\PostModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    private $SAVE_SUCCESS = 'SAVE_SUCCESS';

    public function dashboard(Request $request){
        return view('admin.dashboard');
    }

    public function viewInsertPost(){

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

    public function insertPost(VALIDATE_SAVE_POST $request){

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

    public function posts(Request $request){
        $limit = 20;
        $posts = (new PostModel())->paginate($limit);
        return view('admin.post-list', compact(['posts']));
    }

    public function saveEditPost(VALIDATE_SAVE_POST $request, $id){
        
        $post                   = (new PostModel())->find($id);
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
        (new PostActiveStyleModel())->removeByPostId($post->id);

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

    public function deletePost($id = 0){

        (new PostModel())->find($id)->delete();

        $status = 200;
        $response = array( 'status' => $status, 'message' => 'success' );
        return response()->json( $response );
    }




    //////Category ///////////////////////////////////////
    public function viewInsertCategory(){

        return view('admin.category');
    }

    public function insertCategory(VALIDATE_SAVE_CATEGORY $request){

        $category                  = new CategoryModel();
        $category->name            = $request['name'];
        $category->slug            = $request['slug'];
        $category->excerpt         = $request['excerpt'];
        $category->thumbnail       = $request['thumbnail'];
        $category->background      = $request['background'];
        $category->description     = $request['description'];
        $category->site_name       = $request['site_name'];
        $category->image_seo       = $request['image_seo'];
        $category->keyword_seo     = $request['keyword_seo'];
        $category->description_seo = $request['description_seo'];

        try{
            $category->save();
        }catch (\Exception $e){
            return redirect()->back()->with('SAVE_ERROR', 'error save post '.$e->getMessage());
        }

        $request->session()->flash($this->SAVE_SUCCESS, true);
        return redirect()->route('ADMIN_GET_EDIT_CATEGORY',  ['id' => $category->id]);
    }
    public function getEditCategory($id){

        if(!is_numeric($id)){
            $category = CategoryModel::first();
        }else{
            $category = CategoryModel::find($id);
        }

        if($category == null){
            return redirect()->route('ADMIN_DASHBOARD');
        }
        return view('admin.category-edit', compact(['category']));
    }

    public function saveEditCategory(VALIDATE_SAVE_CATEGORY $request, $id){
    
        $category                  = (new CategoryModel())->find($id);
        $category->name            = $request['name'];
        $category->slug            = $request['slug'];
        $category->excerpt         = $request['excerpt'];
        $category->thumbnail       = $request['thumbnail'];
        $category->background      = $request['background'];
        $category->description     = $request['description'];
        $category->site_name       = $request['site_name'];
        $category->image_seo       = $request['image_seo'];
        $category->keyword_seo     = $request['keyword_seo'];
        $category->description_seo = $request['description_seo'];

        try{
            $category->save();
        }catch (\Exception $e){
            return redirect()->back()->with('SAVE_ERROR', 'error save category '.$e->getMessage());
        }

        $request->session()->flash($this->SAVE_SUCCESS, true);
        return redirect()->route('ADMIN_GET_EDIT_CATEGORY',  ['id' => $category->id]);
    }

    public function categories(Request $request){
        $limit      = 20;
        $categories = (new CategoryModel())->paginate($limit);
        return view('admin.category-list', compact(['categories']));
    }
    public function deleteCategory($id = 0){

        (new CategoryModel())->find($id)->delete();

        $status = 200;
        $response = array( 'status' => $status, 'message' => 'success' );
        return response()->json( $response );
    }

    //////type ///////////////////////////////////////
    public function viewInsertType(){

        $categories = (new CategoryModel())->all();
        return view('admin.type', compact(['categories']));
    }

    public function insertType(VALIDATE_SAVE_TYPE $request){

        $type                  = new CategoryTypeModel();
        $type->name            = $request['name'];
        $type->slug            = $request['slug'];
        $type->excerpt         = $request['excerpt'];
        $type->thumbnail       = $request['thumbnail'];
        $type->background      = $request['background'];
        $type->description     = $request['description'];
        $type->site_name       = $request['site_name'];
        $type->image_seo       = $request['image_seo'];
        $type->keyword_seo     = $request['keyword_seo'];
        $type->description_seo = $request['description_seo'];
        $type->category_id     = $request['category_id'];

        try{
            $type->save();
        }catch (\Exception $e){
            return redirect()->back()->with('SAVE_ERROR', 'error save type '.$e->getMessage());
        }

        $request->session()->flash($this->SAVE_SUCCESS, true);
        return redirect()->route('ADMIN_GET_EDIT_TYPE',  ['id' => $type->id]);
    }
    public function getEditType($id){

        if(!is_numeric($id)){
            $type = CategoryTypeModel::first();
        }else{
            $type = CategoryTypeModel::find($id);
        }

        if($type == null){
            return redirect()->route('ADMIN_DASHBOARD');
        }
        return view('admin.type-edit', compact(['type']));
    }
    public function saveEditType(VALIDATE_SAVE_TYPE $request, $id){
        
        $type                  = (new CategoryTypeModel())->find($id);
        $type->name            = $request['name'];
        $type->slug            = $request['slug'];
        $type->excerpt         = $request['excerpt'];
        $type->thumbnail       = $request['thumbnail'];
        $type->background      = $request['background'];
        $type->description     = $request['description'];
        $type->site_name       = $request['site_name'];
        $type->image_seo       = $request['image_seo'];
        $type->keyword_seo     = $request['keyword_seo'];
        $type->description_seo = $request['description_seo'];
        $type->category_id     = $request['category_id'];

        try{
            $type->save();
        }catch (\Exception $e){
            return redirect()->back()->with('SAVE_ERROR', 'error save category '.$e->getMessage());
        }

        $request->session()->flash($this->SAVE_SUCCESS, true);
        return redirect()->route('ADMIN_GET_EDIT_TYPE',  ['id' => $type->id]);
    }
    public function types(Request $request){
        $limit      = 20;
        $types = (new CategoryTypeModel())->paginate($limit);
        return view('admin.type-list', compact(['types']));
    }
    public function deleteType($id = 0){

        (new CategoryTypeModel())->find($id)->delete();

        $status = 200;
        $response = array( 'status' => $status, 'message' => 'success' );
        return response()->json( $response );
    }

    //////style ///////////////////////////////////////
    public function viewInsertStyle(){

        return view('admin.category');
    }

    public function insertStyle(VALIDATE_SAVE_STYLE $request){

        $style                   = new CategoryStyleModel();
        $style->name             = $request['name'];
        $style->slug             = $request['slug'];
        $style->excerpt          = $request['excerpt'];
        $style->thumbnail        = $request['thumbnail'];
        $style->background       = $request['background'];
        $style->description      = $request['description'];
        $style->site_name        = $request['site_name'];
        $style->image_seo        = $request['image_seo'];
        $style->keyword_seo      = $request['keyword_seo'];
        $style->description_seo  = $request['description_seo'];
        $style->category_type_id = $request['category_type_id'];

        try{
            $style->save();
        }catch (\Exception $e){
            return redirect()->back()->with('SAVE_ERROR', 'error save post '.$e->getMessage());
        }

        $request->session()->flash($this->SAVE_SUCCESS, true);
        return redirect()->route('ADMIN_GET_EDIT_STYLE',  ['id' => $style->id]);
    }
    public function getEditStyle($id){

        if(!is_numeric($id)){
            $style = CategoryStyleModel::first();
        }else{
            $style = CategoryStyleModel::find($id);
        }

        if($style == null){
            return redirect()->route('ADMIN_DASHBOARD');
        }
        return view('admin.style-edit', compact(['style']));
    }
    public function saveEditStyle(VALIDATE_SAVE_STYLE $request, $id){
        
        $style                   = (new CategoryTypeModel())->find($id);
        $style->name             = $request['name'];
        $style->slug             = $request['slug'];
        $style->excerpt          = $request['excerpt'];
        $style->thumbnail        = $request['thumbnail'];
        $style->background       = $request['background'];
        $style->description      = $request['description'];
        $style->site_name        = $request['site_name'];
        $style->image_seo        = $request['image_seo'];
        $style->keyword_seo      = $request['keyword_seo'];
        $style->description_seo  = $request['description_seo'];
        $style->category_type_id = $request['category_type_id'];

        try{
            $style->save();
        }catch (\Exception $e){
            return redirect()->back()->with('SAVE_ERROR', 'error save style '.$e->getMessage());
        }

        $request->session()->flash($this->SAVE_SUCCESS, true);
        return redirect()->route('ADMIN_GET_EDIT_STYLE',  ['id' => $style->id]);
    }
    public function styles(Request $request){
        $limit  = 20;
        $styles = (new CategoryStyleModel())->paginate($limit);
        return view('admin.style-list', compact(['styles']));
    }
    public function deleteStyle($id = 0){

        (new CategoryStyleModel())->find($id)->delete();

        $status = 200;
        $response = array( 'status' => $status, 'message' => 'success' );
        return response()->json( $response );
    }
}
