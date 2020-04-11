<?php
namespace App\Helpers;
class Image{
    public  $path             = null;
    public  $name             = null;
    public  $extention        = null;
    private $error            = null;
    private $width            = null;
    private $height           = null;
    private $image_extentions = array('jpeg','jpg','png','gif');

    public function __construct($_path_url)
    {
        $_path      = public_path($_path_url);  /// resource_path là hàm laravel 
        $this->path = $_path;
        $this->detect();
    }

    public function detect(){
        $this->detectExtention();
        if(!$this->error){
            $this->detectName();
        }
    }
    private function detectExtention(){
        /// detect extention
        $dot_extention_explode = explode('.', $this->path);
        if(!file_exists($this->path)){
            $this->error = "không tồn tại file path: " . $this->path;
        }
        if(!count($dot_extention_explode)){
            $this->error = "không tồn tại dấu '.' trong path: " . $this->path;
        }
        $this->extention = strtolower($dot_extention_explode[count($dot_extention_explode) - 1]);
        if(!in_array(strtolower($this->extention), $this->image_extentions)){
            $this->error = "file mở rộng (đuôi file) không phải image";
        }
    }
    private function detectName(){
        /// detect name
        $DS_name_explode = explode('/', $this->path);
        if(!count($DS_name_explode)){
            $this->error = "không tồn tại dấu '/' trong path: " . $this->path;
        }
        $imageFullName = $DS_name_explode[count($DS_name_explode) - 1];
        /// detect extention
        $dot_extention_explode = explode('.', $imageFullName);
        if(!count($dot_extention_explode)){
            $this->error = "không tồn tại dấu '.' trong tên ảnh: " . $imageFullName;
        }
        $this->name = $dot_extention_explode[0];
    }
    public function getForderPhysical(){
        /// detect name
        $DS_name_explode = explode('/', $this->path);
        if(!count($DS_name_explode)){
            $this->error = "không tồn tại dấu '/' trong path: " . $this->path;
        }
        unset($DS_name_explode[count($DS_name_explode) - 1]);
        return implode("/", $DS_name_explode);
    }
    public function renderForderUrl(){

        $ROOT            = public_path('');
        $urlImage        = str_replace( $ROOT, '', $this->path );

        $DS_name_explode = explode('/', $urlImage);
        
        unset($DS_name_explode[count($DS_name_explode) - 1]);

        return implode("/", $DS_name_explode);
    }
    
}