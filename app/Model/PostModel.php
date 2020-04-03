<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PostModel extends Model
{
    protected $table                     = 'post';
    
    
    /**
     * là mối quan hệ dạng nhiều nhiều ví dụ : product -> activity -> style thì thứ tự sẽ là như dưới
     */
    public function category_style(){
        return $this->belongsToMany(CategoryStyleModel::class, 'post_active_style', 'post_id', 'style_id');
    }

    public function firstPostBySlug($slug){

        return $this->where('slug', $slug)->first();
    }

    public function type(){
        return $this->belongsTo(CategoryTypeModel::class, 'category_type_id', 'id');
    }

    public function getCategoryId($slug){

        return $this;
    }

    public function getAll(){
        return $this->all();
    }

    
}
