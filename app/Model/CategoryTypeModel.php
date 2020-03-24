<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryTypeModel extends Model
{
    protected $table = 'category_type';
    /**
     * from n ->  1 : use belongsTo
     */
    public function category(){
        return $this->belongsTo(CategoryModel::class, 'category_id', 'id');
    }
    /**
     * from 1 -> n : use hasMany
     */
    public function post(){
        return $this->hasMany(PostModel::class, 'category_type_id', 'id');
    }

    public function category_style(){
        return $this->hasMany(CategoryStyleModel::class, 'category_type_id', 'id');
    }
}
