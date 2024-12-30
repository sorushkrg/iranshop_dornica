<?php

class ApplicationGzip
{
    /**
     * Name of content type
     *
     * @var string
     */
    public $name = "application/gzip";

    /**
     * Signature pattern
     *
     * @var string
     */
    public $pattern = "/^1F8B/";
}
