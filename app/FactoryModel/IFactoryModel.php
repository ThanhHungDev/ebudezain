<?php 

namespace App\FactoryModel;

interface IFactoryModel
{
    
    public function createCategoryModel();
    public function createCategoryStyleModel();
    public function createCategoryTypeModel();
    public function createImageModel();
    public function createPostActiveStyleModel();
    public function createPostModel();
    public function createRatingActiveModel();
    public function createRatingModel();
    public function createDBModel();

}
