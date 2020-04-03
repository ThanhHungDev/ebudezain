<?php

namespace App\FactoryModel;

use App\FactoryModel\IFactoryModel;
use App\Model\CategoryModel;
use App\Model\CategoryStyleModel;
use App\Model\CategoryTypeModel;
use App\Model\ImageModel;
use App\Model\PostActiveStyleModel;
use App\Model\PostModel;
use App\Model\RatingActiveModel;
use App\Model\RatingModel;
use Illuminate\Support\Facades\DB;

class NomalModel implements IFactoryModel{

    public static $CategoryModel;
    public static $CategoryStyleModel;
    public static $CategoryTypeModel;
    public static $ImageModel;
    public static $PostActiveStyleModel;
    public static $PostModel;
    public static $RatingActiveModel;
    public static $RatingModel;
    public static $DBModel;


    public function createCategoryModel(){
        
        if(!self::$CategoryStyleModel){
            self::$CategoryStyleModel = new CategoryStyleModel();
        }
        return new CategoryModel();
    }
    public function createCategoryStyleModel(){

        if(!self::$CategoryStyleModel){
            self::$CategoryStyleModel = new CategoryStyleModel();
        }
        return self::$CategoryStyleModel;
    }
    public function createCategoryTypeModel(){

        if(!self::$CategoryTypeModel){
            self::$CategoryTypeModel = new CategoryTypeModel();
        }
        return self::$CategoryTypeModel;
    }
    public function createImageModel(){

        if(!self::$ImageModel){
            self::$ImageModel = new ImageModel();
        }
        return self::$ImageModel;
    }
    public function createPostActiveStyleModel(){

        if(!self::$PostActiveStyleModel){
            self::$PostActiveStyleModel = new PostActiveStyleModel();
        }
        return self::$PostActiveStyleModel;
    }
    public function createPostModel(){

        if(!self::$PostModel){
            self::$PostModel = new PostModel();
        }
        return self::$PostModel;
    }
    public function createRatingActiveModel(){

        if(!self::$RatingActiveModel){
            self::$RatingActiveModel = new RatingActiveModel();
        }
        return self::$RatingActiveModel;
    }
    public function createRatingModel(){

        if(!self::$RatingModel){
            self::$RatingModel = new RatingModel();
        }
        return self::$RatingModel;
    }

    public function createDBModel(){

        if(!self::$DBModel){
            self::$DBModel = new DB();
        }
        return self::$DBModel;
    }
}