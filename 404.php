<!DOCTYPE html>
<html lang="fa" dir="rtl">

<!-- Mirrored from amirtttk.ir/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2024 19:47:51 GMT -->

<head>
  <?php require_once "masterPage/head.php" ?>
  <title><?= testSecurity($setting["site_name"]) ?>-صفحه مورد نظر پیدا نشد</title>
</head>

<body class="bg-gray-50">

  <!-- loader -->
  <div class="loading" id="loader">
    <div class="loader"></div>
    <img class="loaderImg" src="attachment/image/logo.png" alt="">
  </div>

  <!-- NAVBAR -->
  <?php require_once "masterPage/header.php" ?>
  <!-- MAIN -->
  <div class="max-w-[1440px] mx-auto px-3">
    <div class="bg-white shadow-xl my-5 lg:my-10 rounded-xl md:rounded-2xl  p-3 md:p-5">
      <img class="mx-auto rounded-3xl" src="attachment/image/404/404-error-not-found.png" alt="">
      <div class="opacity-90 text-center mt-7 mb-5 text-lg">
        صفحه مورد نظر پیدا نشد!!!
      </div>
      <div class="flex justify-center items-center mb-5">
        <a class="border-b-2 border-red-500 hover:text-red-600 transition" href="index.html">
          صفحه اصلی
        </a>
        <img class="w-5" src="attachment/image/arrow-left.png" alt="">
      </div>
    </div>
  </div>
  <!-- FOOTER -->
  <?php require_once "masterPage/footer.php" ?>
</body>

<!--DROPDOWNS FOR NAVBAR-->
<script src="assets/js/flowbite.bundle.js"></script>
<script src="assets/js/alpine.js" defer>
</script>
<!--MOBILE NAVBAR-->
<script src="assets/js/navbar.js"></script>
<!-- SHOW MODAL SEARCH -->
<script src="assets/js/searchBox.js"></script>

<script src="assets/js/loader.js"></script>



</html>