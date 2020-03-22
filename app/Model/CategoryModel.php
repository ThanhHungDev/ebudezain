<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'category';
    /*
     * lấy dữ liệu: from relation 1 -> n then use hasMany
     * */
    public function category_type($fillable = null){
        return $this->hasMany(CategoryTypeModel::class, 'category_id', 'id')->get($fillable);
    }

    public function category_style($fillable = null){
        return $this->hasManyThrough(
            CategoryStyleModel::class, 
            CategoryTypeModel::class, 
            'category_id', 
            'category_type_id', 
            'id')->get($fillable);
    }
}
