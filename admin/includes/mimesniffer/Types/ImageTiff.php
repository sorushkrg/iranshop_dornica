<?php

class ImageTiff 
{
    /**
     * Name of content type
     *
     * @var string
     */
    public $name = "image/tiff";

    /**
     * Signature pattern
     *
     * @var string
     */
    public $pattern = "/^(49492A00|4D4D002A)/";
}
