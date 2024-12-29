<?php 
require_once "includeFiles.php";

if ((isset($_SESSION["admin_id"]) && $_SESSION["admin_id"] > 0) && (isset($_SESSION["username"]) && $_SESSION["username"])) {

    if (isset($_SESSION["username"])) {
        $userNameSe = $_SESSION["username"];
    }
    
}else {
    header("Location:" . $nav_path ."pages-login.php");
	echo "<script>window.location= " . $nav_path . "pages-login.php';</script>";
    exit;
}





?>