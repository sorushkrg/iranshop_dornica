<?php

$db = connectDb();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $blog_id = (isset($_POST["blog_id"])) ? testSecurity($_POST["blog_id"]) : '';
    $name = (isset($_POST["name"])) ? testSecurity($_POST["name"]) : '';
    $content = (isset($_POST["content"])) ? testSecurity($_POST["content"]) : '';

    
    $error = "";



    if (empty($content)) {
        $error = 'متن مورد نظر خود را بنوسید';
    }
    if (empty($name)) {
        $error = 'نام خالی است';
    }


    if (!empty($error)) {
        echo $error;
        die;
    }


    $data = array(
        "blog_id" => $blog_id,
        "name" => $name,
        "content" => $content,
        "ip" => $_SERVER["REMOTE_ADDR"]
    );
    $result = $db->insert('comment_blog', $data);
    if ($result) {
        echo 'کامنت مورد نظر شما ثبت شد و در حال انتظار برای تایید است';
    } else {
        echo 'کامنت مورد نظر شما ثبت نشد';
    }
}
