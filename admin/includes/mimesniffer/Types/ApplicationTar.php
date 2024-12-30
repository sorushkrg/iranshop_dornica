<?php

class ApplicationTar 
{
    /**
     * Name of content type
     *
     * @var string
     */
    public $name = "application/x-tar";

    /**
     * Signature pattern
     *
     * @var string
     */
    public $pattern = "/^.{514}7573746172/";
}
