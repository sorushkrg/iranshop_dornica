<?php
@session_start();
error_reporting(0);
date_default_timezone_set("Asia/Tehran");
if (strpos($_SERVER['PHP_SELF'], 'plugins') > 0)
    $nav_path = '../../';
else
    $nav_path = '';