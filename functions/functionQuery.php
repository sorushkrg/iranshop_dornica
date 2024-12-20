<?php

 function connectDb()
{
    include "./dbConnect/connect.php";
    return $db;
}

function queryTemplate($table, $status)
{
   $db=connectDb();
    $db->where("status", $status);
    $post = $db->get("$table");
    return $post;
}


function testSecurity($data){
$data = htmlspecialchars($data);
$data = stripslashes($data);
$data = trim($data);

return $data;
}

