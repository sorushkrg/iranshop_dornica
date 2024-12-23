<?php

session_start();

?>

<div>
    <!-- TOP -->
    <nav
        class="relative px-5 py-2 flex flex-wrap justify-between items-start pt-5 bg-white">
        <a class="order-2" href="../../../iranshop_dornica/index .php">
            <img class="w-36" src="attachment/image/site_logo/<?= testSecurity($setting["site_logo"]) ?>" alt="" />
        </a>
        <div class="order-3 w-full mt-3 lg:mt-0 lg:w-5/12 lg:mr-[10%]">
            <div class="relative">
                <input
                    type="search"
                    id="default-search"
                    class="sm:block w-full px-4 py-3 sm:pl-12 text-sm sm:text-base pl-8 text-red-900 placeholder:text-red-600 rounded-2xl text-right placeholder:text-sm focus:outline-red-400 border-2 border-red-400"
                    placeholder="جستجو محصول"
                    onfocus="showModalSearch()" />
                <div
                    class="absolute inset-y-0 left-0 flex items-center pl-4">
                    <img class="w-5 h-5 text-gray-500" src="attachment/image/search.png" alt="" />
                </div>
                <div class="absolute w-full bg-gray-50 shadow-2xl h-auto mt-2 z-50 rounded-2xl hidden" id="showModalSearch">
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-3 p-3">
                        <a href="#" class="flex items-center bg-white p-2 rounded-xl">
                            <img src="attachment/image/product/bag.png" alt="" class="w-14 rounded-lg ml-2">
                            <div class="text-xs opacity-70">
                                کیف لپ تاپ مدل ضدآب
                            </div>
                        </a>
                        <a href="#" class="flex items-center bg-white p-2 rounded-xl">
                            <img src="attachment/image/product/bag.png" alt="" class="w-14 rounded-lg ml-2">
                            <div class="text-xs opacity-70">
                                کیف لپ تاپ مدل ضدآب
                            </div>
                        </a>
                        <a href="#" class="flex items-center bg-white p-2 rounded-xl">
                            <img src="attachment/image/product/bag.png" alt="" class="w-14 rounded-lg ml-2">
                            <div class="text-xs opacity-70">
                                کیف لپ تاپ مدل ضدآب
                            </div>
                        </a>
                    </div>
                    <div class="flex flex-wrap gap-2 px-3 mb-3">
                        <a href="#" class="bg-white rounded-xl px-2 py-1 flex items-center text-sm">
                            کیف زنانه
                            <div class="opacity-70">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#333333" viewBox="0 0 256 256">
                                    <path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z">
                                    </path>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="bg-white rounded-xl px-2 py-1 flex items-center text-sm">
                            کیف سبک
                            <div class="opacity-70">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#333333" viewBox="0 0 256 256">
                                    <path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z">
                                    </path>
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="bg-white rounded-xl px-2 py-1 flex items-center text-sm">
                            کیف زیبا
                            <div class="opacity-70">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#333333" viewBox="0 0 256 256">
                                    <path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z">
                                    </path>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="border-t mx-3 flex justify-between px-1 py-2">
                        <div class="opacity-80">
                            جستجو های اخیر
                        </div>
                        <a href="#" class="bg-white rounded-full p-1 hover:bg-stone-50 transition opacity-90">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#333333" viewBox="0 0 256 256">
                                <path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="flex flex-wrap gap-2 px-3 mb-3">
                        <a href="#" class="bg-white rounded-xl px-2 py-1 flex items-center text-sm">
                            <div class="opacity-70 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#333333" viewBox="0 0 256 256">
                                    <path d="M136,80v43.47l36.12,21.67a8,8,0,0,1-8.24,13.72l-40-24A8,8,0,0,1,120,128V80a8,8,0,0,1,16,0Zm-8-48A95.44,95.44,0,0,0,60.08,60.15C52.81,67.51,46.35,74.59,40,82V64a8,8,0,0,0-16,0v40a8,8,0,0,0,8,8H72a8,8,0,0,0,0-16H49c7.15-8.42,14.27-16.35,22.39-24.57a80,80,0,1,1,1.66,114.75,8,8,0,1,0-11,11.64A96,96,0,1,0,128,32Z">
                                    </path>
                                </svg>
                            </div>
                            آیفون
                        </a>
                        <a href="#" class="bg-white rounded-xl px-2 py-1 flex items-center text-sm">
                            <div class="opacity-70 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#333333" viewBox="0 0 256 256">
                                    <path d="M136,80v43.47l36.12,21.67a8,8,0,0,1-8.24,13.72l-40-24A8,8,0,0,1,120,128V80a8,8,0,0,1,16,0Zm-8-48A95.44,95.44,0,0,0,60.08,60.15C52.81,67.51,46.35,74.59,40,82V64a8,8,0,0,0-16,0v40a8,8,0,0,0,8,8H72a8,8,0,0,0,0-16H49c7.15-8.42,14.27-16.35,22.39-24.57a80,80,0,1,1,1.66,114.75,8,8,0,1,0-11,11.64A96,96,0,1,0,128,32Z">
                                    </path>
                                </svg>
                            </div>
                            تلویزیون
                        </a>
                        <a href="#" class="bg-white rounded-xl px-2 py-1 flex items-center text-sm">
                            <div class="opacity-70 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#333333" viewBox="0 0 256 256">
                                    <path d="M136,80v43.47l36.12,21.67a8,8,0,0,1-8.24,13.72l-40-24A8,8,0,0,1,120,128V80a8,8,0,0,1,16,0Zm-8-48A95.44,95.44,0,0,0,60.08,60.15C52.81,67.51,46.35,74.59,40,82V64a8,8,0,0,0-16,0v40a8,8,0,0,0,8,8H72a8,8,0,0,0,0-16H49c7.15-8.42,14.27-16.35,22.39-24.57a80,80,0,1,1,1.66,114.75,8,8,0,1,0-11,11.64A96,96,0,1,0,128,32Z">
                                    </path>
                                </svg>
                            </div>
                            شیائومی
                        </a>
                        <a href="#" class="bg-white rounded-xl px-2 py-1 flex items-center text-sm">
                            <div class="opacity-70 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#333333" viewBox="0 0 256 256">
                                    <path d="M136,80v43.47l36.12,21.67a8,8,0,0,1-8.24,13.72l-40-24A8,8,0,0,1,120,128V80a8,8,0,0,1,16,0Zm-8-48A95.44,95.44,0,0,0,60.08,60.15C52.81,67.51,46.35,74.59,40,82V64a8,8,0,0,0-16,0v40a8,8,0,0,0,8,8H72a8,8,0,0,0,0-16H49c7.15-8.42,14.27-16.35,22.39-24.57a80,80,0,1,1,1.66,114.75,8,8,0,1,0-11,11.64A96,96,0,1,0,128,32Z">
                                    </path>
                                </svg>
                            </div>
                            کفش اسپورت
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-4 hidden lg:flex">
            <span
                class="block relative"
                x-data="{showChildren:false}"
                @mouseenter="showChildren=true"
                @mouseleave="showChildren=false">
                <a
                    href="../../../iranshop_dornica/login.php"
                    class="flex items-center h-10 leading-10 px-3 mx-1 transition rounded-xl hover:bg-red-50">
                    <img class="ml-1 w-6" src="attachment/image/user.png" alt="" />
                    <?php if (isset($_SESSION['user_id'])) { ?>

                        <span class="text-sm opacity-95">
                            <?= $_SESSION["first_name"] . " " . $_SESSION["last_name"] ?>
                        </span>

                    <?php
                    } else {
                    ?>
                        <span
                            class="text-sm opacity-95">
                            ورود | ثبت نام
                        </span>
                    <?php } ?>
                    <span>
                        <img class="w-4 mr-1" src="attachment/image/chevron-down-login.png" alt="" />
                    </span>
                </a>
                <div
                    class="bg-white rounded-2xl shadow-md border-gray-50 text-sm absolute top-auto right-0 w-64 z-30 mt-1"
                    x-show="showChildren"
                    x-transition:enter="transition ease duration-300 transform"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease duration-300 transform"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-4"
                    style="display: none"
                    @mouseenter="showChildren=true"
                    @mouseleave="showChildren=false">
                    <div class="bg-white rounded-2xl w-full relative z-10 py-2 px-2">

                        <!--********************************* login or signup************************ -->
                        <?php
                        if (isset($_SESSION['user_id'])) { ?>
                            <ul class="list-reset">
                                <li
                                    class="relative border-b-2 border-red-300 pb-2"
                                    x-data="{showChildren:false}"
                                    @mouseleave="showChildren=false"
                                    @mouseenter="showChildren=true">
                                    <a
                                        href="../../../iranshop_dornica/profile.php"
                                        class="px-2 py-2 flex w-full items-start hover:bg-red-50 rounded-xl">
                                        <span
                                            class="flex justify-center items-center opacity-90"><img
                                                class="w-8 ml-2"
                                                src="attachment/image/userNotImage.png"
                                                alt="" /><?= $_SESSION["first_name"] . " " . $_SESSION["last_name"] ?></span>
                                    </a>
                                </li>
                                <!-- سایر موارد منو -->
                                <li
                                    class="relative pt-2"
                                    x-data="{showChildren:false}"
                                    @mouseleave="showChildren=false"
                                    @mouseenter="showChildren=true">
                                    <a
                                        href="../../../iranshop_dornica/profile-order.php"
                                        class="px-4 py-2 flex w-full items-start hover:bg-red-50 rounded-xl">
                                        <span class="flex justify-center items-center text-sm opacity-90"><img
                                                class="w-5 ml-1"
                                                src="attachment/image/package.png"
                                                alt="" />سفارش ها</span>
                                    </a>
                                </li>
                                <li
                                    class="relative"
                                    x-data="{showChildren:false}"
                                    @mouseleave="showChildren=false"
                                    @mouseenter="showChildren=true">
                                    <a
                                        href="../../../iranshop_dornica/profile-favorites.php"
                                        class="px-4 py-2 flex w-full items-start hover:bg-red-50 rounded-xl">
                                        <span class="flex justify-center items-center text-sm opacity-90"><img
                                                class="w-5 ml-1"
                                                src="attachment/image/heart.png"
                                                alt="" />علاقه مندی ها</span>
                                    </a>
                                </li>
                                <li
                                    class="relative"
                                    x-data="{showChildren:false}"
                                    @mouseleave="showChildren=false"
                                    @mouseenter="showChildren=true">
                                    <a
                                        href="#"
                                        class="px-4 py-2 flex w-full items-start hover:bg-red-50 rounded-xl">
                                        <span class="flex justify-center items-center text-sm opacity-90"><img class="w-5 ml-1" src="attachment/image/exit.png" alt="" />خروج
                                            از حساب کاربری</span>
                                    </a>
                                </li>
                            </ul>
                        <?php
                        } else { ?>
                            <ul class="list-reset">
                                <li
                                    class="relative pt-2"
                                    x-data="{showChildren:false}"
                                    @mouseleave="showChildren=false"
                                    @mouseenter="showChildren=true">
                                    <a
                                        href="login.php"
                                        class="px-4 py-2 flex w-full items-start hover:bg-red-50 rounded-xl">
                                        <span class="flex justify-center items-center text-sm opacity-90"><img
                                                class="w-5 ml-1"
                                                src="attachment/image/user.png"
                                                alt="" />ورود</span>
                                    </a>
                                </li>
                                <li
                                    class="relative"
                                    x-data="{showChildren:false}"
                                    @mouseleave="showChildren=false"
                                    @mouseenter="showChildren=true">
                                    <a
                                        href="login-register.php"
                                        class="px-4 py-2 flex w-full items-start hover:bg-red-50 rounded-xl">
                                        <span class="flex justify-center items-center text-sm opacity-90"><img
                                                class="w-5 ml-1"
                                                src="attachment/image/user.png"
                                                alt="" />ثبت نام</span>
                                    </a>
                                </li>
                            </ul>
                        <?php
                        }
                        ?>
                        <!--********************************* login or signup************************ -->


                    </div>
                </div>
            </span>
            <span
                class="block relative"
                x-data="{showChildren:false}"
                @click.away="showChildren=false"
                @mouseenter="showChildren=true"
                @mouseleave="showChildren=false">
                <a
                    href="../../../iranshop_dornica/cart.php"
                    class="flex items-center h-10 leading-10 px-3 cursor-pointer no-underline hover:no-underline duration-100 mx-1 transition rounded-xl hover:bg-red-100">
                    <img
                        class="inline ml-1 w-5"
                        src="attachment/image/shopping-cart.png"
                        alt="" />
                    <span
                        class="text-sm text-neutral-800 hover:text-neutral-700 opacity-95">
                        سبد خرید
                    </span>
                    <span>
                        <img class="w-4 mr-1" src="attachment/image/chevron-down-login.png" alt="" />
                    </span>
                </a>
                <div
                    class="bg-white rounded-2xl shadow-md first-letter:border-2 border-gray-50 text-sm absolute top-auto left-0 w-72 z-30 mt-1"
                    x-show="showChildren"
                    x-transition:enter="transition ease duration-300 transform"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease duration-300 transform"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-4"
                    style="display: none"
                    @mouseenter="showChildren=true"
                    @mouseleave="showChildren=false">
                    <div class="bg-white rounded-2xl w-full relative z-10 py-2 px-2">
                        <ul class="list-reset flex flex-col gap-y-2">
                            <li
                                class="relative">
                                <a
                                    href="../../../iranshop_dornica/single-product.php"
                                    class="px-2 py-2 flex w-full items-start hover:bg-red-50 rounded-xl">
                                    <span class="flex justify-center items-center opacity-90">
                                        <div class="flex">
                                            <img
                                                class="w-14 ml-2 rounded-lg"
                                                src="attachment/image/product/bag.png"
                                                alt="" />
                                            <div class="flex flex-col flex-wrap gap-y-1 justify-center">
                                                <div class="opacity-80 w-full text-sm">
                                                    کوله پشتی مدل ایستاده
                                                </div>
                                                <div class="flex opacity-75 text-xs">
                                                    <div>
                                                        قیمت:
                                                    </div>
                                                    <div>
                                                        700,000
                                                    </div>
                                                    <div>
                                                        تومان
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="text-red-400 hover:text-red-500 bg-red-100 hover:bg-red-200 px-2 text-xl font-bold h-7 rounded-full cursor-pointer absolute left-2 top-5">
                                                ×
                                            </span>
                                        </div>
                                    </span>
                                </a>
                            </li>
                            <li
                                class="relative">
                                <a
                                    href="../../../iranshop_dornica/single-product.php"
                                    class="px-2 py-2 flex w-full items-start hover:bg-red-50 rounded-xl">
                                    <span class="flex justify-center items-center opacity-90">
                                        <div class="flex">
                                            <img
                                                class="w-14 ml-2 rounded-lg"
                                                src="attachment/image/product/bag.png"
                                                alt="" />
                                            <div class="flex flex-col flex-wrap gap-y-1 justify-center">
                                                <div class="opacity-80 w-full text-sm">
                                                    کوله پشتی مدل ایستاده
                                                </div>
                                                <div class="flex opacity-75 text-xs">
                                                    <div>
                                                        قیمت:
                                                    </div>
                                                    <div>
                                                        700,000
                                                    </div>
                                                    <div>
                                                        تومان
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="text-red-400 hover:text-red-500 bg-red-100 hover:bg-red-200 px-2 text-xl font-bold h-7 rounded-full cursor-pointer absolute left-2 top-5">
                                                ×
                                            </span>
                                        </div>
                                    </span>
                                </a>
                            </li>
                            <li
                                class="relative">
                                <a
                                    href="../../../iranshop_dornica/checkout.php"
                                    class="px-2 py-2 flex w-full items-start justify-center">
                                    <span class="flex justify-center items-center opacity-90">
                                        <button class="px-7 py-2 text-center text-white bg-red-500 align-middle border-0 rounded-lg shadow-md text-xs">تسویه حساب</button>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </span>
        </div>
        <div class="order-1 lg:hidden">
            <button class="navbar-burger flex items-center text-red-300 p-3">
                <svg
                    class="block h-4 w-4 fill-current"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
    </nav>
    <!-- DOWN -->
    <div class="w-full">
        <div class="py-2 px-5 bg-white shadow-stone-50 shadow-md hidden lg:block">
            <div class="-mx-1">
                <ul class="flex w-full flex-wrap items-center h-10">
                    <li class="block relative">
                        <a
                            href="../../../iranshop_dornica/index .php"
                            class="flex items-center h-10 text-sm leading-10 px-4 mx-1 transition text-gray-700 hover:text-red-500">
                            <span class=" border-b-2 border-red-600">صفحه اصلی</span>
                        </a>
                    </li>
                    <li
                        class="block relative"
                        x-data="{showChildren:false}">
                        <a
                            href="../../../iranshop_dornica/category-index.php"
                            class="flex items-center h-10 leading-10 px-3 text-sm mx-1 transition text-gray-700 hover:text-red-500"
                            @click.prevent="showChildren=!showChildren"
                            @mouseenter="showChildren=true"
                            @mouseleave="showChildren=false">
                            <span>پوشاک</span>
                            <span>
                                <img class="w-4 mr-1" src="attachment/image/chevron-down-login.png" alt="" />
                            </span>
                        </a>
                        <div
                            class="bg-white rounded-2xl shadow-md text-sm  opacity-[0.97] absolute top-auto right-0 min-w-full w-56 z-30 mt-3"
                            x-show="showChildren"
                            x-transition:enter="transition ease duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease duration-300 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4"
                            style="display: none"
                            @mouseenter="showChildren=true"
                            @mouseleave="showChildren=false">
                            <div
                                class="bg-white rounded-2xl w-full relative z-10 py-2 px-2">
                                <ul class="list-reset">
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">مردانه</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">زنانه</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">بچگانه</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li
                        class="block relative"
                        x-data="{showChildren:false}"
                        @click.away="showChildren=false">
                        <a
                            href="../../../iranshop_dornica/category-index.php"
                            class="flex items-center h-10 leading-10 px-3 cursor-pointer text-sm no-underline hover:no-underline duration-100 mx-1 transition text-gray-700 hover:text-red-500"
                            @click.prevent="showChildren=!showChildren"
                            @mouseenter="showChildren=true"
                            @mouseleave="showChildren=false">
                            <span>کالای دیجیتال</span>
                            <span>
                                <img class="w-4 mr-1" src="attachment/image/chevron-down-login.png" alt="" />
                            </span>
                        </a>
                        <div
                            class="bg-white rounded-2xl shadow-md text-sm opacity-[0.97] absolute top-auto right-0 min-w-full w-56 z-30 mt-3"
                            x-show="showChildren"
                            x-transition:enter="transition ease duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease duration-300 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4"
                            @mouseenter="showChildren=true"
                            @mouseleave="showChildren=false"
                            style="display: none">
                            <div
                                class="bg-white rounded-2xl w-full relative z-10 py-2 px-2">
                                <ul class="list-reset">
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">لپ تاپ و کامپیوتر</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">موبایل</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">تبلت</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">وسایل جانبی</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li
                        class="block relative"
                        x-data="{showChildren:false}"
                        @click.away="showChildren=false">
                        <a
                            href="../../../iranshop_dornica/category-index.php"
                            class="flex items-center h-10 leading-10 px-3 cursor-pointer text-sm no-underline hover:no-underline duration-100 mx-1 transition text-gray-700 hover:text-red-500"
                            @click.prevent="showChildren=!showChildren"
                            @mouseenter="showChildren=true"
                            @mouseleave="showChildren=false">
                            <span>لوازم خانگی</span>
                            <span>
                                <img class="w-4 mr-1" src="attachment/image/chevron-down-login.png" alt="" />
                            </span>
                        </a>
                        <div
                            class="bg-white rounded-2xl shadow-md text-sm  opacity-[0.97] absolute top-auto right-0 min-w-full w-56 z-30 mt-3"
                            x-show="showChildren"
                            x-transition:enter="transition ease duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease duration-300 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4"
                            @mouseenter="showChildren=true"
                            @mouseleave="showChildren=false"
                            style="display: none">
                            <div
                                class="bg-white rounded-2xl w-full relative z-10 py-2 px-2">
                                <ul class="list-reset">
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">یخچال و فریزر</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">ماشین لباسشویی</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">ماشین ظرف شویی</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">اجاق گاز</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">هود و سینک</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li
                        class="block relative"
                        x-data="{showChildren:false}"
                        @click.away="showChildren=false">
                        <a
                            href="../../../iranshop_dornica/category-index.php"
                            class="flex items-center h-10 leading-10 px-3 cursor-pointer text-sm no-underline hover:no-underline duration-100 mx-1 transition text-gray-700 hover:text-red-500"
                            @click.prevent="showChildren=!showChildren"
                            @mouseenter="showChildren=true"
                            @mouseleave="showChildren=false">
                            <span>زیبایی</span>
                            <span>
                                <img class="w-4 mr-1" src="attachment/image/chevron-down-login.png" alt="" />
                            </span>
                        </a>
                        <div
                            class="bg-white rounded-2xl shadow-md text-sm  opacity-[0.97] absolute top-auto right-0 min-w-full w-56 z-30 mt-3"
                            x-show="showChildren"
                            x-transition:enter="transition ease duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease duration-300 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4"
                            @mouseenter="showChildren=true"
                            @mouseleave="showChildren=false"
                            style="display: none">
                            <div
                                class="bg-white rounded-2xl w-full relative z-10 py-2 px-2">
                                <ul class="list-reset">
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">لوازم آرایشی</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">عطر و ادکلن</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">لوازم بهداشتی</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li
                        class="block relative"
                        x-data="{showChildren:false}"
                        @click.away="showChildren=false">
                        <a
                            href="../../../iranshop_dornica/category-index.php"
                            class="flex items-center h-10 leading-10 px-3 cursor-pointer text-sm no-underline hover:no-underline duration-100 mx-1 transition text-gray-700 hover:text-red-500"
                            @click.prevent="showChildren=!showChildren"
                            @mouseenter="showChildren=true"
                            @mouseleave="showChildren=false">
                            <span>لوازم برقی</span>
                            <span>
                                <img class="w-4 mr-1" src="attachment/image/chevron-down-login.png" alt="" />
                            </span>
                        </a>
                        <div
                            class="bg-white rounded-2xl shadow-md text-sm  opacity-[0.97] absolute top-auto right-0 min-w-full w-56 z-30 mt-3"
                            x-show="showChildren"
                            x-transition:enter="transition ease duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease duration-300 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4"
                            @mouseenter="showChildren=true"
                            @mouseleave="showChildren=false"
                            style="display: none">
                            <div
                                class="bg-white rounded-2xl w-full relative z-10 py-2 px-2">
                                <ul class="list-reset">
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">سشوار</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">اتو</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">ریش تراش</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">ساعت دیجیتال</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">هم زن و آبمیوه گیر</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">ترازو دیجیتال و چرخ کن</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li
                        class="block relative"
                        x-data="{showChildren:false}"
                        @click.away="showChildren=false">
                        <a
                            href="../../../iranshop_dornica/category-index.php"
                            class="flex items-center h-10 leading-10 px-3 cursor-pointer text-sm no-underline hover:no-underline duration-100 mx-1 transition text-gray-700 hover:text-red-500"
                            @click.prevent="showChildren=!showChildren"
                            @mouseenter="showChildren=true"
                            @mouseleave="showChildren=false">
                            <span>سوپر مارکت</span>
                            <span>
                                <img class="w-4 mr-1" src="attachment/image/chevron-down-login.png" alt="" />
                            </span>
                        </a>
                        <div
                            class="bg-white rounded-2xl shadow-md text-sm opacity-[0.97] absolute top-auto right-0 min-w-full w-56 z-30 mt-3"
                            x-show="showChildren"
                            x-transition:enter="transition ease duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease duration-300 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4"
                            @mouseenter="showChildren=true"
                            @mouseleave="showChildren=false"
                            style="display: none">
                            <div
                                class="bg-white rounded-2xl w-full relative z-10 py-2 px-2">
                                <ul class="list-reset">
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">صبحانه</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">تنقلات</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">خشکبار</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">حبوبات و کنسرو</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">میوه و سبزیجات</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">سوسیس و کالباس</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">گوشت</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">لبنیات</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li
                        class="block relative"
                        x-data="{showChildren:false}"
                        @click.away="showChildren=false">
                        <a
                            href="../../../iranshop_dornica/category-index.php"
                            class="flex items-center h-10 leading-10 px-3 cursor-pointer text-sm no-underline hover:no-underline duration-100 mx-1 transition text-gray-700 hover:text-red-500"
                            @click.prevent="showChildren=!showChildren"
                            @mouseenter="showChildren=true"
                            @mouseleave="showChildren=false">
                            <span>کودک و نوزاد</span>
                            <span>
                                <img class="w-4 mr-1" src="attachment/image/chevron-down-login.png" alt="" />
                            </span>
                        </a>
                        <div
                            class="bg-white rounded-2xl shadow-md text-sm  opacity-[0.97] absolute top-auto left-0 xl:right-0 min-w-full w-56 z-30 mt-3"
                            x-show="showChildren"
                            x-transition:enter="transition ease duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease duration-300 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4"
                            @mouseenter="showChildren=true"
                            @mouseleave="showChildren=false"
                            style="display: none">
                            <div
                                class="bg-white rounded-2xl w-full relative z-10 py-2 px-2">
                                <ul class="list-reset">
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">پوشک</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">بهداشت و حمام</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">سرگرمی و غذاخوری</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">کالای خواب</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li
                        class="block relative"
                        x-data="{showChildren:false}"
                        @click.away="showChildren=false">
                        <a
                            href="#"
                            class="flex items-center h-10 leading-10 px-3 cursor-pointer text-sm no-underline hover:no-underline duration-100 mx-1 transition text-gray-700 hover:text-red-500"
                            @click.prevent="showChildren=!showChildren"
                            @mouseenter="showChildren=true"
                            @mouseleave="showChildren=false">
                            <span>صفحات</span>
                            <span>
                                <img class="w-4 mr-1" src="attachment/image/chevron-down-login.png" alt="" />
                            </span>
                        </a>
                        <div
                            class="bg-white rounded-2xl shadow-md text-sm  opacity-[0.97] absolute top-auto left-0 xl:right-0 min-w-full w-56 z-30 mt-3"
                            x-show="showChildren"
                            x-transition:enter="transition ease duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease duration-300 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4"
                            @mouseenter="showChildren=true"
                            @mouseleave="showChildren=false"
                            style="display: none">
                            <div
                                class="bg-white rounded-2xl w-full relative z-10 py-2 px-2">
                                <ul class="list-reset">
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/404.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">404</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/aboute-me.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">درباره ما</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/blog.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">بلاگ</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/cart.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">سبد خرید</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/checkout.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">تسویه حساب</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/faq.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">سوالات متداول</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/login.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">ورود</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/verify.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">ارسال کد 4 رقمی</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/profile.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">پروفایل</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/search.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">جستجو محصول</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/single-product.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">صفحه محصول</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">دسته بندی</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative">
                                        <a
                                            href="../../../iranshop_dornica/category-index.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">دسته بندی تکی(نمونه لپ تاپ)</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--MOBILE NAVBAR-->
    <div class="navbar-menu relative z-50 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav
            class="fixed top-0 right-0 bottom-0 flex flex-col w-5/6 max-w-sm py-5 px-6 bg-white border-r overflow-y-auto">
            <div class="flex justify-center items-center mb-4">
                <a class="order-1" href="../../../iranshop_dornica/index .php">
                    <img class="w-32" src="" alt="" />
                </a>
            </div>
            <div>
                <ul class="space-y-3">
                    <li class="border-b">
                        <div class="mt-0 mb-3 text-center space-y-5">
                            <div>
                                <div
                                    class="md:flex justify-center align-middle lg:inline-block py-2 px-4 text-sm text-neutral-800 rounded-xl hover:text-neutral-700 hover:bg-red-100 transition">
                                    <a href="../../../iranshop_dornica/index .php">
                                        <img
                                            class="inline ml-1 w-5"
                                            src="attachment/image/shopping-cart.png"
                                            alt="" />سبد خرید</a>
                                </div>
                                <div
                                    class="md:flex justify-center align-middle lg:inline-block py-2 px-4 text-sm text-neutral-800 rounded-xl hover:text-neutral-700 hover:bg-red-100 transition">
                                    <a href="../../../iranshop_dornica/login-register.php"><img
                                            class="inline ml-1 w-5"
                                            src="attachment/image/user.png"
                                            alt="" />ورود | ثبت نام</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li
                        class="relative flex"
                        x-data="{showChildren:false}"
                        @click.away="showChildren=false">
                        <a
                            href="../../../iranshop_dornica/category-index.php"
                            class="flex justify-between items-center h-10 leading-10 text-sm opacity-90 px-3 cursor-pointer no-underline w-full hover:no-underline duration-100 mx-1 transition rounded-xl hover:bg-red-100"
                            @click.prevent="showChildren=!showChildren">
                            <span>پوشاک</span>
                            <span>
                                <img class="w-4 mr-1" src="attachment/image/chevron-down-login.png" alt="" />
                            </span>
                        </a>
                        <div
                            class="bg-white rounded-2xl shadow-lg border-1 border-gray-50 text-sm absolute top-full right-0 min-w-full w-56 z-30 mt-1"
                            x-show="showChildren"
                            x-transition:enter="transition ease duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease duration-300 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4"
                            style="display: none">
                            </span>
                            <div
                                class="bg-white rounded-2xl w-full relative z-10 py-2 px-2">
                                <ul class="list-reset">
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">مردانه</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">زنانه</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">بچگانه</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li
                        class="relative flex"
                        x-data="{showChildren:false}"
                        @click.away="showChildren=false">
                        <a
                            href="../../../iranshop_dornica/category-index.php"
                            class="flex justify-between items-center h-10 text-sm opacity-90 leading-10 px-3 cursor-pointer no-underline w-full hover:no-underline duration-100 mx-1 transition rounded-xl hover:bg-red-100"
                            @click.prevent="showChildren=!showChildren">
                            <span>کالای دیجیتال</span>
                            <span>
                                <img class="w-4 mr-1" src="attachment/image/chevron-down-login.png" alt="" />
                            </span>
                        </a>
                        <div
                            class="bg-white rounded-2xl shadow-lg border-1 border-gray-50 text-sm absolute top-full right-0 min-w-full w-56 z-30 mt-1"
                            x-show="showChildren"
                            x-transition:enter="transition ease duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease duration-300 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4"
                            style="display: none">
                            </span>
                            <div
                                class="bg-white rounded-2xl w-full relative z-10 py-2 px-2">
                                <ul class="list-reset">
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">لپ تاپ و کامپیوتر</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">موبایل</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">تبلت</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">وسایل جانبی</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li
                        class="relative flex"
                        x-data="{showChildren:false}"
                        @click.away="showChildren=false">
                        <a
                            href="../../../iranshop_dornica/category-index.php"
                            class="flex justify-between items-center h-10 text-sm opacity-90 leading-10 px-3 cursor-pointer no-underline w-full hover:no-underline duration-100 mx-1 transition rounded-xl hover:bg-red-100"
                            @click.prevent="showChildren=!showChildren">
                            <span>لوازم خانگی</span>
                            <span>
                                <img class="w-4 mr-1" src="attachment/image/chevron-down-login.png" alt="" />
                            </span>
                        </a>
                        <div
                            class="bg-white rounded-2xl shadow-lg border-1 border-gray-50 text-sm absolute top-full right-0 min-w-full w-56 z-30 mt-1"
                            x-show="showChildren"
                            x-transition:enter="transition ease duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease duration-300 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4"
                            style="display: none">
                            </span>
                            <div
                                class="bg-white rounded-2xl w-full relative z-10 py-2 px-2">
                                <ul class="list-reset">
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">یخچال و فریزر</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">ماشین لباسشویی</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">ماشین ظرف شویی</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">اجاق گاز</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">هود و سینک</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li
                        class="relative flex"
                        x-data="{showChildren:false}"
                        @click.away="showChildren=false">
                        <a
                            href="../../../iranshop_dornica/category-index.php"
                            class="flex justify-between items-center h-10 text-sm opacity-90 leading-10 px-3 cursor-pointer no-underline w-full hover:no-underline duration-100 mx-1 transition rounded-xl hover:bg-red-100"
                            @click.prevent="showChildren=!showChildren">
                            <span>زیبایی</span>
                            <span>
                                <img class="w-4 mr-1" src="attachment/image/chevron-down-login.png" alt="" />
                            </span>
                        </a>
                        <div
                            class="bg-white rounded-2xl shadow-lg border-1 border-gray-50 text-sm absolute top-full right-0 min-w-full w-56 z-30 mt-1"
                            x-show="showChildren"
                            x-transition:enter="transition ease duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease duration-300 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4"
                            style="display: none">
                            </span>
                            <div
                                class="bg-white rounded-2xl w-full relative z-10 py-2 px-2">
                                <ul class="list-reset">
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">لوازم آرایشی</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">عطر و ادکلن</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">لوازم بهداشتی</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li
                        class="relative flex"
                        x-data="{showChildren:false}"
                        @click.away="showChildren=false">
                        <a
                            href="../../../iranshop_dornica/category-index.php"
                            class="flex justify-between items-center h-10 text-sm opacity-90 leading-10 px-3 cursor-pointer no-underline w-full hover:no-underline duration-100 mx-1 transition rounded-xl hover:bg-red-100"
                            @click.prevent="showChildren=!showChildren">
                            <span>لوازم برقی</span>
                            <span>
                                <img class="w-4 mr-1" src="attachment/image/chevron-down-login.png" alt="" />
                            </span>
                        </a>
                        <div
                            class="bg-white rounded-2xl shadow-lg border-1 border-gray-50 text-sm absolute top-full right-0 min-w-full w-56 z-30 mt-1"
                            x-show="showChildren"
                            x-transition:enter="transition ease duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease duration-300 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4"
                            style="display: none">
                            </span>
                            <div
                                class="bg-white rounded-2xl w-full relative z-10 py-2 px-2">
                                <ul class="list-reset">
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">سشوار</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">اتو</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">ریش تراش</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">ساعت دیجیتال</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">هم زن و آبمیوه گیر</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">ترازو دیجیتال و چرخ کن</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li
                        class="relative flex"
                        x-data="{showChildren:false}"
                        @click.away="showChildren=false">
                        <a
                            href="../../../iranshop_dornica/category-index.php"
                            class="flex justify-between items-center h-10 text-sm opacity-90 leading-10 px-3 cursor-pointer no-underline w-full hover:no-underline duration-100 mx-1 transition rounded-xl hover:bg-red-100"
                            @click.prevent="showChildren=!showChildren">
                            <span>سوپر مارکت</span>
                            <span>
                                <img class="w-4 mr-1" src="attachment/image/chevron-down-login.png" alt="" />
                            </span>
                        </a>
                        <div
                            class="bg-white rounded-2xl shadow-lg border-1 border-gray-50 text-sm absolute top-full right-0 min-w-full w-56 z-30 mt-1"
                            x-show="showChildren"
                            x-transition:enter="transition ease duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease duration-300 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4"
                            style="display: none">
                            </span>
                            <div
                                class="bg-white rounded-2xl w-full relative z-10 py-2 px-2">
                                <ul class="list-reset">
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">صبحانه</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">تنقلات</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">خشکبار</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">حبوبات و کنسرو</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">میوه و سبزیجات</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">سوسیس و کالباس</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">گوشت</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">لبنیات</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li
                        class="relative flex"
                        x-data="{showChildren:false}"
                        @click.away="showChildren=false">
                        <a
                            href="../../../iranshop_dornica/category-index.php"
                            class="flex justify-between items-center h-10 text-sm opacity-90 leading-10 px-3 cursor-pointer no-underline w-full hover:no-underline duration-100 mx-1 transition rounded-xl hover:bg-red-100"
                            @click.prevent="showChildren=!showChildren">
                            <span>کودک و نوزاد</span>
                            <span>
                                <img class="w-4 mr-1" src="attachment/image/chevron-down-login.png" alt="" />
                            </span>
                        </a>
                        <div
                            class="bg-white rounded-2xl shadow-lg border-1 border-gray-50 text-sm absolute top-full right-0 min-w-full w-56 z-30 mt-1"
                            x-show="showChildren"
                            x-transition:enter="transition ease duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease duration-300 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4"
                            style="display: none">
                            </span>
                            <div
                                class="bg-white rounded-2xl w-full relative z-10 py-2 px-2">
                                <ul class="list-reset">
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">پوشک</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">بهداشت و حمام</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">سرگرمی و غذاخوری</span>
                                        </a>
                                    </li>
                                    <li
                                        class="relative"
                                        x-data="{showChildren:false}"
                                        @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a
                                            href="../../../iranshop_dornica/category.php"
                                            class="px-4 py-2 flex w-full items-start hover:bg-red-100 rounded-lg transition no-underline hover:no-underline duration-100 cursor-pointer">
                                            <span class="flex-1">کالای خواب</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- OPACITY SCREEN FOR SEARCH INPUT FOCUS -->
    <div class="absolute w-full h-screen bg-gray-200 opacity-40 z-40 hidden" id="opacitiScreen" onclick="closeScreen()">
    </div>
</div>