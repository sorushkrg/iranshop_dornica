<!doctype html>
<html lang="en" dir="rtl">


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:19:42 GMT -->
<head>

    <meta charset="utf-8" />
    <title>عناصر فرم | لکسا - قالب مدیریت و داشبورد</title>
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
    <link rel="stylesheet" href="assets/jalalidatepicker/jalalidatepicker.min.css">
    <script type="text/javascript" src="assets/jalalidatepicker/jalalidatepicker.min.js"></script>

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
                            <h4>عناصر فرم</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">لکسا</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">تشکیل می دهد</a></li>
                                <li class="breadcrumb-item active">عناصر فرم</li>
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

                                <h4 class="card-title">ورودی های متنی</h4>
                                <p class="card-title-desc">در اینجا نمونه هایی از <code class="highlighter-rouge">.form-control</code> برای هر HTML5 متنی اعمال می شود<code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.</p>

                                <div class="mb-3 row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">متن</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" value="کلم پیچ دستی" id="example-text-input">
                                    </div>
                                </div><!-- end row -->
                                <div class="mb-3 row">
                                    <label for="example-search-input" class="col-md-2 col-form-label">جستجو کردن</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="search" value="چگونه از وب عکس بگیرم" id="example-search-input">
                                    </div>
                                </div><!-- end row -->
                                <div class="mb-3 row">
                                    <label for="example-email-input" class="col-md-2 col-form-label">پست الکترونیک</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                                    </div>
                                </div><!-- end row -->
                                <div class="mb-3 row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">آدرس اینترنتی</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                                    </div>
                                </div><!-- end row -->
                                <div class="mb-3 row">
                                    <label for="example-tel-input" class="col-md-2 col-form-label">تلفن</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                                    </div>
                                </div><!-- end row -->
                                <div class="mb-3 row">
                                    <label for="example-password-input" class="col-md-2 col-form-label">کلمه عبور</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="password" value="hunter2" id="example-password-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="example-number-input" class="col-md-2 col-form-label">عدد</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="number" value="42" id="example-number-input">
                                    </div>
                                </div><!-- end row -->
                                <div class="mb-3 row">
                                    <label  class="col-md-2 col-form-label">تاریخ و زمان</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" data-jdp data-jdp-min-date="today" placeholder="01:45,02/03/1402 عصر">
                                    </div>
                                </div><!-- end row -->
                                <div class="mb-3 row">
                                    <label for="example-date-input" class="col-md-2 col-form-label">تاریخ</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" data-jdp data-jdp-min-date="today" id="example-date-input" placeholder="02/03/1402">
                                    </div>
                                </div><!-- end row -->
                                <div class="mb-3 row">
                                    <label for="example-month-input" class="col-md-2 col-form-label">ماه</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" data-jdp data-jdp-min-date="today" id="example-month-input" placeholder="فروردین 1402">
                                    </div>
                                </div><!-- end row -->
                                <div class="mb-3 row">
                                    <label for="example-week-input" class="col-md-2 col-form-label">هفته</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" data-jdp data-jdp-min-date="today" id="example-week-input" placeholder="هفته 1402,10">
                                    </div>
                                </div><!-- end row -->
                                <div class="mb-3 row">
                                    <label for="example-time-input" class="col-md-2 col-form-label">زمان</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" data-jdp data-jdp-min-date="today" id="example-time-input" placeholder="01:45 عصر">
                                    </div>
                                </div><!-- end row -->
                                <div class="mb-3 row">
                                    <label for="example-color-input" class="col-md-2 col-form-label">رنگ</label>
                                    <div class="col-md-10">
                                        <input class="form-control form-control-color w-100" type="color" value="#7a6fbe"
                                               id="example-color-input">
                                    </div>
                                </div><!-- end row -->
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label">انتخاب کنید</label>
                                    <div class="col-md-10">
                                        <select class="form-control">
                                            <option>انتخاب کنید</option>
                                            <option>انتخاب بزرگ</option>
                                            <option>انتخاب کوچک</option>
                                        </select>
                                    </div>
                                </div><!-- end row -->
                                <div class="mb-3 row">
                                    <label for="example-text-input-lg" class="col-md-2 col-form-label">بزرگ</label>
                                    <div class="col-md-10">
                                        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="example-text-input-lg">
                                    </div>
                                </div> <!-- end row -->
                                <div class="mb-3 row mb-0">
                                    <label for="example-text-input-sm" class="col-md-2 col-form-label">کم اهمیت</label>
                                    <div class="col-md-10">
                                        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="example-text-input-sm">
                                    </div>
                                </div> <!-- end row -->
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">طرح بندی فرم ها</h4>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="mt-4">
                                            <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> گروه ها را تشکیل دهید</h5>
                                            <form>
                                                <div class="mb-3">
                                                    <label class="form-label" for="formrow-firstname-input">نام کوچک</label>
                                                    <input type="text" class="form-control" id="formrow-firstname-input" placeholder="نام خود را وارد نمایید">
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-email-input">پست الکترونیک</label>
                                                            <input type="email" class="form-control" id="formrow-email-input" placeholder="ایمیل خود را وارد کنید">
                                                        </div>
                                                    </div> <!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="formrow-password-input">کلمه عبور</label>
                                                            <input type="password" class="form-control" id="formrow-password-input" placeholder="رمز عبور خود را وارد کنید">
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="formrow-customCheck">
                                                        <label class="form-check-label" for="formrow-customCheck">من را بررسی کنید</label>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <button type="submit" class="btn btn-primary w-md">ارسال</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div> <!-- end col -->
                                    <div class="col-lg-6 ms-lg-auto">
                                        <div class="mt-5 mt-lg-4">
                                            <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> فرم افقی</h5>

                                            <form>
                                                <div class="row mb-4">
                                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">نام کوچک</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="نام خود را وارد نمایید">
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">پست الکترونیک</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" class="form-control" id="horizontal-email-input" placeholder="ایمیل خود را وارد کنید">
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">کلمه عبور</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" class="form-control" id="horizontal-password-input" placeholder="رمز عبور خود را وارد کنید">
                                                    </div>
                                                </div>

                                                <div class="row justify-content-end">
                                                    <div class="col-sm-9">
                                                        <div class="form-check mb-4">
                                                            <input type="checkbox" class="form-check-input" id="horizontal-customCheck">
                                                            <label class="form-check-label" for="horizontal-customCheck">مرا به خاطر بسپار</label>
                                                        </div>

                                                        <div>
                                                            <button type="submit" class="btn btn-primary w-md">ارسال</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="mt-4">
                                    <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> فرم های درون خطی چیدمان</h5>

                                    <form class="row gx-3 gy-2 align-items-center">
                                        <div class="col-sm-2">
                                            <label class="visually-hidden" for="specificSizeInputName">نام</label>
                                            <input type="text" class="form-control" id="specificSizeInputName" placeholder="نام را وارد کنید">
                                        </div> <!-- end col -->
                                        <div class="col-sm-2">
                                            <label class="visually-hidden" for="specificSizeInputGroupUsername">نام کاربری</label>
                                            <div class="input-group">
                                                <div class="input-group-text">@</div>
                                                <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="نام کاربری">
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-auto">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                                                <label class="form-check-label" for="autoSizingCheck2">
                                                    مرا به خاطر بسپار
                                                </label>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-primary">ارسال</button>
                                        </div> <!-- end col -->
                                    </form><!-- end form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Form Layout -->

                <!-- Start Form Sizing -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-5">
                            <div class="card-body">
                                <h4 class="card-title">سایز بندی</h4>
                                <p class="card-title-desc">تنظیم ارتفاع با استفاده از کلاس هایی مانند <code>.form-control-lg</code> و <code>.form-control-sm</code>.</p>

                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="default-input">ورودی پیش فرض</label>
                                                <input class="form-control" type="text" id="default-input" placeholder="ورودی پیش فرض">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3 mt-3">
                                                <label class="form-label" for="form-sm-input">فرم ورودی کوچک</label>
                                                <input class="form-control form-control-sm" type="text" id="form-sm-input" placeholder=".form-control-sm">
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-6">
                                            <div class="mt-3 mb-0">
                                                <label class="form-label" for="form-lg-input">فرم ورودی بزرگ</label>
                                                <input class="form-control form-control-lg" type="text" id="form-lg-input" placeholder=".form-control-lg">
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </form> <!-- end form -->
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- End Form Sizing -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">چک باکس ها</h4>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div>
                                            <h5 class="font-size-14 mb-4">
                                                <i class="mdi mdi-arrow-right text-primary me-1"></i> چک باکس های فرم
                                            </h5>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheck1">
                                                <label class="form-check-label" for="formCheck1">
                                                     چک باکس فرم
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="formCheck2" checked>
                                                <label class="form-check-label" for="formCheck2">
                                                     چک باکس فرم علامت زده شد
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-6 ms-auto">
                                        <div class="mt-4 mt-md-0">
                                            <h5 class="font-size-14 mb-4"><i
                                                    class="mdi mdi-arrow-right text-primary me-1"></i> چک باکس های فرم
                                                درست</h5>
                                            <div>
                                                <div class="form-check form-check-right mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheckRight1">
                                                    <label class="form-check-label" for="formCheckRight1">
                                                        فرم چک باکس سمت راست
                                                    </label>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-check form-check-right">
                                                    <input class="form-check-input" type="checkbox" id="formCheckRight2"
                                                           checked>
                                                    <label class="form-check-label" for="formCheckRight2">
                                                        کادر چک فرم سمت راست علامت زده شد
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div><!-- end row -->
                            </div>
                        </div>
                    </div><!-- end col -->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">رادیوها</h4>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div>
                                            <h5 class="font-size-14 mb-4"> <i class="mdi mdi-arrow-right text-primary me-1"></i>رادیوها را تشکیل دهید</h5>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="formRadios"
                                                       id="formRadios1" checked>
                                                <label class="form-check-label" for="formRadios1">
                                                     رادیو فرم
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="formRadios"
                                                       id="formRadios2">
                                                <label class="form-check-label" for="formRadios2">
                                                     رادیو فرم بررسی شد
                                                </label>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                    <div class="col-md-6 ms-auto">
                                        <div class="mt-4 mt-lg-0">
                                            <h5 class="font-size-14 mb-4"> <i class="mdi mdi-arrow-right text-primary me-1"></i>رادیوها را درست فرم دهید</h5>
                                            <div>
                                                <div class="form-check form-check-right mb-3">
                                                    <input class="form-check-input" type="radio" name="formRadiosRight"
                                                           id="formRadiosRight1" checked>
                                                    <label class="form-check-label" for="formRadiosRight1">
                                                        رادیو را راست فرم دهید
                                                    </label>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="form-check form-check-right">
                                                    <input class="form-check-input" type="radio" name="formRadiosRight"
                                                           id="formRadiosRight2">
                                                    <label class="form-check-label" for="formRadiosRight2">
                                                        رادیو را راست فرم دهید علامت زده شد
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </div> <!-- end row -->
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">سوئیچ ها</h4>
                                <p class="card-title-desc">یک سوئیچ دارای نشانه گذاری یک چک باکس سفارشی است اما از آن استفاده می کند<code>.custom-switch</code> کلاس برای رندر کردن یک سوئیچ. سوئیچ ها نیز پشتیبانی می کنند <code>disabled</code> attribute.</p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div>
                                            <h5 class="font-size-14 mb-3"> <i class="mdi mdi-arrow-right text-primary me-1"></i>نمونه ها را تغییر دهید</h5>


                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" id="customSwitch1" checked>
                                                <label class="form-check-label" for="customSwitch1">این عنصر سوئیچ را تغییر دهید</label>
                                            </div>
                                            <div class="form-check form-switch" dir="ltr">
                                                <input type="checkbox" class="form-check-input" disabled id="customSwitch2">
                                                <label class="form-check-label" for="customSwitch2">عنصر سوئیچ غیرفعال شده است</label>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-md-6">
                                        <div class="mt-4 mt-md-0">
                                            <h5 class="font-size-14 mb-3"> <i class="mdi mdi-arrow-right text-primary me-1"></i>اندازه های سوئیچ</h5>

                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" id="customSwitchsizesm" checked>
                                                <label class="form-check-label" for="customSwitchsizesm">سوئیچ سایز کوچک</label>
                                            </div>

                                            <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" id="customSwitchsizemd">
                                                <label class="form-check-label" for="customSwitchsizemd">سوئیچ سایز متوسط</label>
                                            </div>

                                            <div class="form-check form-switch form-switch-lg mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" id="customSwitchsizelg" checked>
                                                <label class="form-check-label" for="customSwitchsizelg">سوئیچ سایز بزرگ</label>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div> <!-- end cardbody -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div><!-- end row -->



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
<script>
    $(document).ready(function() {
        jalaliDatepicker.startWatch({
            minDate: "attr",
            maxDate: "attr",
            time:true,
            // date:false
        });
        /* Below is a js demo | you don't need to use */
        setTimeout(function(){
            var elm=document.getElementById('input[data-jdp-min-date="today"]')[0];
            elm.focus();
            jalaliDatepicker.hide();
            jalaliDatepicker.show(elm);
        }, 1000);
    });
</script>
</body>


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:19:42 GMT -->
</html>