<!doctype html>
<html lang="en" dir="rtl">


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/pages-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:20:04 GMT -->
<head>

    <meta charset="utf-8" />
    <title>فاکتور | لکسا - قالب مدیریت و داشبورد</title>
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
                            <h4>صورتحساب</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">لکسا</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">صفحات</a></li>
                                <li class="breadcrumb-item active">صورتحساب</li>
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
                                <div class="info">همچنین فروخته می شود 1230</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="invoice-title">
                                            <h4 class="float-end font-size-16"><strong>سفارش # 12345</strong></h4>
                                            <h3>
                                                <img src="assets/images/logo-dark.png" alt="logo" height="24"/>
                                            </h3>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <address>
                                                    <strong>صورت حساب داده شده برای:</strong><br>
                                                     جان اسمیت<br>
                                                    1234 خیابان اصلی<br>
                                                    Apt. 4B<br>
                                                    حیابان اسپرینگ, کوجه 54321
                                                </address>
                                            </div>
                                            <div class="col-6 text-end">
                                                <address>
                                                    <strong>فرستاده شده به:</strong><br>
                                                    کنی ریگدون<br>
                                                    1234 خیابان اصلی<br>
                                                    Apt. 4B<br>
                                                    یابان اسپرینگ, کوجه 54321
                                                </address>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 mt-4">
                                                <address>
                                                    <strong>روش پرداخت:</strong><br>
                                                    Visa ending **** 4242<br>
                                                    jsmith@email.com
                                                </address>
                                            </div>
                                            <div class="col-6 mt-4 text-end">
                                                <address>
                                                    <strong>تاریخ سفارش:</strong><br>
                                                    1398/3/5<br><br>
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div>
                                            <div class="p-2">
                                                <h3 class="font-size-16"><strong>خلاصه سفارش</strong></h3>
                                            </div>
                                            <div class="">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <td><strong>از نو</strong></td>
                                                            <td class="text-center"><strong>قیمت</strong></td>
                                                            <td class="text-center"><strong>تعداد</strong>
                                                            </td>
                                                            <td class="text-end"><strong>جمع کل</strong></td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <!-- foreach ( order->lineItems as $line) or some such thing here -->
                                                        <tr>
                                                            <td>BS-200</td>
                                                            <td class="text-center"> 10.99 تومان  </td>
                                                            <td class="text-center">1</td>
                                                            <td class="text-end"> 10.99 تومان </td>
                                                        </tr>
                                                        <tr>
                                                            <td>BS-400</td>
                                                            <td class="text-center"> 20.00</td>
                                                            <td class="text-center">3</td>
                                                            <td class="text-end"> 60.00 تومان </td>
                                                        </tr>
                                                        <tr>
                                                            <td>BS-1000</td>
                                                            <td class="text-center"> 600.00 تومان </td>
                                                            <td class="text-center">1</td>
                                                            <td class="text-end"> 600.00 تومان </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="thick-line"></td>
                                                            <td class="thick-line"></td>
                                                            <td class="thick-line text-center">
                                                                    <strong>جمع فرعی</strong></td>
                                                            <td class="thick-line text-end"> 670.99 تومان </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line text-center">
                                                                    <strong>حمل دریایی</strong></td>
                                                            <td class="no-line text-end"> 15 تومان </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line text-center">
                                                                    <strong>جمع</strong></td>
                                                            <td class="no-line text-end">
                                                                <h4 class="m-0"> 685.99 تومان </h4></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="d-print-none">
                                                    <div class="float-end">
                                                        <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-2"><i class="fa fa-print"></i></a>
                                                        <a href="#" class="btn btn-primary waves-effect waves-light">ارسال</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- end row -->

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

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


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/pages-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:20:04 GMT -->
</html>