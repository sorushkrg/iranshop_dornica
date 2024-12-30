<?php

class VideoXmsvideo 
{
    /**
     * Name of content type
     *
     * @var string
     */
    public $name = "video/x-msvideo";

    /**
     * Signature pattern
     *
     * @var string
     */
    public $pattern = "/^52494646.{8}41564920/";
}
