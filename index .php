<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>

  <?php require_once "masterPage/head.php" ?>
  <!-- SLIDER HERO -->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
  <!-- PRODUCT SLIDER CSS -->
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/css/style.product.slider.css" />

  <title><?= testSecurity($setting["site_name"]) ?>-صفحه اصلی</title>
</head>

<body class="bg-gray-50">

  <!-- NAVBAR -->


  <?php require_once "masterPage/header.php" ?>






  <!-- BOTTOM NAVIGATION -->

  <div class="px-4 bg-white shadow-2xl w-full border fixed bottom-0 left-1/2 -translate-x-1/2 md:hidden z-50">
    <div class="grid grid-cols-5">
      <div class="flex-1 group">
        <a href="#" class="flex items-end justify-center text-center mx-auto pt-2 w-full text-gray-800 group-hover:text-red-500">
          <span class="block pt-1 pb-1">
            <svg class="mx-auto fill-gray-800 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256">
              <path d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"></path>
            </svg>
            <span class="block text-xs py-1">پروفایل</span>
            <span class="block w-5 mx-auto h-1 group-hover:bg-red-500 rounded-full"></span>
          </span>
        </a>
      </div>
      <div class="flex-1 group">
        <a href="#" class="flex items-end justify-center text-center mx-auto pt-2 w-full text-gray-800 group-hover:text-red-500">
          <span class="block pt-1 pb-1">
            <svg class="mx-auto fill-gray-800 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#000000" viewBox="0 0 256 256">
              <path d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path>
            </svg>
            <span class="block text-xs py-1">علاقه مندی</span>
            <span class="block w-5 mx-auto h-1 group-hover:bg-red-500 rounded-full"></span>
          </span>
        </a>
      </div>
      <div class="flex-1 group">
        <a href="#" class="flex items-end justify-center text-center mx-auto pt-2 w-full text-red-500">
          <span class="block pt-1 pb-1">
            <svg class="mx-auto fill-red-600" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#000000" viewBox="0 0 256 256">
              <path d="M218.83,103.77l-80-75.48a1.14,1.14,0,0,1-.11-.11,16,16,0,0,0-21.53,0l-.11.11L37.17,103.77A16,16,0,0,0,32,115.55V208a16,16,0,0,0,16,16H96a16,16,0,0,0,16-16V160h32v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V115.55A16,16,0,0,0,218.83,103.77ZM208,208H160V160a16,16,0,0,0-16-16H112a16,16,0,0,0-16,16v48H48V115.55l.11-.1L128,40l79.9,75.43.11.1Z"></path>
            </svg>
            <span class="block text-xs py-1">صفحه اصلی</span>
            <span class="block w-5 mx-auto h-1 bg-red-500 rounded-full"></span>
          </span>
        </a>
      </div>
      <div class="flex-1 group">
        <a href="#" class="flex items-end justify-center text-center mx-auto pt-2 w-full text-gray-800 group-hover:text-red-500">
          <span class="block pt-1 pb-1">
            <svg class="mx-auto fill-gray-800 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#000000" viewBox="0 0 256 256">
              <path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path>
            </svg>
            <span class="block text-xs py-1">جستجو</span>
            <span class="block w-5 mx-auto h-1 group-hover:bg-red-500 rounded-full"></span>
          </span>
        </a>
      </div>
      <div class="flex-1 group">
        <a href="#" class="flex items-end justify-center text-center mx-auto pt-2 w-full text-gray-800 group-hover:text-red-500">
          <span class="block pt-1 pb-1">
            <svg class="mx-auto fill-gray-800 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#000000" viewBox="0 0 256 256">
              <path d="M222.14,58.87A8,8,0,0,0,216,56H54.68L49.79,29.14A16,16,0,0,0,34.05,16H16a8,8,0,0,0,0,16h18L59.56,172.29a24,24,0,0,0,5.33,11.27,28,28,0,1,0,44.4,8.44h45.42A27.75,27.75,0,0,0,152,204a28,28,0,1,0,28-28H83.17a8,8,0,0,1-7.87-6.57L72.13,152h116a24,24,0,0,0,23.61-19.71l12.16-66.86A8,8,0,0,0,222.14,58.87ZM96,204a12,12,0,1,1-12-12A12,12,0,0,1,96,204Zm96,0a12,12,0,1,1-12-12A12,12,0,0,1,192,204Zm4-74.57A8,8,0,0,1,188.1,136H69.22L57.59,72H206.41Z"></path>
            </svg>
            <span class="block text-xs py-1">سبد خرید</span>
            <span class="block w-5 mx-auto h-1 group-hover:bg-red-500 rounded-full"></span>
          </span>
        </a>
      </div>
    </div>
  </div>

  <!-- MAIN -->
  <div class="max-w-[1440px] mx-auto px-3">
    <!-- HERO SLIDER -->


    <div class="md:w-[100%] mx-auto md:mt-5 hidden md:block">
      <div dir="ltr" class="owl-carousel">
        <?php
        $sec = array_slice($slider_index, 0, 4);
        foreach ($sec as $value) :
        ?>
          <div class="box-border">
            <a href="#">
              <img class="rounded-md md:rounded-3xl md:px-2 box-border" src="attachment/image/heroSlider/<?= testSecurity($value['image']) ?>" alt="<?= testSecurity($value['name']) ?>" />
            </a>
          </div>
        <?php
        endforeach;
        ?>


      </div>
    </div>


    <!-- HERO SLIDER MOBILE -->
    <div class="md:w-[100%] mx-auto md:mt-5 md:hidden">
      <div dir="ltr" class="owl-carousel">
        <?php
        $secA = array_slice($slider_index, 4, 4);
        foreach ($secA as $value) :
        ?>
          <div class="box-border">
            <a href="#">
              <img class="rounded-md md:rounded-3xl md:px-2 box-border" src="attachment/image/heroSlider/<?= testSecurity($value['image']) ?>" alt="<? testSecurity($value['name']) ?>" />
            </a>
          </div>
        <?php
        endforeach;
        ?>

      </div>
    </div>



    <!-- SECTION IMAGE -->
    <div>
      <a href="../../shop1/amirtttk.ir/search.php">
        <img class="rounded-2xl hidden md:block" src="attachment/image/sectionImage/<?= testSecurity($image_single[0]["image"]) ?>"  alt="<?= testSecurity($image_single[0]["name"]) ?>">
      </a>
      <a href="../../shop1/amirtttk.ir/search.php"></a>
      <img class="rounded-2xl md:hidden" src="attachment/image/sectionImage/<?= testSecurity($image_single[1]["image"]) ?>"    alt="<?= testSecurity($image_single[1]["name"]) ?>">
      </a>
    </div>




    <!-- OFF SLIDER -->

    <div class="flex justify-between px-5 py-5 rounded-xl md:px-10 items-center mt-10 mb-2 bg-white">
      <div class="border-b-2 border-red-500 pb-1">آخرین پیشنهاد</div>
      <a href="#">
        <div class="transition px-4 py-2 rounded-xl flex justify-center items-center text-red-500 hover:text-red-600">دیدن همه<img class="w-4" src="attachment/image/arrow-left.png" alt=""></div>
      </a>
    </div>


    <div class="lg:flex items-start gap-5">
      <div class="lg:w-1/3 mb-5 gap-5 lg:mb-0 grid justify-items-center grid-cols-1 sm:grid-cols-2 lg:block">
        <img class="rounded-xl mx-auto" src="attachment/image/suggested%20product/<?= testSecurity($image_single[2]["image"]) ?>" alt="<?= testSecurity($image_single[2]["name"]) ?>">
        <img class="rounded-xl lg:hidden" src="attachment/image/suggested%20product/<?= testSecurity($image_single[3]["image"]) ?>" alt="<?= testSecurity($image_single[3]["name"]) ?>">
      </div>
      <div class="lg:w-2/3">
        <div class="swiper timerProduct border rounded-xl">
          <div class="swiper-wrapper bg-white">

            <?php foreach ($last_offer as $value) { ?>
              <a href="#" class="swiper-slide md:flex bg-white" style="display: flex;">
                <div class="md:w-1/3">
                  <img class="max-w-80 w-auto mx-auto rounded-xl" src="attachment/image/productSlider/<?= testSecurity($value["image"]) ?>" alt="<?= testSecurity($value["product_name_english"]) ?>">
                </div>
                <div class="md:w-2/3 flex flex-col justify-center py-5">
                  <div class="mx-auto">
                    <div class="text-zinc-800 text-lg">
                      <?= testSecurity($value["product_name_farsi"]) ?>
                    </div>
                    <div class="text-zinc-400 text-sm mt-1">
                      <?= testSecurity($value["product_name_english"]) ?>
                    </div>
                  </div>
                  <div class="mt-7 mx-auto">
                    <div class="text-zinc-800 text-xl font-semibold">
                      <?= testSecurity($value["discount_price"]) ?>
                    </div>
                    <div class="text-zinc-400 text-sm mt-1 line-through">
                      <?= testSecurity($value["real_price"]) ?>
                    </div>
                  </div>
                  <div class="flex w-96 mt-5 mx-auto">
                    <div class="w-1/2">
                      <div class="flex gap-x-1 text-zinc-600 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#16a70c" viewBox="0 0 256 256">
                          <path d="M225.86,102.82c-3.77-3.94-7.67-8-9.14-11.57-1.36-3.27-1.44-8.69-1.52-13.94-.15-9.76-.31-20.82-8-28.51s-18.75-7.85-28.51-8c-5.25-.08-10.67-.16-13.94-1.52-3.56-1.47-7.63-5.37-11.57-9.14C146.28,23.51,138.44,16,128,16s-18.27,7.51-25.18,14.14c-3.94,3.77-8,7.67-11.57,9.14C88,40.64,82.56,40.72,77.31,40.8c-9.76.15-20.82.31-28.51,8S41,67.55,40.8,77.31c-.08,5.25-.16,10.67-1.52,13.94-1.47,3.56-5.37,7.63-9.14,11.57C23.51,109.72,16,117.56,16,128s7.51,18.27,14.14,25.18c3.77,3.94,7.67,8,9.14,11.57,1.36,3.27,1.44,8.69,1.52,13.94.15,9.76.31,20.82,8,28.51s18.75,7.85,28.51,8c5.25.08,10.67.16,13.94,1.52,3.56,1.47,7.63,5.37,11.57,9.14C109.72,232.49,117.56,240,128,240s18.27-7.51,25.18-14.14c3.94-3.77,8-7.67,11.57-9.14,3.27-1.36,8.69-1.44,13.94-1.52,9.76-.15,20.82-.31,28.51-8s7.85-18.75,8-28.51c.08-5.25.16-10.67,1.52-13.94,1.47-3.56,5.37-7.63,9.14-11.57C232.49,146.28,240,138.44,240,128S232.49,109.73,225.86,102.82Zm-11.55,39.29c-4.79,5-9.75,10.17-12.38,16.52-2.52,6.1-2.63,13.07-2.73,19.82-.1,7-.21,14.33-3.32,17.43s-10.39,3.22-17.43,3.32c-6.75.1-13.72.21-19.82,2.73-6.35,2.63-11.52,7.59-16.52,12.38S132,224,128,224s-9.15-4.92-14.11-9.69-10.17-9.75-16.52-12.38c-6.1-2.52-13.07-2.63-19.82-2.73-7-.1-14.33-.21-17.43-3.32s-3.22-10.39-3.32-17.43c-.1-6.75-.21-13.72-2.73-19.82-2.63-6.35-7.59-11.52-12.38-16.52S32,132,32,128s4.92-9.15,9.69-14.11,9.75-10.17,12.38-16.52c2.52-6.1,2.63-13.07,2.73-19.82.1-7,.21-14.33,3.32-17.43S70.51,56.9,77.55,56.8c6.75-.1,13.72-.21,19.82-2.73,6.35-2.63,11.52-7.59,16.52-12.38S124,32,128,32s9.15,4.92,14.11,9.69,10.17,9.75,16.52,12.38c6.1,2.52,13.07,2.63,19.82,2.73,7,.1,14.33.21,17.43,3.32s3.22,10.39,3.32,17.43c.1,6.75.21,13.72,2.73,19.82,2.63,6.35,7.59,11.52,12.38,16.52S224,124,224,128,219.08,137.15,214.31,142.11ZM173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34Z"></path>
                        </svg>
                        طراحی زیبا
                      </div>
                      <div class="flex gap-x-1 text-zinc-600 text-sm mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#16a70c" viewBox="0 0 256 256">
                          <path d="M225.86,102.82c-3.77-3.94-7.67-8-9.14-11.57-1.36-3.27-1.44-8.69-1.52-13.94-.15-9.76-.31-20.82-8-28.51s-18.75-7.85-28.51-8c-5.25-.08-10.67-.16-13.94-1.52-3.56-1.47-7.63-5.37-11.57-9.14C146.28,23.51,138.44,16,128,16s-18.27,7.51-25.18,14.14c-3.94,3.77-8,7.67-11.57,9.14C88,40.64,82.56,40.72,77.31,40.8c-9.76.15-20.82.31-28.51,8S41,67.55,40.8,77.31c-.08,5.25-.16,10.67-1.52,13.94-1.47,3.56-5.37,7.63-9.14,11.57C23.51,109.72,16,117.56,16,128s7.51,18.27,14.14,25.18c3.77,3.94,7.67,8,9.14,11.57,1.36,3.27,1.44,8.69,1.52,13.94.15,9.76.31,20.82,8,28.51s18.75,7.85,28.51,8c5.25.08,10.67.16,13.94,1.52,3.56,1.47,7.63,5.37,11.57,9.14C109.72,232.49,117.56,240,128,240s18.27-7.51,25.18-14.14c3.94-3.77,8-7.67,11.57-9.14,3.27-1.36,8.69-1.44,13.94-1.52,9.76-.15,20.82-.31,28.51-8s7.85-18.75,8-28.51c.08-5.25.16-10.67,1.52-13.94,1.47-3.56,5.37-7.63,9.14-11.57C232.49,146.28,240,138.44,240,128S232.49,109.73,225.86,102.82Zm-11.55,39.29c-4.79,5-9.75,10.17-12.38,16.52-2.52,6.1-2.63,13.07-2.73,19.82-.1,7-.21,14.33-3.32,17.43s-10.39,3.22-17.43,3.32c-6.75.1-13.72.21-19.82,2.73-6.35,2.63-11.52,7.59-16.52,12.38S132,224,128,224s-9.15-4.92-14.11-9.69-10.17-9.75-16.52-12.38c-6.1-2.52-13.07-2.63-19.82-2.73-7-.1-14.33-.21-17.43-3.32s-3.22-10.39-3.32-17.43c-.1-6.75-.21-13.72-2.73-19.82-2.63-6.35-7.59-11.52-12.38-16.52S32,132,32,128s4.92-9.15,9.69-14.11,9.75-10.17,12.38-16.52c2.52-6.1,2.63-13.07,2.73-19.82.1-7,.21-14.33,3.32-17.43S70.51,56.9,77.55,56.8c6.75-.1,13.72-.21,19.82-2.73,6.35-2.63,11.52-7.59,16.52-12.38S124,32,128,32s9.15,4.92,14.11,9.69,10.17,9.75,16.52,12.38c6.1,2.52,13.07,2.63,19.82,2.73,7,.1,14.33.21,17.43,3.32s3.22,10.39,3.32,17.43c.1,6.75.21,13.72,2.73,19.82,2.63,6.35,7.59,11.52,12.38,16.52S224,124,224,128,219.08,137.15,214.31,142.11ZM173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34Z"></path>
                        </svg>
                        کارت گرافیک قدرتمند
                      </div>
                    </div>
                    <div class="w-1/2">
                      <div class="flex gap-x-1 text-zinc-600 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#16a70c" viewBox="0 0 256 256">
                          <path d="M225.86,102.82c-3.77-3.94-7.67-8-9.14-11.57-1.36-3.27-1.44-8.69-1.52-13.94-.15-9.76-.31-20.82-8-28.51s-18.75-7.85-28.51-8c-5.25-.08-10.67-.16-13.94-1.52-3.56-1.47-7.63-5.37-11.57-9.14C146.28,23.51,138.44,16,128,16s-18.27,7.51-25.18,14.14c-3.94,3.77-8,7.67-11.57,9.14C88,40.64,82.56,40.72,77.31,40.8c-9.76.15-20.82.31-28.51,8S41,67.55,40.8,77.31c-.08,5.25-.16,10.67-1.52,13.94-1.47,3.56-5.37,7.63-9.14,11.57C23.51,109.72,16,117.56,16,128s7.51,18.27,14.14,25.18c3.77,3.94,7.67,8,9.14,11.57,1.36,3.27,1.44,8.69,1.52,13.94.15,9.76.31,20.82,8,28.51s18.75,7.85,28.51,8c5.25.08,10.67.16,13.94,1.52,3.56,1.47,7.63,5.37,11.57,9.14C109.72,232.49,117.56,240,128,240s18.27-7.51,25.18-14.14c3.94-3.77,8-7.67,11.57-9.14,3.27-1.36,8.69-1.44,13.94-1.52,9.76-.15,20.82-.31,28.51-8s7.85-18.75,8-28.51c.08-5.25.16-10.67,1.52-13.94,1.47-3.56,5.37-7.63,9.14-11.57C232.49,146.28,240,138.44,240,128S232.49,109.73,225.86,102.82Zm-11.55,39.29c-4.79,5-9.75,10.17-12.38,16.52-2.52,6.1-2.63,13.07-2.73,19.82-.1,7-.21,14.33-3.32,17.43s-10.39,3.22-17.43,3.32c-6.75.1-13.72.21-19.82,2.73-6.35,2.63-11.52,7.59-16.52,12.38S132,224,128,224s-9.15-4.92-14.11-9.69-10.17-9.75-16.52-12.38c-6.1-2.52-13.07-2.63-19.82-2.73-7-.1-14.33-.21-17.43-3.32s-3.22-10.39-3.32-17.43c-.1-6.75-.21-13.72-2.73-19.82-2.63-6.35-7.59-11.52-12.38-16.52S32,132,32,128s4.92-9.15,9.69-14.11,9.75-10.17,12.38-16.52c2.52-6.1,2.63-13.07,2.73-19.82.1-7,.21-14.33,3.32-17.43S70.51,56.9,77.55,56.8c6.75-.1,13.72-.21,19.82-2.73,6.35-2.63,11.52-7.59,16.52-12.38S124,32,128,32s9.15,4.92,14.11,9.69,10.17,9.75,16.52,12.38c6.1,2.52,13.07,2.63,19.82,2.73,7,.1,14.33.21,17.43,3.32s3.22,10.39,3.32,17.43c.1,6.75.21,13.72,2.73,19.82,2.63,6.35,7.59,11.52,12.38,16.52S224,124,224,128,219.08,137.15,214.31,142.11ZM173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34Z"></path>
                        </svg>
                        حافظه SSD
                      </div>
                      <div class="flex gap-x-1 text-zinc-600 text-sm mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#16a70c" viewBox="0 0 256 256">
                          <path d="M225.86,102.82c-3.77-3.94-7.67-8-9.14-11.57-1.36-3.27-1.44-8.69-1.52-13.94-.15-9.76-.31-20.82-8-28.51s-18.75-7.85-28.51-8c-5.25-.08-10.67-.16-13.94-1.52-3.56-1.47-7.63-5.37-11.57-9.14C146.28,23.51,138.44,16,128,16s-18.27,7.51-25.18,14.14c-3.94,3.77-8,7.67-11.57,9.14C88,40.64,82.56,40.72,77.31,40.8c-9.76.15-20.82.31-28.51,8S41,67.55,40.8,77.31c-.08,5.25-.16,10.67-1.52,13.94-1.47,3.56-5.37,7.63-9.14,11.57C23.51,109.72,16,117.56,16,128s7.51,18.27,14.14,25.18c3.77,3.94,7.67,8,9.14,11.57,1.36,3.27,1.44,8.69,1.52,13.94.15,9.76.31,20.82,8,28.51s18.75,7.85,28.51,8c5.25.08,10.67.16,13.94,1.52,3.56,1.47,7.63,5.37,11.57,9.14C109.72,232.49,117.56,240,128,240s18.27-7.51,25.18-14.14c3.94-3.77,8-7.67,11.57-9.14,3.27-1.36,8.69-1.44,13.94-1.52,9.76-.15,20.82-.31,28.51-8s7.85-18.75,8-28.51c.08-5.25.16-10.67,1.52-13.94,1.47-3.56,5.37-7.63,9.14-11.57C232.49,146.28,240,138.44,240,128S232.49,109.73,225.86,102.82Zm-11.55,39.29c-4.79,5-9.75,10.17-12.38,16.52-2.52,6.1-2.63,13.07-2.73,19.82-.1,7-.21,14.33-3.32,17.43s-10.39,3.22-17.43,3.32c-6.75.1-13.72.21-19.82,2.73-6.35,2.63-11.52,7.59-16.52,12.38S132,224,128,224s-9.15-4.92-14.11-9.69-10.17-9.75-16.52-12.38c-6.1-2.52-13.07-2.63-19.82-2.73-7-.1-14.33-.21-17.43-3.32s-3.22-10.39-3.32-17.43c-.1-6.75-.21-13.72-2.73-19.82-2.63-6.35-7.59-11.52-12.38-16.52S32,132,32,128s4.92-9.15,9.69-14.11,9.75-10.17,12.38-16.52c2.52-6.1,2.63-13.07,2.73-19.82.1-7,.21-14.33,3.32-17.43S70.51,56.9,77.55,56.8c6.75-.1,13.72-.21,19.82-2.73,6.35-2.63,11.52-7.59,16.52-12.38S124,32,128,32s9.15,4.92,14.11,9.69,10.17,9.75,16.52,12.38c6.1,2.52,13.07,2.63,19.82,2.73,7,.1,14.33.21,17.43,3.32s3.22,10.39,3.32,17.43c.1,6.75.21,13.72,2.73,19.82,2.63,6.35,7.59,11.52,12.38,16.52S224,124,224,128,219.08,137.15,214.31,142.11ZM173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34Z"></path>
                        </svg>
                        صفحه نمایش لمسی
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <!-- PRODUCT SLIDER 1 -->
    <div class="bg-white rounded-2xl pt-10 shadow-xl my-10">
      <!-- TOP SLIDER -->
      <div class="flex justify-between px-5 md:px-10 items-center">
        <div class="border-b-2 border-red-500 pb-1">پرتخفیف ترین ها</div>
        <a href="../../shop1/amirtttk.ir/search.php">
          <div class="transition px-4 py-2 rounded-xl flex justify-center items-center text-red-500 hover:text-red-600">دیدن همه<img class="w-4" src="attachment/image/arrow-left.png" alt=""></div>
        </a>
      </div>
      <!-- SLIDER -->
      <div class="containerPSlider swiper">
        <div class="slide-container1 px-2">
          <div class="card-wrapper swiper-wrapper py-4">

            <?php
            foreach ($discount_index as $value) {
            ?>
              <a href="../../shop1/amirtttk.ir/single-product.php" class="card swiper-slide my-2 p-2 md:p-3">
                <div class="image-box mb-6">
                  <div>
                    <img class="hover:scale-105 transition rounded-3xl w-full mx-auto" src="attachment/image/productSlider/<?= testSecurity($value['image']) ?>" alt="<?= testSecurity($value['model_name']) ?>" />
                  </div>
                </div>
                <div class="space-y-3 text-center">
                  <span class="text-sm opacity-80 mb-2 h-8 md:h-10">
                    <div><?= testSecurity($value['model_name']) ?></div>
                  </span>
                  <div class="flex justify-center text-xs opacity-75">
                    <div class="line-through"><?= testSecurity($value['real_price']) ?></div>
                    <div class="line-through">تومان</div>
                  </div>
                  <div class="flex justify-center mt-1 mb-2 text-sm">
                    <div><?= testSecurity($value['discount_price']) ?></div>
                    <div>تومان</div>
                  </div>
                </div>
              </a>
            <?php
            }
            ?>


          </div>
        </div>
      </div>
    </div>
    <!-- BIG SLIDER -->
    <div class="swiper mySwiper bg-red-500 rounded-3xl mb-10">
      <div class="swiper-wrapper py-5">
        <div class="card swiper-slide flex flex-col justify-center items-center">
          <img src="attachment/image/FeaturedPromos.svg" alt="">
          <img class="w-full" src="attachment/image/box.webp" alt="">
        </div>

        <?php
        foreach ($best_suggest as $value) {
        ?>
          <a href="../../shop1/amirtttk.ir/single-product.php" class="card swiper-slide my-2 p-2 md:p-3 bg-white rounded-xl">
            <div class="image-box mb-6">
              <div>
                <img class="hover:scale-105 transition rounded-3xl w-full mx-auto" src="attachment/image/productSlider/<?= testSecurity($value['image']) ?>" alt="<?= $value['model_name'] ?>" />
              </div>
            </div>
            <div class="space-y-2 text-right">
              <span class="text-sm opacity-80 mb-4 h-8 md:h-10">
                <div><?= testSecurity($value['model_name']) ?></div>
              </span>
              <div class="flex justify-end mt-1 mb-1 text-sm">
                <div><?= testSecurity($value['discount_price']) ?></div>
                <div>تومان</div>
              </div>
              <div class="flex justify-end text-xs opacity-75">
                <div class="line-through"><?= testSecurity($value['real_price']) ?></div>
                <div class="line-through">تومان</div>
              </div>
            </div>
          </a>
        <?php
        }
        ?>
      </div>
    </div>
    <!-- 4 IMAGE -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <?php
      foreach ($index_adds as $value) {
      ?>
        <a href="#">
          <img class="rounded-xl" src="attachment/image/fourImage/<?= testSecurity($value["image"]) ?>" alt="<?= testSecurity($value["name"]) ?>">
        </a>
      <?php
      }
      ?>
    </div>
    <!-- GOOD CATEGORYS -->
    <div class="bg-white rounded-2xl py-6 shadow-xl my-10">
      <div class="flex justify-between px-5 pb-5 md:px-10 items-center">
        <div class="border-b-2 border-red-500 pb-1">دسته بندی های محبوب</div>
        <a href="../../shop1/amirtttk.ir/search.php">
          <div class="transition px-4 py-2 rounded-xl flex justify-center items-center text-red-500 hover:text-red-600">دیدن همه<img class="w-4" src="attachment/image/arrow-left.png" alt=""></div>
        </a>
      </div>
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-7 gap-x-4 gap-y-4 md:gap-x-8 2xl:gap-x-10 px-3 md:px-8 lg:px-28">
        <?php
        foreach ($category_index as $value) {
        ?>
          <a href="#" class="flex justify-center items-center flex-col gap-y-3 hover:scale-105 transition">
            <img src="attachment/image/goodCategory/<?= testSecurity($value['image']) ?>" alt="<?= $value['name'] ?>">
            <div class="text-sm opacity-90"><?= testSecurity($value['name']) ?></div>
          </a>
        <?php
        }
        ?>

      </div>
    </div>


    <div class="bg-white rounded-2xl pt-10 shadow-xl my-10">
      <!-- TOP SLIDER -->
      <div class="flex justify-between px-5 md:px-10 items-center">
        <div class="border-b-2 border-red-500 pb-1">کالای دیجیتال</div>
        <a href="../../shop1/amirtttk.ir/search.php">
          <div class="transition px-4 py-2 rounded-xl flex justify-center items-center text-red-500 hover:text-red-600">دیدن همه<img class="w-4" src="attachment/image/arrow-left.png" alt=""></div>
        </a>
      </div>
      <!-- SLIDER -->
      <div class="containerPSlider swiper">
        <div class="slide-container1 px-2">
          <div class="card-wrapper swiper-wrapper py-4">

            <?php
            foreach ($digital_product as $value) {
            ?>
              <a href="../../shop1/amirtttk.ir/single-product.php" class="card swiper-slide my-2 p-2 md:p-3">
                <div class="image-box mb-6">
                  <div>
                    <img class="hover:scale-105 transition rounded-3xl w-full mx-auto" src="attachment/image/productSlider/<?= testSecurity($value['image']) ?>" alt="<?= testSecurity($value['name']) ?>" />
                  </div>
                </div>
                <div class="space-y-3 text-center">
                  <span class="text-sm opacity-80 mb-2 h-8 md:h-10">
                    <div><?= testSecurity($value['name']) ?></div>
                  </span>
                  <div class="flex justify-center text-xs opacity-75">
                    <div class="line-through"><?= testSecurity($value['discount_price']) ?></div>
                    <div class="line-through">تومان</div>
                  </div>
                  <div class="flex justify-center mt-1 mb-2 text-sm">
                    <div><?= testSecurity($value['real_price']) ?></div>
                    <div>تومان</div>
                  </div>
                </div>
              </a>
            <?php
            }
            ?>




          </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
      </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
      <a href="../../shop1/amirtttk.ir/search.php">
        <img class="rounded-xl" src="attachment/image/twoImage/<?= testSecurity($image_single[4]["image"]) ?>" alt="">
      </a>
      <a href="../../shop1/amirtttk.ir/search.php">
        <img class="rounded-xl" src="attachment/image/twoImage/<?= testSecurity($image_single[5]["image"]) ?>" alt="">
      </a>
    </div>

    <!-- blog -->
    <div class="bg-white rounded-2xl py-8 shadow-xl my-10">
      <div class="flex justify-between px-5 md:px-10 items-center">
        <div class="text-red-500">خواندنی ها</div>


        <a href="../../shop1/amirtttk.ir/blog.php">
          <div class="transition px-4 py-2 rounded-xl flex justify-center items-center text-red-500 hover:text-red-600">مطالب بیشتر
            <img class="w-4" src="attachment/image/arrow-left.png" alt="">
          </div>
        </a>

      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 px-10 gap-5">
        <?php
        foreach ($blog_index as $value) {
        ?>
          <a href="../../shop1/amirtttk.ir/blog(single).php" class="shadow-lg rounded-3xl p-4 hover:text-red-600 transition">
            <div>
              <img class="rounded-xl hover:scale-105 transition" src="attachment/image/blog/<?= testSecurity($value['image']) ?>" alt="<?= testSecurity($value['name'])?>">
            </div>
            <div class="text-sm opacity-90 py-5"><?= testSecurity($value['name']) ?></div>
          </a>
        <?php
        }
        ?>


      </div>
    </div>
  </div>
  <!-- FOOTER -->
  <?php require_once "masterPage/footer.php" ?>




</body>


<!-- ********************************************************************************************** -->

<!--DROPDOWNS FOR NAVBAR-->
<script src="assets/js/flowbite.bundle.js"></script>
<script src="assets/js/alpine.js" defer>
</script>
<!--MOBILE NAVBAR-->
<script src="assets/js/navbar.js"></script>
<!-- SHOW MODAL SEARCH -->
<script src="assets/js/searchBox.js"></script>
<!-- SLIDER HERO -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/sliderHero.js"></script>
<!-- PRODUCT SLIDER -->
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/scriptSlider.style.js"></script>
<!-- BIG SLIDER -->
<script src="assets/js/bigSlider.js"></script>
<!-- FOR TIMER OFF -->
<script src="assets/js/main.js"></script>



</html>