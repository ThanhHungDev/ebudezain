<?php 

namespace App\Transfer;

interface IDataSidebar{
    
    public function build();
    public function setPost($postId);
    public function setType($typeId);
    public function setStyle($styleId);
    public function setCategory($categoryId);
    public function setLimit($limit);
    public function setJobIgnore($jobIgnore);

}