<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table = 'post';
    /**
     * là mối quan hệ dạng nhiều nhiều ví dụ : product -> activity -> style thì thứ tự sẽ là như dưới
     */
    public function category_style(){
        return $this->belongsToMany(CategoryStyleModel::class, PostActiveStyleModel::class, 'post_id', 'style_id')->get();
    }

    public function getPostBySlug($slug){

        return $this->where('slug', $slug)->take(1)->get();
    }

    public function getCategoryId($slug){

        return $this->where('slug', $slug)->take(1)->get();
    }

    public function getAll(){
        return $this->all();
    }

}
