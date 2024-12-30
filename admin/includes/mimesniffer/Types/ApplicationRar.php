<?php

class ApplicationRar 
{
    /**
     * Name of content type
     *
     * @var string
     */
    public $name = "application/x-rar-compressed";

    /**
     * Signature pattern
     *
     * @var string
     */
    public $pattern = "/^526172211A07(01)?00/";
}
