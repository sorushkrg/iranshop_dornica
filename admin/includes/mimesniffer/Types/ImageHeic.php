<?php

class ImageHeic 
{
    /**
     * Name of content type
     *
     * @var string
     */
    public $name = "image/heic";

    /**
     * Signature pattern
     *
     * ftyp(heic|heix|hevc|heim|heis|hevm|hevs)
     *
     * @var string
     */
    public $pattern = "/66747970(68656963|68656978|68657663|6865696D|68656973|6865766D|68657673)/";
}
