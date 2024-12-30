<?php

class ApplicationZip 
{
    /**
     * Name of content type
     *
     * @var string
     */
    public $name = "application/zip";

    /**
     * Signature pattern
     *
     * @var string
     */
    public $pattern = "/^504B(0304|0506|0708)/";
}
