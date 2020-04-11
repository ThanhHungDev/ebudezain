<?php 

namespace App\Helpers;
class ResizeImage
{
    private $image;
    private $image_type;
    private $backup;

    public function load($path)
    {

        $image_info = getimagesize($path);
        $this->image_type = $image_info[2];
        if ($this->image_type == IMAGETYPE_JPEG) {

            $this->image = imagecreatefromjpeg($path);
        } elseif ($this->image_type == IMAGETYPE_GIF) {

            $this->image = imagecreatefromgif($path);
        } elseif ($this->image_type == IMAGETYPE_PNG) {

            $this->image = imagecreatefrompng($path);
        }
        $this->backup = $this->image;
    }
    public function reset_image(){
        $this->image = $this->backup;
    }
    public function save($filename, $image_type = IMAGETYPE_JPEG, $compression = 75, $permissions = null)
    {

        if ($image_type == IMAGETYPE_JPEG) {
            imagejpeg($this->image, $filename, $compression);
        } elseif ($image_type == IMAGETYPE_GIF) {

            imagegif($this->image, $filename);
        } elseif ($image_type == IMAGETYPE_PNG) {

            imagepng($this->image, $filename);
        }
        if ($permissions != null) {

            chmod($filename, $permissions);
        }
    }
    public function output($image_type = IMAGETYPE_JPEG)
    {

        if ($image_type == IMAGETYPE_JPEG) {
            imagejpeg($this->image);
        } elseif ($image_type == IMAGETYPE_GIF) {

            imagegif($this->image);
        } elseif ($image_type == IMAGETYPE_PNG) {

            imagepng($this->image);
        }
    }
    public function getWidth()
    {

        return imagesx($this->image);
    }
    public function getHeight()
    {

        return imagesy($this->image);
    }
    public function resizeToHeight($height)
    {

        $ratio = $height / $this->getHeight();
        $width = $this->getWidth() * $ratio;
        $this->resize($width, $height);
    }

    public function resizeToWidth($width)
    {
        $ratio = $width / $this->getWidth();
        $height = $this->getheight() * $ratio;
        $this->resize($width, $height);
    }

    public function scale($scale)
    {
        $width = $this->getWidth() * $scale / 100;
        $height = $this->getheight() * $scale / 100;
        $this->resize($width, $height);
    }

    public function resize($width, $height)
    {
        $new_image = imagecreatetruecolor($width, $height);
        imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
        $this->image = $new_image;
    }

    public function scale_image( $width, $height, $op = 'FIT' ) {

        // Destination image with white background
        $new_image = imagecreatetruecolor($width, $height);
        imagefill($new_image, 0, 0, imagecolorallocate($new_image, 255, 255, 255));


        $src_width = $this->getWidth();
        $src_height = $this->getHeight();
     
        // Try to match destination image by width
        $new_width = $width;
        $new_height = round($new_width*($src_height/$src_width));
        $new_x = 0;
        $new_y = round(($height-$new_height)/2);
     
        // FILL and FIT mode are mutually exclusive
        if ($op =='FILL')
            $next = $new_height < $height; 
        else $next = $new_height > $height;
     
        // If match by width failed and destination image does not fit, try by height 
        if ($next) {
            $new_height = $height;
            $new_width = round($new_height*($src_width/$src_height));
            $new_x = round(($width - $new_width)/2);
            $new_y = 0;
        }

        // Copy image on right place
        imagecopyresampled($new_image, $this->image , $new_x, $new_y, 0, 0, $new_width, $new_height, $src_width, $src_height);
        // Output 
        $this->image = $new_image;
    }

    public function fit( $width, $height, $op = 'FIT' )
    {
        // Destination image with white background
        $new_image = imagecreatetruecolor($width, $height);
        imagefill($new_image, 0, 0, imagecolorallocate($new_image, 255, 0, 0));


        $src_width = $this->getWidth();
        $src_height = $this->getHeight();
    
        $dst_width = imagesx($new_image);
        $dst_height = imagesy($new_image);
    
        // Try to match destination image by width
        $new_width = $dst_width;
        $new_height = round($new_width * ($src_height / $src_width));
        $new_x = 0;
        $new_y = round(($dst_height - $new_height) / 2);
    
        // FILL and FIT mode are mutually exclusive
        if ($op == 'FILL')
            $next = $new_height < $dst_height;
        else $next = $new_height > $dst_height;
    
        // If match by width failed and destination image does not fit, try by height 
        if ($next) {
            $new_height = $dst_height;
            $new_width = round($new_height * ($src_width / $src_height));
            $new_x = round(($dst_width - $new_width) / 2);
            $new_y = 0;
        }
    
        // Copy image on right place
        imagecopyresampled($new_image, $this->image, $new_x, $new_y, 0, 0, $new_width, $new_height, $src_width, $src_height);
    }
}