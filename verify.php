<!DOCTYPE html>
<html lang="fa" dir="rtl">

<!-- Mirrored from amirtttk.ir/verify.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2024 19:47:56 GMT -->

<head>
  <?php require_once "masterPage/head.php" ?>
  <title><?= testSecurity($setting["site_name"])?>-احراز هویت</title>
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
        <div class="text-xs opacity-70 mb-2">
          کد ارسال شده به شماره 09123456789 را وارد کنید:
        </div>
        <div class="mb-2">
          <div class="input-field mb-5 flex flex-row-reverse gap-x-4 justify-center">
            <input type="number" class="inputVerify w-10 h-11 rounded-md outline-none text-center drop-shadow-lg" />
            <input type="number" class="inputVerify w-10 h-11 rounded-md outline-none text-center drop-shadow-lg" disabled />
            <input type="number" class="inputVerify w-10 h-11 rounded-md outline-none text-center drop-shadow-lg" disabled />
            <input type="number" class="inputVerify w-10 h-11 rounded-md outline-none text-center drop-shadow-lg" disabled />
          </div>
        </div>
        <div class="text-xs text-red-500" id="verify-code">
        </div>
        <div class="text-center mt-5 mb-3">
          <button class="bg-red-500 hover:bg-red-600 transition text-white opacity-80 rounded-2xl w-full py-2" type="submit">
            ورود
          </button>
        </div>
        <div class="text-xs opacity-80">
          ثبت نام یا ورود شما به منظور پذیرش
          <a href="#" class="text-red-500">قوانین و مقررات</a>
          ایران مارکت می باشد
        </div>
        <div class="flex justify-start items-center mt-5">
          <a class="border-b-2 text-sm border-red-500 hover:text-red-600 transition" href="#">
            ورود با رمز عبور
          </a>
          <img class="w-4" src="attachment/image/arrow-left.png" alt="">
        </div>
      </form>
    </div>
  </div>
</body>
<script src="assets/js/main.js"></script>
<script src="assets/js/verifyUser.js"></script>

<!-- Mirrored from amirtttk.ir/verify.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2024 19:47:56 GMT -->

</html>