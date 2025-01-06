<?php
require_once($nav_path . '../connection/config.php');
if (!function_exists("getSpecificArrayKey")) {
    function getSpecificArrayKey($array, $arrayKey)
    {
        $arrayList=[];
        foreach ($array as $key => $arrayRow) {
            if(isset($arrayRow[$arrayKey])) {
                $arrayList[]=$arrayRow[$arrayKey];
            }
        }
        return $arrayList;
    }
}

if (!function_exists("convertArrayToString")) {
    function convertArrayToString($array, $separator)
    {
        $string="";
        foreach ($array as $key => $item) {
            if($key == count($array)-1) {
                $string .= $item;
            }
            else {
                $string .= $item.$separator;
            }
        }
        return $string;
    }
}
if (!function_exists("empty_null")) {
	function empty_null($data)
	{
		if (!is_array($data)) $checkdata = trim($data);
		else $checkdata = $data;
		return (empty($checkdata) || is_null($data)) && ($data !== 0 && $data !== '0') ? true : false;
	}
}
