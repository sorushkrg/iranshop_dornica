<!DOCTYPE html>
<html lang="fa" dir="rtl">

<!-- Mirrored from amirtttk.ir/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2024 19:47:40 GMT -->
<head>
<?php require_once "masterPage/head.php" ?>
  <title><?= testSecurity($setting["site_name"])?>-سبد خرید</title>
  <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
  </style>

</head>
<body class="bg-gray-50">
  <!-- NAVBAR -->
  <?php require_once "masterPage/header.php" ?>
  <!-- MAIN -->
  <div class="max-w-[1440px] mx-auto px-3">
    <div class="bg-white shadow-xl my-5 lg:my-10 rounded-xl md:rounded-2xl p-3 md:p-5">
      <div class="relative overflow-x-auto rounded-2xl border">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
          <thead class="hidden md:table-header-group text-xs text-gray-700 bg-gray-50">
            <tr>
              <th scope="col" class="px-16 py-3">
                <span class="sr-only">تصویر</span>
              </th>
              <th scope="col" class="md:pr-6 py-3">
                نام محصول
              </th>
              <th scope="col" class="pr-10 py-3">
                تعداد
              </th>
              <th scope="col" class="px-6 py-3">
                قیمت
              </th>
              <th scope="col" class="px-6 py-3">
                دستورات
              </th>
            </tr>
          </thead>
          <tbody class="grid grid-cols-1 sm:grid-cols-2 md:contents gap-5">
            <tr class="bg-white border-b hover:bg-gray-50 grid grid-cols-1 justify-items-center md:table-row">
              <td class="p-4">
                <img src="attachment/image/productSlider/2.jpg" class="w-48 md:w-32 max-w-full max-h-full rounded-lg" alt="">
              </td>
              <td class="md:pr-6 py-4 text-sm opacity-90 text-gray-900">
                ساعت اپل مدل a32s پلاس
              </td>
              <td class="px-6 py-4">
                <div class="quantity flex items-center">
                  <input class="w-12 h-8 mx-2 text-center border focus:outline-none rounded-lg" type="number" min="1" step="1" value="1" readonly>
                </div>
              </td>
              <td class="px-6 py-4 text-sm opacity-90 text-gray-900">
                4,000,000 تومان
              </td>
              <td class="px-6 py-4">
                <a href="#" class=" text-red-600">حذف</a>
              </td>
            </tr>
            <tr class="bg-white border-b hover:bg-gray-50 grid grid-cols-1 justify-items-center md:table-row">
              <td class="p-4">
                <img src="attachment/image/productSlider/4.jpg" class="w-48 md:w-32 max-w-full max-h-full rounded-lg" alt="">
              </td>
              <td class="md:pr-6 py-4 text-sm opacity-90 text-gray-900">
                تلویزیون 40 اینچ سامسونگ
              </td>
              <td class="px-6 py-4">
                <div class="quantity flex items-center">
                  <input class="w-12 h-8 mx-2 text-center border focus:outline-none rounded-lg" type="number" min="1" step="1" value="1" readonly>
                </div>
              </td>
              <td class="px-6 py-4 text-sm opacity-90 text-gray-900">
                4,000,000 تومان
              </td>
              <td class="px-6 py-4">
                <a href="#" class=" text-red-600">حذف</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="border shadow-xl rounded-2xl mx-auto max-w-xl mt-7 flex flex-col gap-y-5 py-5 px-5 md:px-20">
        <div class="flex justify-between">
          <div>
            قیمت کل:
          </div>
          <div class="flex gap-x-1">
            <div>
              1,240,000
            </div>
            <div>
              تومان
            </div>
          </div>
        </div>
        <div class="flex justify-between">
          <div>
            حمل و نقل:
          </div>
          <div class="flex gap-x-1">
            <div>
              40,000
            </div>
            <div>
              تومان
            </div>
          </div>
        </div>
        <div class="flex justify-between">
          <div>
            سود شما از این خرید:
          </div>
          <div class="flex gap-x-1">
            <div>
              80,000
            </div>
            <div>
              تومان
            </div>
          </div>
        </div>
        <div class="flex justify-between">
          <div class="text-red-600">
            مجموع نهایی:
          </div>
          <div class="flex gap-x-1">
            <div>
              1,200,000
            </div>
            <div>
              تومان
            </div>
          </div>
        </div>
      </div>
      <a href="checkout.html" class="flex justify-center items-center opacity-90 my-5">
        <button class="px-7 py-2 text-center text-white bg-red-500 align-middle border-0 rounded-lg shadow-md text-sm">تایید و پرداخت</button>
      </a>
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
  <!-- INPUTS ADD NUMBER -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/main.js"></script>

<!-- Mirrored from amirtttk.ir/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2024 19:47:40 GMT -->
</html>