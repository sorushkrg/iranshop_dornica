<!doctype html>
<html lang="en" dir="rtl">


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/form-xeditable.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:19:47 GMT -->
<head>

    <meta charset="utf-8" />
    <title>فرم قابل ویرایش | لکسا - قالب مدیریت و داشبورد</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Plugins css -->
    <link href="assets/libs/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />

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
                            <h4>فرم قابل ویرایش</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">لکسا</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">تشکیل می دهد</a></li>
                                <li class="breadcrumb-item active">فرم قابل ویرایش</li>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">مثال درون خطی</h4>
                                <p class="card-title-desc">این کتابخانه به شما اجازه ایجاد می دهد
                                    عناصر قابل ویرایش در صفحه شما با هر موتوری قابل استفاده است
                                    (فقط بوت استرپ، jquery-ui، jquery) و شامل پاپ آپ و درون خطی است
                                    حالت ها. لطفاً نسخه ی نمایشی را امتحان کنید تا ببینید چگونه کار می کند.</p>

                                <div class="table-responsive">
                                    <table class="table table-striped table-nowrap mb-0">
                                        <thead>
                                        <tr>
                                            <th style="width: 50%;">درون خطی</th>
                                            <th>مثال ها</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>فیلد متنی ساده</td>
                                            <td>
                                                <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="نام کاربری را وارد کنید">ابر کاربر</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>فیلد متن خالی، لازم است</td>
                                            <td>
                                                <a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="ضروری" data-title="Enter your firstname">خالی</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>انتخاب، آرایه محلی، نمایش سفارشی</td>
                                            <td>
                                                <a href="#" id="inline-sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>ترکیب کردن</td>
                                            <td>
                                                <a href="#" id="inline-dob" data-type="combodate" data-value="1398-09-24" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>ناحیه متنی، دکمه های زیر. با ctrl+enter ارسال کنید</td>
                                            <td>
                                                <a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="نظرات شما اینجا..." data-title="Enter comments">کاربر عالی!</a>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

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

<!-- Plugins js -->
<script src="assets/libs/moment/min/moment.min.js"></script>
<script src="assets/libs/bootstrap-editable/js/index.js"></script>

<!-- Init js-->
<script src="assets/js/pages/form-xeditable.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
</body>


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/form-xeditable.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:19:47 GMT -->
</html>