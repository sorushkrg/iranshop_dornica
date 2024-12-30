<?php

class VideoMpeg 
{
    /**
     * Name of content type
     *
     * @var string
     */
    public $name = "video/mpeg";

    /**
     * Signature pattern
     *
     * @var string
     */
    public $pattern = "/^000001B3/";
}
