<?php

require_once "../iranshop_dornica/functions/functionQuery.php";

$db = connectDb();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = (isset($_POST["firstName"])) ? testSecurity($_POST["firstName"]) : '';
    $lastName = (isset($_POST["lastName"])) ? testSecurity($_POST["lastName"]) : '';
    $userName = (isset($_POST["userName"])) ? testSecurity($_POST["userName"]) : '';
    $password = (isset($_POST["password"])) ? testSecurity($_POST["password"]) : '';
    $confirm_password = isset($_POST["confirm_password"]) ? testSecurity($_POST["confirm_password"]) : '';
    $errors = [];

    $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    $hashCpassword = password_hash($confirm_password, PASSWORD_DEFAULT);



    if (empty($confirm_password)) {
        $errors['errorE'] = 'تایید رمز عبور خالی است';
    } elseif ($password !== $confirm_password) {
        $errors['errorE'] = 'رمز عبور و تایید رمز عبور یکی نیست';
    }

    if (empty($password)) {
        $errors['errorD'] = ' رمز عبور خالی است';
    } elseif (strlen($password) < 8) {
        $errors['errorD'] = 'رمز عبور باید شامل 8 کاراکتر باشد';
    }
    if (empty($userName)) {
        $errors['errorC'] = 'نام کاربری خالی است';
    }
    if (empty($lastName)) {
        $errors['errorB'] = 'نام خانوادگی خالی است';
    }
    if (empty($firstName)) {
        $errors['errorA'] = 'نام خالی است';
    }

    if (!empty($errors)) {
        echo json_encode($errors);
        die;
    }



    $data = array(
        "firstName" => $firstName,
        "lastName" => $lastName,
        "userName" => $userName,
        "password" => $hashPassword,
        "confirmPassword" => $hashCpassword,

    );

    $result = $db->insert('users', $data);

    if ($result) {
        echo json_encode([
            'success' => true,
            'message' => 'ثبت نام شما با موفقیت انجام شد',
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'خطایی در ثبت نام رخ داد'
        ]);
    }
}
