<?php

class ImagePsd 
{
    /**
     * Name of content type
     *
     * @var string
     */
    public $name = "image/vnd.adobe.photoshop";

    /**
     * Signature pattern
     *
     * @var string
     */
    public $pattern = "/^38425053/";
}
