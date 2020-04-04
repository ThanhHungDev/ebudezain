<?php

namespace App\Transfer;
use App\Transfer\IDataSidebar;
use App\Model\DataSidebar;

class DataSidebarBuilder implements IDataSidebar{
    public $postId;
    public $typeId;
    public $styleId;
    public $categoryId;
    public $limit;
    public $diff;
    public $model;
    
    public function setPost($postId){

        $this->postId = $postId;
        return $this;
    }
    public function setType($typeId){

        $this->typeId = $typeId;
        return $this;
    }
    public function setStyle($styleId){

        $this->styleId = $styleId;
        return $this;
    }
    public function setCategory($categoryId){

        $this->categoryId = $categoryId;
        return $this;
    }

    public function setLimit($limit){

        $this->limit = $limit;
        return $this;
    }

    public function setJobIgnore($jobIgnore){

        $this->diff = $jobIgnore;
        return $this;
    }

    public function setModel($model){

        $this->model = $model;
        return $this;
    }
    
    public function build(){

        return new DataSidebar($this, $this->model);
    }

} 




use App\FactoryModel\IFactoryModel;

