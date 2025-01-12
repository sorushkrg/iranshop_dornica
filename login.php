<!DOCTYPE html>
<html lang="fa" dir="rtl">

<!-- Mirrored from amirtttk.ir/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2024 19:47:39 GMT -->

<head>
  <?php require_once "masterPage/head.php" ?>
  <title><?= testSecurity($setting["site_name"]) ?>-ورود</title>
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
          ورود
        </div>
        <p id="massage"></p>

        <div class="text-xs opacity-70 mb-2">
          نام کاربری
        </div>
        <div class="mb-2">
          <input id="username" class="w-full drop-shadow-lg outline-none rounded-2xl py-2 text-center" placeholder="نام کاریری" type="text">
        </div>
        <p id="errorA"></p>
        <div class="text-xs opacity-70 mb-2">
          رمز عبور
        </div>
        <div class="mb-2">
          <input id="password" class="w-full drop-shadow-lg outline-none rounded-2xl py-2 text-center" placeholder="رمز عبور" type="password">
        </div>
        <p id="errorB"></p>
        <div class="text-center mt-5 mb-3">
          <button id="login_submit" class="bg-red-500 hover:bg-red-600 transition text-white opacity-80 rounded-2xl w-full py-2">
            ورود
          </button>
        </div>
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
  $(document).ready(function() {
    $("#login_submit").on("click", function(e) {
      e.preventDefault();
      $("#errorA").text("");
      $("#errorB").text("");


      const formData = {
        username: $("#username").val(),
        password: $("#password").val(),
      };
      console.log(formData);
      

      $.ajax({
        type: "POST",
        url: "login-submit.php",
        data: formData,

        success: function(response) {
          try {
            const result = JSON.parse(response);

            if (result.success) {
              $("#massage").text(result.message).css("color", "green");
              setTimeout(function() {
                window.location.href = "index%20.php";
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
    });
  });
</script>

</html>