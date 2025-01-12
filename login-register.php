<!DOCTYPE html>
<html lang="fa" dir="rtl">

<!-- Mirrored from amirtttk.ir/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2024 19:47:56 GMT -->

<head>
  <?php require_once "masterPage/head.php" ?>
  <title><?= testSecurity($setting["site_name"]) ?>-ثبت نام</title>
  <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
  </style>
</head>

<body class="bg-gray-50">
  <div class="flex justify-center items-center text-right h-screen w-96 mx-auto">
    <div class="shadow-xl rounded-2xl p-8 bg-white">
      <form action="#">
        <div class="mb-2">
          <a href="index.html">
            <img src="attachment/image/logo.png" alt="" class="w-36 mx-auto">
          </a>
        </div>
        <div class="opacity-80 text-lg mb-5">
          ورود | ثبت نام
        </div>

        <p id="succes"></p>


        <form action="./404.php">

          <div class="text-xs opacity-70 mb-2">
            نام شما :
          </div>
          <div class="mb-2">
            <input id="name" class="w-full drop-shadow-lg outline-none rounded-2xl py-2 text-center" placeholder="نام" type="text">
            <p id="errorA"></p>
          </div>

          <div class="text-xs opacity-70 mb-2">
            نام خانوادگی :
          </div>
          <div class="mb-2">
            <input id="lastname" class="w-full drop-shadow-lg outline-none rounded-2xl py-2 text-center" placeholder="نام خانوادگی" type="text">
            <p id="errorB"></p>
          </div>

          <div class="text-xs opacity-70 mb-2">
            نام کاربری
          </div>
          <div class="mb-2">
            <input id="username" class="w-full drop-shadow-lg outline-none rounded-2xl py-2 text-center" placeholder="نام کاربری" type="text">
            <p id="errorC"></p>
          </div>


          <div class="text-xs opacity-70 mb-2">
            رمز عبور:
          </div>
          <div class="mb-2">
            <input id="password" class="w-full drop-shadow-lg outline-none rounded-2xl py-2 text-center" placeholder="رمز عبور" type="password">
            <p id="errorD"></p>
          </div>

          <div class="text-xs opacity-70 mb-2">
            تکرار رمز عبور :
          </div>
          <div class="mb-2">
            <input id="confirmPassword" class="w-full drop-shadow-lg outline-none rounded-2xl py-2 text-center" placeholder="تکرار رمز عبور" type="password">
            <p id="errorE"></p>
          </div>


          <div class="text-center mt-5 mb-3">
            <button id="submit_user" class="bg-red-500 hover:bg-red-600 transition text-white opacity-80 rounded-2xl w-full py-2" type="submit">
              ورود
            </button>
          </div>

        </form>


        <div class="text-xs opacity-80">
          ثبت نام یا ورود شما به منظور پذیرش
          <a href="#" class="text-red-500">قوانین و مقررات</a>
          ایران مارکت می باشد
        </div>
      </form>
    </div>
  </div>
</body>

<script src="assets/js/jquery.min.js"></script>


<script>
  $("#submit_user").click(function(e) {
    e.preventDefault();

    
    const firstName = $("#name").val().trim();
    const lastName = $("#lastname").val().trim();
    const userName = $("#username").val().trim();
    const password = $("#password").val().trim();
    const confirmPassword = $("#confirmPassword").val().trim();

    let isValid = true;

   
    $("#errorA, #errorB, #errorC, #errorD, #errorE").text("");

    
    if (firstName === "") {
      $("#errorA").text("نام نمی‌تواند خالی باشد").css("color", "red");
      isValid = false;
    }

    if (lastName === "") {
      $("#errorB").text("نام خانوادگی نمی‌تواند خالی باشد").css("color", "red");
      isValid = false;
    }

    if (userName === "") {
      $("#errorC").text("نام کاربری نمی‌تواند خالی باشد").css("color", "red");
      isValid = false;
    } else if (userName.length < 4) {
      $("#errorC").text("نام کاربری باید حداقل 4 کاراکتر باشد").css("color", "red");
      isValid = false;
    }

    if (password === "") {
      $("#errorD").text("رمز عبور نمی‌تواند خالی باشد").css("color", "red");
      isValid = false;
    } else if (password.length < 8) {
      $("#errorD").text("رمز عبور باید حداقل 8 کاراکتر باشد").css("color", "red");
      isValid = false;
    }

    if (confirmPassword === "") {
      $("#errorE").text("تکرار رمز عبور نمی‌تواند خالی باشد").css("color", "red");
      isValid = false;
    } else if (password !== confirmPassword) {
      $("#errorE").text("رمز عبور و تکرار آن مطابقت ندارند").css("color", "red");
      isValid = false;
    }

    
    if (isValid) {
      const formData = {
        firstName: firstName,
        lastName: lastName,
        userName: userName,
        password: password,
        confirm_password: confirmPassword,
      };

      $.ajax({
        type: "POST",
        url: "register-submit.php",
        data: formData,
        success: function(response) {
          try {
            const jsonResponse = JSON.parse(response);
            if (jsonResponse.success) {
              $("#succes").text(jsonResponse.message).css("color", "green");
              $("#name, #lastname, #username, #password, #confirmPassword").val("");

              setTimeout(function() {
                window.location.href = "login.php";
              }, 2000);
            } else {
              const errorFields = ["errorA", "errorB", "errorC", "errorD", "errorE"];
              errorFields.forEach(function(field) {
                if (jsonResponse[field]) {
                  $("#" + field).text(jsonResponse[field]).css("color", "red");
                }
              });
            }
          } catch (e) {
            $("#succes").html("پاسخ نامعتبر است").css("color", "red");
          }
        },
        error: function() {
          $("#errorN").html("خطایی رخ داده است. لطفا دوباره تلاش کنید").css("color", "red");
        },
      });
    }
  });
</script>

</html>