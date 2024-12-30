<?php 

class ImageJpeg {
    /**
     * Name of content type
     *
     * @var string
     */
    public $name = "image/jpeg";

    /**
     * Signature pattern
     *
     * @var string
     */
    public $pattern = "/^FFD8FF(DB|E0|EE|E1)/";
   
}
?>
