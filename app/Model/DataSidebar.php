<?php 
namespace App\Model;

use App\Transfer\DataSidebarBuilder;
use App\Transfer\IDataSidebar;
use App\FactoryModel\IFactoryModel;


class DataSidebar{
    
    public static $TABLE_POST_NEW           = 'post_new';
    public static $TABLE_POST_RELATE        = 'call post_relate( ?, ?, ? );';
    public static $TABLE_POST_RELATE_IGNORE = 'call post_relate_ignore( ?, ?, ?, ? );';

    private $postId;
    private $typeId;
    private $styleId;
    private $categoryId;
    private $limit;

    private $DF_CONDITION_POST_RELATE = array(0 , 0 , 10);
    private $DF_CONDITION_POST_RELATE_IGNORE = array(0 , 0, "0", 10);

    private $nomalModel = null;
    
    public function __construct(DataSidebarBuilder $builder, IFactoryModel $model){

        $this->postId     = (int)$builder->postId;
        $this->typeId     = (int)$builder->typeId;
        $this->styleId    = (int)$builder->styleId;
        $this->categoryId = (int)$builder->categoryId;
        $this->limit      = (int)$builder->limit;
        $this->diff       = $builder->diff;

        $this->nomalModel = $model;
    }

    public function getPostsNew(){

        return $this->nomalModel->createDBModel()->table(self::$TABLE_POST_NEW);
    }

    private function renderConditionPostRelate(): array{
        $condition = array();

        if(!$this->postId && !$this->typeId){
            return $this->DF_CONDITION_POST_RELATE;
        }
        $condition = array( $this->postId, $this->typeId, $this->limit);

        return $condition;
    }

    private function renderConditionPostRelateIgnore(): array{
        $condition = array();

        if(!$this->postId && !$this->typeId){
            return $this->DF_CONDITION_POST_RELATE_IGNORE;
        }
        $condition = array( $this->postId, $this->typeId, $this->diff, $this->limit);

        return $condition;
    }

    public function getPostsRelate(){

        $condition = $this->renderConditionPostRelate();
        return $this->nomalModel->createDBModel()->table($this->procedurePostRelate, $condition);
    }

    public function getPostsRelateIgnore($condition){

        $condition = $this->renderConditionPostRelateIgnore();
        return $this->nomalModel->createDBModel()->table($this->procedurePostRelate, $condition);
    }
    
} 