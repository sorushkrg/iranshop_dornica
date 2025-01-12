<?php require_once "includeFiles.php" ?>

<!doctype html>
<html lang="en" dir="rtl">


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:20:04 GMT -->

<head>

    <?php require_once "layout/head.php" ?>
    <title> <?= $stitle ?> |Login | - Admin & Dashboard Template</title>
</head>

<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="card-body pt-0">

                            <h3 class="text-center mt-5 mb-4">
                                <a href="#" class="d-block auth-logo">
                                    <img src="assets/images/logo-dark.png" alt="" height="30" class="auth-logo-dark">
                                    <img src="assets/images/logo-light.png" alt="" height="30" class="auth-logo-light">
                                </a>
                            </h3>

                            <div class="p-3">
                                <h4 class="text-muted font-size-18 mb-1 text-center">خوش برگشتی !</h4>
                                <p class="text-muted text-center">برای رفتن به لکسا وارد سیستم شوید.</p>
                                <p id="massage"></p>
                                <form class="form-horizontal mt-4">
                                    <div class="mb-3">
                                        <label for="username">نام کاربری</label>
                                        <input id="username" type="text" class="form-control" id="username" placeholder="نام کاربری خود را وارد کنید">
                                        <p id="errorA"></p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="userpassword">کلمه عبور</label>
                                        <input id="password" type="password" class="form-control" id="userpassword" placeholder="رمز عبور را وارد کنید">
                                        <p id="errorB"></p>
                                    </div>
                                    <div class="mb-3 row mt-4">
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customControlInline">
                                                <label class="form-check-label" for="customControlInline">مرا به خاطر بسپار
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button id="login_submit" class="btn btn-primary w-md waves-effect waves-light" type="submit">وارد شدن</button>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-4">
                                            <a href="pages-recoverpw.php" class="text-muted"><i class="mdi mdi-lock"></i> رمز عبور خود را فراموش کرده اید؟</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>حساب کاربری ندارید؟<a href="pages-register.php" class="text-primary"> ثبت نام کن </a></p>
                        © <script>
                            document.write(new Date().getFullYear())
                        </script> لکسا <span class="d-none d-sm-inline-block"> - ساخته شده با <i class="mdi mdi-heart text-danger"></i> توسط تم دیزاین</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>


<script>
    $(document).ready(function() {
        $("#login_submit").on("click", function(e) {
            e.preventDefault();

            const userName = $("#username").val().trim()
            const password = $("#password").val().trim()
            let isValid = true

            $("#errorA").text("");
            $("#errorB").text("");

            if (userName === "") {
                $("#errorA").text("نام کاربری نمی‌تواند خالی باشد").css("color", "red");
                isValid = false;
            } else if (userName.length < 4) {
                $("#errorA").text("نام کاربری باید حداقل 4 کاراکتر باشد").css("color", "red");
                isValid = false;
            }

            if (password === "") {
                $("#errorB").text("رمز عبور نمی‌تواند خالی باشد").css("color", "red");
                isValid = false;
            } else if (password.length < 8) {
                $("#errorB").text("رمز عبور باید حداقل 8 کاراکتر باشد").css("color", "red");
                isValid = false;
            }


            if (isValid) {
                const formData = {
                    username: userName,
                    password: password
                };

                $.ajax({
                    type: "POST",
                    url: "login_submit.php",
                    data: formData,

                    success: function(response) {
                        console.log(response);
                        try {
                            const result = JSON.parse(response);


                            if (result.success) {
                                $("#massage").text(result.message).css("color", "green");

                                setTimeout(function() {

                                    window.location.href = "index.php";
                                }, 2000);

                            } else {
                                if (result.errorA) {
                                    $("#errorA").text(result.errorA).css("color", "red");
                                }
                                if (result.errorB) {
                                    $("#errorB").text(result.errorB).css("color", "red");
                                }
                            }
                        } catch (e) {
                            $("#errorA").html("پاسخ نامعتبر است").css("color", "red");
                        }
                    },
                    error: function() {
                        $("#errorA").html("خطایی رخ داده است. لطفا دوباره تلاش کنید").css("color", "red");
                    }
                });
            }
        });
    });
</script>

</html>