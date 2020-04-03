<?php

use App\FactoryModel\IFactoryModel;

interface IDataSidebar{
    
    public function build();
    public function setPost();
    public function setType();
    public function setStyle();
    public function setCategory();

}


class DataSidebarBuilder implements IDataSidebar{
    public $postId;
    public $typeId;
    public $styleId;
    public $categoryId;
    
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
    
    public function build(){
        return new DataSidebar($this);
    }

} 
class DataSidebar{
    
    public static $TABLE_POST_NEW           = 'post_new';
    public static $TABLE_POST_RELATE        = 'call post_relate( ?, ?, ? );';
    public static $TABLE_POST_RELATE_IGNORE = 'call post_relate_ignore( ?, ?, ?, ? );';

    private $postId;
    private $typeId;
    private $styleId;
    private $categoryId;

    private $DF_CONDITION_POST_RELATE = array(0 , 0 , 10);
    private $DF_CONDITION_POST_RELATE_IGNORE = array(0 , 0, "0", 10);

    private $nomalModel = null;
    
    public function __construct(DataSidebarBuilder $builder, IFactoryModel $model){

        $this->postId     = (int)$builder->postId;
        $this->typeId     = (int)$builder->typeId;
        $this->styleId    = (int)$builder->styleId;
        $this->categoryId = (int)$builder->categoryId;

        $this->nomalModel = $model;
    }

    public function getPostsNew(){

        return $this->nomalModel->createDBModel()->table($this->distanceViewPostNew);
    }

    private function renderConditionPostRelate(): array{
        $condition = array();

        if(!$this->postId){
            return $this->DF_CONDITION_POST_RELATE;
        }


        $condition = array( $this->postId, $this->typeId, );

        return $condition;
    }
    public function getPostsRelate(){

        $condition = $this->renderConditionPostRelate();
        return $this->nomalModel->createDBModel()->table($this->procedurePostRelate, $condition);
    }

    public function getPostsRelateIgnore($condition){

        $DEFAULT_CONDITION_NULL = array(0 , 0 , "0", 10);

        if(is_assoc($condition)){
            $condition = $DEFAULT_CONDITION_NULL;
        }
        return $this->nomalModel->createDBModel()->table($this->procedurePostRelate, $condition);
    }
    
} 