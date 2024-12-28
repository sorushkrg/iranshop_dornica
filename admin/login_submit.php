<?php 

require_once "./dbConncet/connect.php";

session_start();

function testSecurity($data){
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    return $data;
}


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
    $admin = $db->getOne("admins");


    if ($admin) {
        if ($password === $admin["password"]) {
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['username'] = $admin['userName'];
            $_SESSION['first_name'] = $admin['firstName'];
            $_SESSION['last_name'] = $admin['lastName'];

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

















?>