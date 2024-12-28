<!doctype html>
<html lang="en" dir="rtl">


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/ui-alerts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:19:37 GMT -->
<head>

    <meta charset="utf-8" />
    <title>هشدارها | لکسا - قالب مدیریت و داشبورد</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap-rtl.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app-rtl.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Font Vazir-->
    <link href="assets/css/font-vzir.css" rel="stylesheet" type="text/css"/>
    <link href="assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

<?php require_once "layout/header.php" ?>
    <!-- ========== Left Sidebar Start ========== -->
    <?php require_once "layout/sideBar.php" ?>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="page-title-box">
                            <h4>هشدارها</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">لکسا</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">عناصر رابط کاربری</a></li>
                                <li class="breadcrumb-item active">هشدار</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="state-information d-none d-sm-block">
                            <div class="state-graph">
                                <div id="header-chart-1"></div>
                                <div class="info">تعادل  2,317 تومان </div>
                            </div>
                            <div class="state-graph">
                                <div id="header-chart-2"></div>
                                <div class="info">مورد فروخته شده 1230</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">مثال ها</h4>
                                <p class="card-title-desc">هشدارها برای هر طول متن و همچنین یک دکمه رد اختیاری در دسترس هستند. برای استایل مناسب، از یکی از چهار مورد استفاده کنید <strong>ضروری</strong> کلاس های متنی(e.g., <code class="highlighter-rouge">.alert-success</code>). برای اخراج درون خطی، از افزونه هشدار جیکوئری  استفاده کنید.</p>

                                <div class="">
                                    <div class="alert alert-success" role="alert">
                                        <strong>آفرین!</strong>  شما با موفقیت این پیام هشدار مهم را خواندید.
                                    </div>
                                    <div class="alert alert-info" role="alert">
                                        <strong>سر بالا!</strong> این هشدار به توجه شما نیاز دارد، اما خیلی مهم نیست.
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        <strong>هشدار!</strong> بهتر است خودتان را بررسی کنید، خیلی خوب به نظر نمی رسید.
                                    </div>
                                    <div class="alert alert-danger mb-0" role="alert">
                                        <strong>آه ضربه محکم و ناگهانی!</strong> چند مورد را تغییر دهید و دوباره ارسال کنید.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">رنگ پیوند</h4>
                                <p class="card-title-desc">استفاده کنید<code class="highlighter-rouge">.alert-link</code> کلاس ابزار برای ارائه سریع پیوندهای رنگی مطابق با هر هشدار.</p>

                                <div class="">
                                    <div class="alert alert-success" role="alert">
                                        <strong>آفرین!</strong> با موفقیت خواندی <a href="#" class="alert-link">این پیام هشدار مهم</a>.
                                    </div>
                                    <div class="alert alert-info" role="alert">
                                        <strong>سر به بالا!</strong> این <a href="#" class="alert-link">نیازهای هشدار
                                        توجه شما</a>, اما خیلی مهم نیست
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        <strong>هشدار!</strong> بهتر است خودتان را بررسی کنید، شما هستید<a href="#" class="alert-link">خیلی خوب به نظر نمی رسد</a>.
                                    </div>
                                    <div class="alert alert-danger mb-0" role="alert">
                                        <strong>آه ضربه محکم و ناگهانی!</strong> <a href="#" class="alert-link">چند چیز را تغییر دهید
                                        بالا</a> و دوباره ارسال کنید.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">رد کردن</h4>
                                <p class="card-title-desc">
                                    یک دکمه رد کردن و <code>.alert-dismissible</code>  کلاس، که بالشتک اضافی اضافه می کند
                                     در سمت راست هشدار و موقعیت<code>.btn-close</code> دکمه.
                                </p>

                                <div class="">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        </button>
                                        <strong>آفرین!</strong> شما با موفقیت این پیام هشدار مهم را خواندید.
                                    </div>
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        </button>
                                        <strong>سر بالا!</strong> این هشدار به توجه شما نیاز دارد، اما خیلی مهم نیست.
                                    </div>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        </button>
                                        <strong>هشدار!</strong> بهتر است خودتان را بررسی کنید، خیلی خوب به نظر نمی رسید.
                                    </div>
                                    <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        </button>
                                        <strong>آه ضربه محکم و ناگهانی!</strong> چند مورد را تغییر دهید و دوباره ارسال کنید.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">مطالب اضافی</h4>
                                <p class="card-title-desc">هشدارها همچنین می توانند حاوی عناصر HTML اضافی مانند سرفصل ها و پاراگراف ها باشند.</p>

                                <div class="">
                                    <div class="alert alert-success mb-0" role="alert">
                                        <h4 class="alert-heading font-size-18">آفرین!</h4>
                                        <p>اوه، بله، شما با موفقیت این پیام هشدار مهم را خواندید. این متن نمونه قرار است کمی طولانی‌تر اجرا شود تا بتوانید ببینید که فاصله‌گذاری در یک هشدار با این نوع محتوا چگونه کار می‌کند.</p>
                                        <p class="mb-0">هر زمان که نیاز داشتید، حتما از ابزارهای حاشیه استفاده کنید تا همه چیز را زیبا و مرتب نگه دارید.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">مثال ها</h4>
                                <p class="card-title-desc">هشدارها برای هر طول متن و همچنین یک دکمه رد اختیاری در دسترس هستند. برای استایل مناسب، از یکی از چهار مورد استفاده کنید<strong>ضروری</strong> کلاس های متنی (e.g., <code class="highlighter-rouge"> .alert-success .bg-**</code>). برای اخراج درون خطی، از افزونه هشدار جیکوئری استفاده کنید.</p>

                                <div class="">
                                    <div class="alert alert-success bg-success text-white" role="alert">
                                        <strong>آفرین!</strong> شما با موفقیت این پیام هشدار مهم را خواندید.
                                    </div>
                                    <div class="alert alert-info bg-info text-white" role="alert">
                                        <strong>سر بالا!</strong> این هشدار به توجه شما نیاز دارد، اما خیلی مهم نیست.
                                    </div>
                                    <div class="alert alert-warning bg-warning text-white" role="alert">
                                        <strong>هشدار!</strong> بهتر است خودتان را بررسی کنید، خیلی خوب به نظر نمی رسید.
                                    </div>
                                    <div class="alert alert-danger bg-danger text-white mb-0" role="alert">
                                        <strong>آه ضربه محکم و ناگهانی!</strong> چند مورد را تغییر دهید و دوباره ارسال کنید.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->
    <?php require_once "layout/footer.php" ?>
</div>
<!-- END layout-wrapper -->
<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

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


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/ui-alerts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:19:37 GMT -->
</html>