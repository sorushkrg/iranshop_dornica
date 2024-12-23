<?php

require_once "../iranshop_dornica/functions/functionQuery.php";

session_start();

$db = connectDb();

$errorN = $errorC = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $blog_id = (isset($_POST["blog_id"])) ? testSecurity($_POST["blog_id"]) : '';
    $parent_id = (isset($_POST["parent_id"])) ? testSecurity($_POST["parent_id"]) : 0;
    $name = (isset($_POST["name"])) ? testSecurity($_POST["name"]) : '';
    $content = (isset($_POST["content"])) ? testSecurity($_POST["content"]) : '';


    if (isset($_SESSION["user_id"])) {
        $errorC = "";
    } else {
        if (empty($name)) {
            $errorN = 'نام خالی است';
        }
    }


    if (empty($content)) {
        $errorC = 'متن مورد نظر خود را بنویسید';
    }


    if (!empty($errorN) || !empty($errorC)) {

        echo json_encode([
            'errorN' => $errorN,
            'errorC' => $errorC
        ]);
        die;
    }



    $data = array(
        "blog_id" => $blog_id,
        "name" => (isset($_SESSION["user_id"])) ? $_SESSION["first_name"] . " " . $_SESSION["last_name"] : $name,
        "user_id" => (isset($_SESSION["user_id"])) ? $_SESSION["user_id"] : null,
        "content" => $content,
        "ip" => $_SERVER["REMOTE_ADDR"],
        "parent_id" => $parent_id,

    );
    $result = $db->insert('comment_blog', $data);
    if ($result) {
        echo 'کامنت مورد نظر شما ثبت شد و در حال انتظار برای تایید است';
    } else {
        echo 'کامنت مورد نظر شما ثبت نشد';
    }
}
