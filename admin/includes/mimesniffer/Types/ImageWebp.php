<?php

class ImageWebp 
{
    /**
     * Name of content type
     *
     * @var string
     */
    public $name = "image/webp";

    /**
     * Signature pattern
     *
     * @var string
     */
    public $pattern = "/^52494646.{8}57454250/";
}
