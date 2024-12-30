<?php

class ImageSvg
{
    /**
     * Name of content type
     *
     * @var string
     */
    public $name = "image/svg+xml";

    /**
     * Signature pattern
     *
     * @var string
     */
    public $pattern = "/^(<\?xml[^>]*\?>.*)?<svg[^>]*>/is";
}
