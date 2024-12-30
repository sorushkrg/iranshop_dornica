<?php

include ("chackType.php");
// include ("Types/TextPlain.php");
// include ("Types/ApplicationOctetStream.php");


class MimeSniffer
{
    /**
     * Content to search
     *
     * @var string
     */
    protected $content;
    public $type;

    /**
     * Create new instance
     *
     * @param string $content
     */
    public function __construct($content = '')
    {
        $this->setFromString($content);
    }

    /**
     * Create new instance from given string
     *
     * @param string $content
     *
     * @return MimeSniffer
     */
    public static function createFromString($content)
    {
        return new self($content);
    }

    /**
     * Load contents of given string into instance
     *
     * @param string $content
     *
     * @return MimeSniffer
     */
    public function setFromString($content)
    {
        $this->content = strval($content);

        return $this;
    }

    /**
     * Create a new instance and load contents of given filename
     *
     * @param string $filename
     *
     * @return MimeSniffer
     */
    public static function createFromFilename($filename)
    {  
        return (new self())->setFromFilename($filename);
    }

    /**
     * Load contents of given filename in current instance
     *
     * @param string $filename
     *
     * @return MimeSniffer
     */
    public function setFromFilename($filename) 
    {
        $fp = fopen($filename, 'r');
        $this->setFromString(fread($fp, 1024));
        fclose($fp); 

        $this->setType($filename);

        return $this;
    }

    /**
     * Return detected type
     *
     * @return AbstractType
     */
    public function setType($filename)
    {
		$finfo = finfo_open( FILEINFO_MIME_TYPE );
		$type = finfo_file( $finfo, $filename );
        switch ($type) {
            case 'application/zip':
                $this->type = 'application/x-zip';
                break;
            case 'application/rar':
                $this->type = 'application/x-rar-compressed';
                break;
            case 'application/x-rar':
                $this->type = 'application/x-rar-compressed';
                break;
            case 'application/x-zip-compressed':
                $this->type = 'application/x-zip';
                break;
            case 'application/rar-compressed':
                $this->type = 'application/x-rar-compressed';
                break;
            case 'application/zip-compressed':
                $this->type = 'application/x-zip';
                break;
            default:
                $this->type = $type;
                break;
        }
        
		finfo_close( $finfo );

        return $this;
    }
    /**
     * Return detected type
     *
     * @return AbstractType
     */
    public function getType()
    {   
        foreach ($this->getTypeClassnames() as $classname) {
            include_once("Types/{$classname}.php");
            $class = new $classname();
            // var_dump($class->name , $this->type);
            // var_dump($class->name == $this->type);
            if ($class->name == $this->type) {
                return $class;
            }
            // if (matches($this->content , $type)) {
            //     return $type;
            // }
        }
        return false;

        // foreach ($this->getTypeClassnames() as $classname) {
        //     if(!in_array($classname , ['TextPlain' , 'ApplicationOctetStream'])){
        //         include_once("Types/{$classname}.php");
        //         $classData = new $classname();
        //         return $classData;
        //     }
        // }

        // $binaryType = new ApplicationOctetStream();
        // if ($this->matches($binaryType)) {
        //     return $binaryType;
        // }

        // return new TextPlain();
    }

    /**
     * Determine if content matches the given type
     * or any if the given types in array
     *
     * @param  AbstractType|array $types AbstractType or array of AbstractTypes
     * @return boolean
     */
    public function matches($class)
    {
        if (file_exists(__DIR__ . "/Types/{$class}.php")) 
            $classData = new $class(); 
            
        return matches($this->content , $classData);
    }

    /**
     * Return array of type classnames
     *
     * @return array
     */
    private function getTypeClassnames()
    {
        $files = array_diff(scandir(__DIR__ . '/Types'), ['.', '..']);

        $classnames = array_map(function ($filename) {
            return  substr($filename, 0, -4);
        }, $files);
        return $classnames;
        // return array_filter($classnames, function ($classname) {
        //     return ! in_array($classname, [
        //         'ApplicationOctetStream',
        //         'TextPlain',
        //     ]);
        // });
    }
}