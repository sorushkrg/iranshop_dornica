<?php 


   /**
     * Prepare content (can be extended by child classes)
     *
     * @param  string $content
     * @return string
     */
    function prepareContent($content , $type)
    {
        if(in_array($type , ['application/octet-stream' , 'text/plain' , 'image/svg+xml']))
            return substr($content, 0, 1024);
        else
            return strtoupper(substr(bin2hex($content), 0, 1024));
    }

    /**
     * Determine of current type is binary
     *
     * @return boolean
     */
    function isBinary($type)
    {   
        if(in_array($type , ['ApplicationGzip' , 'TextPlain' , 'ImageSvg']))
            return false;
        else 
            return true;
    }

    /**
     * Determine if the given content matches the signature
     *
     * @param  string $content
     * @return bool
     */
    function matches($content , $class)
    {  
        //  var_dump($class , $content);
    //   var_dump($class->pattern , prepareContent($content , $class->name));
    //   var_dump(preg_match($class->pattern, prepareContent($content , $class->name)));
      
        return preg_match($class->pattern, prepareContent($content , $class->name)) == 1;
    }

    /**
     * Determine if the detected type is an image
     *
     * @return boolean
     */
    function isImage($name)
    {
        return substr($name, 0, 5) === 'image';
    }

    /**
     * Determine if the detected type is an video
     *
     * @return boolean
     */
    function isVideo($name)
    {
        return substr($name, 0, 5) === 'video';
    }

    /**
     * Determine if the detected type is an audio file
     *
     * @return boolean
     */
    function isAudio($name)
    {
        return substr($name, 0, 5) === 'audio';
    }

    /**
     * Determine if the detected type is an archive
     *
     * @return boolean
     */
    function isArchive($name)
    {
        return in_array($name, [
            'application/zip',
            'application/x-rar-compressed',
            'application/x-tar',
            'application/gzip',
        ]);
    }

    /**
     * Cast type to string
     *
     * @return string
     */
    function __toString($name)
    {
        return $name;
    }
    ?>