<?php 
namespace App\Model;

use App\Transfer\DataSidebarBuilder;
use App\Transfer\IDataSidebar;
use App\FactoryModel\IFactoryModel;


class DataSidebar{
    
    public $TABLE_POST_NEW           = 'post_new';
    public $TABLE_POST_RELATE        = "call post_relate(?, ?, ?)";
    public $TABLE_POST_RELATE_IGNORE = "call post_relate_ignore(?, ?, ?, ?)";

    public static $CONNECTION_PDO = null;

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

        return call_user_func(array($this->nomalModel->createDBModel(), 'table'), $this->TABLE_POST_NEW);
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

    private function setConnectionPDO(){
        if(!self::$CONNECTION_PDO){
            $DB         = $this->nomalModel->createDBModel();
            $db         = $DB::connection()->getPdo();
            self::$CONNECTION_PDO = $db;
        }
    }

    public function getPostsRelate(){

        $this->setConnectionPDO();

        $conditions = $this->renderConditionPostRelate();
        
        $queryResult = self::$CONNECTION_PDO->prepare($this->TABLE_POST_RELATE);
        foreach($conditions as $key => $param ){
            $queryResult->bindParam( $key + 1, $param, \PDO::PARAM_INT); 
        } 

        $queryResult->execute(); 
        $results = $queryResult->fetchAll(\PDO::FETCH_CLASS);

        return $results;
    }

    public function getPostsRelateIgnore(){

        $this->setConnectionPDO();

        $conditions = $this->renderConditionPostRelateIgnore();

        $queryResult = self::$CONNECTION_PDO->prepare($this->TABLE_POST_RELATE);
        foreach($conditions as $key => $param ){
            if($key != 2 ){
                $queryResult->bindParam( $key + 1, $param, \PDO::PARAM_INT);
            }else{
                $queryResult->bindParam( $key + 1, $param, \PDO::PARAM_STR);
            }
        } 

        $queryResult->execute(); 
        $results = $queryResult->fetchAll(\PDO::FETCH_CLASS);

        return $results;
    }
    
} 