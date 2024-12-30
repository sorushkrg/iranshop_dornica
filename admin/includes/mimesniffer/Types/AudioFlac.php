<?php

class AudioFlac 
{
    /**
     * Name of content type
     *
     * @var string
     */
    public $name = "audio/flac";

    /**
     * Signature pattern
     *
     * @var string
     */
    public $pattern = "/^664C6143/";
}
