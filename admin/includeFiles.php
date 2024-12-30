<?php
@session_start();
error_reporting(0);
date_default_timezone_set("Asia/Tehran");
if (strpos($_SERVER['PHP_SELF'], 'plugins') > 0)
    $nav_path = '../../';
else
    $nav_path = '';

if (!function_exists("sql_error_handler")) {
    function sql_error_handler($db_connection)
    {
        $debug = debug_backtrace();
        $line = $debug[0]['line'];
        return " <div ><label>:خطا({$line})</label><br> خطای پایگاه داده <div style='display:none'></div></div>";
    }
}

require_once($nav_path . 'dbConncet/connect.php');
require_once($nav_path . 'includes/common/KT_common.php');
require_once($nav_path .'includes/file/function.php');
require_once($nav_path .'includes/file/function2.php');
