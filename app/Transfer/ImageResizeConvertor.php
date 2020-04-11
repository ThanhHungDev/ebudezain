<?php 

namespace App\Tranfer;

class ImageResizeConvertor {

    private $images = array();

    public function __construct($jsonLstImage){

        $this->images = $this->convertImageArray($jsonLstImage);
    }
    public static function convertImageArray($image){
        if(!$images){
            return array();
        }
        return json_decode($images);
    }

    public function getAttribute( $selector ){
        if(!isset($this->images[$selector])){
            return null;
        }
        return $this->images[$selector];
    }

    public static function getAttributeImagesJson($imagesJson = '', $selector = null){

        $images = self::convertImageArray($imagesJson);
        if(!isset($images[$selector])){
            return null;
        }
        return $images[$selector];
    }
}