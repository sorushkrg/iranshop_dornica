<!doctype html>
<html lang="en" dir="rtl">


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:19:43 GMT -->
<head>

    <meta charset="utf-8" />
    <title>اعتبار سنجی فرم | لکسا - قالب مدیریت و داشبورد</title>
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
                            <h4>اعتبار سنجی فرم</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">لکسا</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">تشکیل می دهد</a></li>
                                <li class="breadcrumb-item active">اعتبار سنجی فرم</li>
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
                                <h4 class="card-title">اعتبار سنجی بوت استرپ - عادی</h4>
                                <p class="card-title-desc">با اعتبارسنجی فرم HTML5 که در همه مرورگرهای پشتیبانی شده ما موجود است، بازخورد ارزشمند و قابل اجرا را به کاربران خود ارائه دهید.</p>
                                <form class="needs-validation" novalidate>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">نام کوچک</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="نام کوچک" value="مارک" required>
                                                <div class="valid-feedback">
                                                    به نظر خوب میاد!
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom02">نام خانوادگی</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="نام خانوادگی" value="اوتو" required>
                                                <div class="valid-feedback">
                                                     به نظر خوب میاد!
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom03">شهر</label>
                                                <input type="text" class="form-control" id="validationCustom03" placeholder="شهر" required>
                                                <div class="invalid-feedback">
                                                     لطفا یک شهر معتبر ارائه دهید.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom04">حالت</label>
                                                <input type="text" class="form-control" id="validationCustom04" placeholder="حالت" required>
                                                <div class="invalid-feedback">
                                                    لطفاً یک وضعیت معتبر ارائه دهید.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom05">زیپ</label>
                                                <input type="text" class="form-control" id="validationCustom05" placeholder="زیپ" required>
                                                <div class="invalid-feedback">
                                                     لطفا یک فایل فشرده معتبر ارائه دهید.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="invalidCheck" required>
                                                    <label class="form-check-label" for="invalidCheck">با شرایط و ضوابط موافقت کنید</label>
                                                    <div class="invalid-feedback">
                                                        قبل از ارسال باید موافقت کنید.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                    <button class="btn btn-primary" type="submit">ارسال فرم</button>
                                </form>
                                <!-- end form -->
                            </div>
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">اعتبار سنجی بوت استرپ (نکات ابزار)</h4>
                                <p class="card-title-desc">اگر چیدمان فرم شما اجازه می دهد، می توانید آن را تعویض کنید <code>.{valid|invalid}-feedback</code>  کلاس ها برای <code>.{valid|invalid}-tooltip</code> کلاس هایی برای نمایش بازخورد اعتبار سنجی در یک راهنمای ابزار سبک.</p>
                                <form class="needs-validation" novalidate>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3 position-relative">
                                                <label class="form-label" for="validationTooltip01">نام کوچک</label>
                                                <input type="text" class="form-control" id="validationTooltip01" placeholder="نام کوچک" value="مارک" required>
                                                <div class="valid-tooltip">
                                                     به نظر خوب میاد!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3 position-relative">
                                                <label class="form-label" for="validationTooltip02">نام خانوادگی</label>
                                                <input type="text" class="form-control" id="validationTooltip02" placeholder="نام خانوادگی" value="اوتو" required>
                                                <div class="valid-tooltip">
                                                     به نظر خوب میاد!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3 position-relative">
                                                <label class="form-label" for="validationTooltipUsername">نام کاربری</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="نام کاربری" aria-describedby="validationTooltipUsernamePrepend" required>
                                                    <div class="invalid-tooltip">
                                                         لطفا یک نام کاربری منحصر به فرد و معتبر انتخاب کنید.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3 position-relative">
                                                <label class="form-label" for="validationTooltip03">شهر</label>
                                                <input type="text" class="form-control" id="validationTooltip03" placeholder="شهر" required>
                                                <div class="invalid-tooltip">
                                                    لطفا یک شهر معتبر ارائه دهید.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-md-6">
                                            <div class="mb-3 position-relative">
                                                <label class="form-label" for="validationTooltip04">حالت</label>
                                                <input type="text" class="form-control" id="validationTooltip04" placeholder="حالت" required>
                                                <div class="invalid-tooltip">
                                                     لطفاً یک وضعیت معتبر ارائه دهید.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                    <button class="btn btn-primary" type="submit">ارسال فرم</button>
                                </form>
                            </div>
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">نوع اعتبارسنجی</h4>
                                <p class="card-title-desc"> جعفری یک اعتبار سنجی فرم جاوا اسکریپت است
                                    کتابخانه این به شما کمک می کند تا بازخورد خود را در مورد فرم خود به کاربران خود ارائه دهید
                                    قبل از ارسال به سرور خود ارسال کنید.</p>

                                <form class="custom-validation" action="#">
                                    <div class="mb-3">
                                        <label class="form-label">ضروری</label>
                                        <input type="text" class="form-control" required placeholder="چیزی تایپ کنید"/>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">مساوی با</label>
                                        <div>
                                            <input type="password" id="pass2" class="form-control" required
                                                   placeholder="کلمه عبور"/>
                                        </div>
                                        <div class="mt-2">
                                            <input type="password" class="form-control" required
                                                   data-parsley-equalto="#pass2"
                                                   placeholder="رمز عبور را دوباره تایپ کنید"/>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">پست الکترونیک</label>
                                        <div>
                                            <input type="email" class="form-control" required
                                                   parsley-type="email" placeholder="ایمیل خود را وارد کنید"/>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">آدرس اینترنتی</label>
                                        <div>
                                            <input type="url" class="form-control" required value="آدرس اینترنتی"/>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">ارقام</label>
                                        <div>
                                            <input data-parsley-type="digits" type="text"
                                                   class="form-control" required
                                                   placeholder="فقط ارقام را وارد کنید"/>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">عدد</label>
                                        <div>
                                            <input data-parsley-type="number" type="text"
                                                   class="form-control" required
                                                   placeholder="فقط اعداد را وارد کنید"/>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">الفبایی</label>
                                        <div>
                                            <input data-parsley-type="alphanum" type="text"
                                                   class="form-control" required
                                                   placeholder="مقدار الفبایی را وارد کنید"/>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">ناحیه متنی</label>
                                        <div>
                                            <textarea required class="form-control" placeholder="اینجا تایپ کنید" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                ارسال
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect">
                                                لغو کنید
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- end form -->
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">اعتبار سنجی محدوده</h4>
                                    <p class="card-title-desc">جعفری یک اعتبار سنجی فرم جاوا اسکریپت است
                                        کتابخانه این به شما کمک می کند تا بازخورد خود را در مورد فرم خود به کاربران خود ارائه دهید
                                        قبل از ارسال به سرور خود ارسال کنید.</p>

                                <form action="#" class="custom-validation">

                                    <div class="mb-3">
                                        <label class="form-label">حداقل طول</label>
                                        <div>
                                            <input type="text" class="form-control" required
                                                   data-parsley-minlength="6" placeholder="حداقل 6 کاراکتر"/>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">بیشترین طول</label>
                                        <div>
                                            <input type="text" class="form-control" required
                                                   data-parsley-maxlength="6" placeholder="حداکثر 6 کاراکتر"/>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">طول برد</label>
                                        <div>
                                            <input type="text" class="form-control" required
                                                   data-parsley-length="[5,10]"
                                                   placeholder="متن بین 5 تا 10 کاراکتر"/>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">حداقل مقدار</label>
                                        <div>
                                            <input type="text" class="form-control" required
                                                   data-parsley-min="6" placeholder="حداقل مقدار 6 است"/>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">حداکثر ارزش</label>
                                        <div>
                                            <input type="text" class="form-control" required
                                                   data-parsley-max="6" placeholder="حداکثر مقدار 6 است"/>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">مقدار محدوده</label>
                                        <div>
                                            <input class="form-control" required type="text" min="6"
                                                   max="100" placeholder="تعداد بین 6 تا 100"/>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">انقضای منظم</label>
                                        <div>
                                            <input type="text" class="form-control" required
                                                   data-parsley-pattern="#[A-Fa-f0-9]{6}"
                                                   placeholder="هگز. رنگ"/>
                                        </div>
                                    </div>

                                    <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                ارسال
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect">
                                                لغو کنید
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- end form -->
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>

    <?php require_once "layout/footer.php" ?>
    <!-- end main content-->

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

<script src="assets/libs/parsleyjs/parsley.min.js"></script>

<script src="assets/js/pages/form-validation.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
</body>


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:19:43 GMT -->
</html>