<?php


require_once "MysqliDb.php";


$host="localhost";
$username="root";
$password="";
$database_cn="iranshop";

$db = new MysqliDb ($host, $username,$password,$database_cn);
$cn = mysqli_connect($host, $username, $password, $database_cn) or trigger_error(mysqli_error($database_cn), E_USER_ERROR);
// Check connection
if (!$cn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($cn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
