<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryStyleModel extends Model
{
    protected $table = 'category_style';

    public function type(){
        return $this->belongsTo(CategoryTypeModel::class, 'category_type_id', 'id');
    }

    public function firstOrFailStyleBySlug($slug = null){

        return $this->where('slug', $slug)->firstOrFail();
    }
}
