<?php
require_once "../../checkLogin.php";


$errorN = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $modal_id = (isset($_POST["modal_id"])) ? _ktx($_POST["modal_id"]) : '';
    $content = (isset($_POST["content"])) ? _ktx($_POST["content"]) : '';

    // echo $content;


    if (empty($content)) {
        $errorN = 'توضیحات خالی است';
    }

    if (!empty($errorN)) {

        echo json_encode([
            'errorN' => $errorN,
        ]);
        die;
    }

    $db->where("id", $modal_id);
    $locked = $db->getValue("blog_page", "locked");


    // locked = 1
    // unlocked = 0

    $data = array();

    if ($locked == 1) {
        $data['locked'] = 0;
        $data['unlocked_description'] = $content;
    } else {
        
        $data['locked'] = 1;
        $data['locked_description'] = $content;
    }

    $db->where('id', $modal_id);
    $result = $db->update('blog_page', $data);

    if ($result) {
        echo "عملیات انجام شد ";
    } else {
        echo 'خطا';
    }
}
