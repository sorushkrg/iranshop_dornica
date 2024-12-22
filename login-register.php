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
            <input id="name" class="w-full drop-shadow-lg outline-none rounded-2xl py-2 text-center" type="text">
            <p id="errorA"></p>
          </div>

          <div class="text-xs opacity-70 mb-2">
            نام خانوادگی :
          </div>
          <div class="mb-2">
            <input id="lastname" class="w-full drop-shadow-lg outline-none rounded-2xl py-2 text-center" type="text">
            <p id="errorB"></p>
          </div>

          <div class="text-xs opacity-70 mb-2">
            نام کاربری
          </div>
          <div class="mb-2">
            <input id="username" class="w-full drop-shadow-lg outline-none rounded-2xl py-2 text-center" type="text">
            <p id="errorC"></p>
          </div>


          <div class="text-xs opacity-70 mb-2">
            رمز عبور:
          </div>
          <div class="mb-2">
            <input id="password" class="w-full drop-shadow-lg outline-none rounded-2xl py-2 text-center" type="password">
            <p id="errorD"></p>
          </div>

          <div class="text-xs opacity-70 mb-2">
            تکرار رمز عبور :
          </div>
          <div class="mb-2">
            <input id="confirmPassword" class="w-full drop-shadow-lg outline-none rounded-2xl py-2 text-center" type="password">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<script>
  $("#submit_user").click(function(e) {

    e.preventDefault();

    const errorFields = ['errorA', 'errorB', 'errorC', 'errorD', 'errorE'];

    errorFields.forEach(function(field) {
      $("#" + field).text("");
    });





    const formData = {
      firstName: $("#name").val(),
      lastName: $("#lastname").val(),
      userName: $("#username").val(),
      password: $("#password").val(),
      confirm_password: $("#confirmPassword").val(),
    };

    console.log(formData);

    $.ajax({
      type: "POST",
      url: "register-submit.php",
      data: formData,
      success: function(response) {
        try {
          const jsonResponse = JSON.parse(response);
          if (jsonResponse.success) {
            $("#succes").text(jsonResponse.message).css("color", "green");
            $("#name").val(""),
             $("#lastname").val("")
            $("#username").val("")
            $("#password").val("")
            $("#confirmPassword").val("")

            setTimeout(function() {
              window.location.href = "login.php"; 
            }, 2000);

          } else {
            const errorFields = ['errorA', 'errorB', 'errorC', 'errorD', 'errorE'];
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
      }
    })

  });
</script>

</html>