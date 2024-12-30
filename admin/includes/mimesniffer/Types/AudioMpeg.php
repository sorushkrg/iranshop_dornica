<?php

class AudioMpeg 
{
    /**
     * Name of content type
     *
     * @var string
     */
    public $name = "audio/mpeg";

    /**
     * Signature pattern
     *
     * @var string
     */
    public $pattern = "/^(FFFB|494433)/";
}
