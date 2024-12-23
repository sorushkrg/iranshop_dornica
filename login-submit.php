<?php

require_once "../iranshop_dornica/functions/functionQuery.php";

session_start();

$db = connectDb();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = isset($_POST["username"]) ? testSecurity($_POST["username"]) : '';
    $password = isset($_POST["password"]) ? testSecurity($_POST["password"]) : '';
    $errors = [];

    if (empty($userName)) {
        $errors['errorA'] = 'نام کاربری خالی است';
    }

    if (empty($password)) {
        $errors['errorB'] = 'رمز عبور خالی است';
    } elseif (strlen($password) < 8) {
        $errors['errorB'] = 'رمز عبور باید شامل 8 کاراکتر باشد';
    }

    if (!empty($errors)) {
        echo json_encode($errors);
        die;
    }

    $db->where("userName", $userName);
    $user = $db->getOne("users");

    if ($user) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['userName'];
            $_SESSION['first_name'] = $user['firstName'];
            $_SESSION['last_name'] = $user['lastName'];

            echo json_encode([
                'success' => true,
                'message' => 'ورود با موفقیت انجام شد',
            ]);
            
        } else {
            echo json_encode([
                'success' => false,
                'errorB' => 'رمز عبور اشتباه است'
            ]);
        }
    } else {
        echo json_encode([
            'success' => false,
            'errorA' => 'نام کاربری وجود ندارد'
        ]);
    }
    die;
}