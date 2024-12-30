<?php

class ApplicationSqlite 
{
    /**
     * Name of content type
     *
     * @var string
     */
    public $name = "application/vnd.sqlite3";

    /**
     * Signature pattern
     *
     * @var string
     */
    public $pattern = "/^53514C69746520666F726D6174203300/";
}
