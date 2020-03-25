<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostActiveStyleModel extends Model
{
    protected $table = 'post_active_style';

    public function removeByPostId($postId){
        return $this->where('post_id', $postId)->delete();
    }
}
