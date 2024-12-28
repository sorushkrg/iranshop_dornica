<!doctype html>
<html lang="en" dir="rtl">


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/ui-buttons.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:19:37 GMT -->
<head>

    <meta charset="utf-8" />
    <title>دکمه ها | لکسا - قالب مدیریت و داشبورد</title>
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
                            <h4>دکمه ها</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">لکسا</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">عناصر رابط کاربری</a></li>
                                <li class="breadcrumb-item active">دکمه ها</li>
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
                                <p class="card-title-desc">بوت استرپ شامل شش سبک دکمه از پیش تعریف شده است که هر کدام هدف معنایی خود را انجام می دهند.</p>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-primary waves-effect waves-light">اولیه</button>

                                    <button type="button" class="btn btn-secondary waves-effect">ثانوی</button>

                                    <button type="button" class="btn btn-success waves-effect waves-light">موفقیت</button>

                                    <button type="button" class="btn btn-info waves-effect waves-light">اطلاعات</button>

                                    <button type="button" class="btn btn-warning waves-effect waves-light">هشدار</button>

                                    <button type="button" class="btn btn-danger waves-effect waves-light">خطر</button>

                                    <button type="button" class="btn btn-dark waves-effect waves-light">تاریک</button>

                                    <button type="button" class="btn btn-link waves-effect">ارتباط دادن</button>

                                    <button type="button" class="btn btn-light waves-effect">سبک</button>

                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">دکمه های طرح کلی</h4>
                                <p class="card-title-desc">کلاس های اصلاح کننده پیش فرض را با the جایگزین کنید<code class="highlighter-rouge">.btn-outline-*</code> برای حذف تمام تصاویر پس زمینه و رنگ ها در هر دکمه.</p>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-outline-primary waves-effect waves-light">اولیه</button>
                                    <button type="button" class="btn btn-outline-secondary waves-effect">ثانوی</button>
                                    <button type="button" class="btn btn-outline-success waves-effect waves-light">موفقیت</button>
                                    <button type="button" class="btn btn-outline-info waves-effect waves-light">اطلاعات</button>
                                    <button type="button" class="btn btn-outline-warning waves-effect waves-light">هشدار</button>
                                    <button type="button" class="btn btn-outline-danger waves-effect waves-light">خطر</button>
                                    <button type="button" class="btn btn-outline-dark waves-effect waves-light">تاریک</button>
                                    <button type="button" class="btn btn-outline-light text-white waves-effect">سبک</button>
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div><!-- end col-->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">برچسب های دکمه</h4>
                                <p class="card-title-desc">این <code class="highlighter-rouge">.btn</code> کلاس ها برای استفاده با <code class="highlighter-rouge">&lt;button&gt;</code> عنصر با این حال، می توانید از این کلاس ها نیز استفاده کنید<code class="highlighter-rouge">&lt;a&gt;</code>  یا <code class="highlighter-rouge">&lt;input&gt;</code> عناصر (اگرچه برخی از مرورگرها ممکن است رندر کمی متفاوت اعمال کنند).</p>

                                <div class="button-items">
                                    <a class="btn btn-primary waves-effect waves-light" href="#" role="button">ارتباط دادن</a>
                                    <button class="btn btn-success waves-effect waves-light" type="submit">دکمه</button>
                                    <input class="btn btn-info" type="button" value="ورودی">
                                    <input class="btn btn-danger" type="submit" value="ارسال">
                                    <input class="btn btn-warning" type="reset" value="بازنشانی کنید">
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">اندازه ها</h4>
                                <p class="card-title-desc">دکمه های بزرگتر یا کوچکتر را دوست دارید؟ اضافه کردن
                                    <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> برای اندازه های اضافی
                                </p>

                                <div class="d-flex flex-wrap gap-2 align-items-center">
                                    <button type="button" class="btn btn-primary btn-lg waves-effect waves-light">دکمه بزرگ</button>
                                    <button type="button" class="btn btn-secondary btn-lg waves-effect">دکمه بزرگ</button>
                                    <button type="button" class="btn btn-info btn-sm waves-effect waves-light">دکمه کوچک</button>
                                    <button type="button" class="btn btn-secondary btn-sm waves-effect">دکمه کوچک</button>
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">دکمه های بلوک</h4>
                                <p class="card-title-desc">با افزودن، دکمه‌های سطح بلوک را ایجاد کنید - دکمه‌هایی که تمام عرض یک والد را پوشش می‌دهند <code class="highlighter-rouge">.d-grid</code>.</p>

                                <div class="button-items">
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-primary btn-lg waves-effect waves-light">دکمه سطح بلوک</button>
                                    </div>
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-secondary btn-sm waves-effect">دکمه سطح بلوک</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">وضعیت ها را تغییر دهید</h4>
                                <p class="card-title-desc">Add <code class="highlighter-rouge">data-toggle="button"</code> برای تغییر دادن یک دکمه<code class="highlighter-rouge">active</code>  حالت. اگر از قبل دکمه ای را تغییر می دهید، باید آن را به صورت دستی اضافه کنید<code class="highlighter-rouge">.active</code> کلاس
                                    <strong>and</strong> <code class="highlighter-rouge">aria-pressed="true"</code> به
                                    <code class="highlighter-rouge">&lt;button&gt;</code>.
                                </p>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="button" aria-pressed="false">
                                         ضامن تکی
                                    </button>
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">دکمه های چک باکس</h4>
                                <p class="card-title-desc">بوت استرپ<code class="highlighter-rouge">.button</code> سبک ها را می توان برای عناصر دیگر اعمال کرد، مانند <code class="highlighter-rouge">
                                    &lt;label&gt;</code>s، برای ارائه چک باکس یا تغییر دکمه سبک رادیویی. اضافه کردن <code class="highlighter-rouge">data-toggle="buttons"</code> به a
                                    <code class="highlighter-rouge">.btn-group</code> شامل آن دکمه های اصلاح شده برای فعال کردن تغییر در سبک های مربوطه می شود.</p>

                                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" checked>
                                    <label class="btn btn-secondary" for="btncheck1">چک باکس 1</label>

                                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                    <label class="btn btn-secondary" for="btncheck2">چک باکس 2</label>

                                    <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                    <label class="btn btn-secondary" for="btncheck3">چک باکس 3</label>
                                </div>

                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">دکمه های رادیویی</h4>
                                <p class="card-title-desc">بوت استرپ <code class="highlighter-rouge">.button</code> سبک ها را می توان برای عناصر دیگر اعمال کرد، مانند<code class="highlighter-rouge">
                                    &lt;label&gt;</code>s، برای ارائه چک باکس یا تغییر دکمه سبک رادیویی. اضافه کردن <code class="highlighter-rouge">data-toggle="buttons"</code> به a
                                    <code class="highlighter-rouge">.btn-group</code> شامل آن دکمه های اصلاح شده برای فعال کردن تغییر در سبک های مربوطه می شود.</p>

                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                    <label class="btn btn-primary" for="btnradio1">فعال</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                    <label class="btn btn-primary" for="btnradio2">رادیو </label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                    <label class="btn btn-primary" for="btnradio3">رادیو </label>
                                </div>

                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">گروه دکمه</h4>
                                <p class="card-title-desc">یک سری دکمه را با آن بپیچید <code class="highlighter-rouge">.btn</code> که در <code class="highlighter-rouge">.btn-group</code>.</p>

                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">ترک کرد</button>
                                    <button type="button" class="btn btn-secondary">وسط</button>
                                    <button type="button" class="btn btn-secondary">درست</button>
                                </div>

                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">نوار ابزار دکمه</h4>
                                <p class="card-title-desc">مجموعه‌ای از گروه‌های دکمه‌ها را در نوار ابزار دکمه‌ها برای اجزای پیچیده‌تر ترکیب کنید. در صورت نیاز از کلاس های کاربردی برای فاصله بین گروه ها، دکمه ها و موارد دیگر استفاده کنید.</p>

                                <div class="btn-toolbar d-flex flex-wrap gap-2" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-secondary">1</button>
                                        <button type="button" class="btn btn-secondary">2</button>
                                        <button type="button" class="btn btn-secondary">3</button>
                                        <button type="button" class="btn btn-secondary">4</button>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="Second group">
                                        <button type="button" class="btn btn-secondary">5</button>
                                        <button type="button" class="btn btn-secondary">6</button>
                                        <button type="button" class="btn btn-secondary">7</button>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="Third group">
                                        <button type="button" class="btn btn-secondary">8</button>
                                    </div>
                                </div>

                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">سایز بندی</h4>
                                <p class="card-title-desc">به جای اعمال کلاس های اندازه دکمه برای هر دکمه در یک گروه، فقط اضافه کنید <code class="highlighter-rouge">.btn-group-*</code> به هر <code class="highlighter-rouge">.btn-group</code>,  از جمله هر یک در هنگام تودرتو کردن چندین گروه.</p>

                                <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">چپ</button>
                                    <button type="button" class="btn btn-secondary">وسط</button>
                                    <button type="button" class="btn btn-secondary">راست</button>
                                </div>

                                <br/>

                                <div class="btn-group mt-2" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">چپ</button>
                                    <button type="button" class="btn btn-secondary">وسط</button>
                                    <button type="button" class="btn btn-secondary">راست</button>
                                </div>

                                <br/>

                                <div class="btn-group btn-group-sm mt-2" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">چپ</button>
                                    <button type="button" class="btn btn-secondary">وسط</button>
                                    <button type="button" class="btn btn-secondary">راست</button>
                                </div>

                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">تنوع عمودی</h4>
                                <p class="card-title-desc">کاری کنید که مجموعه ای از دکمه ها به جای افقی به صورت عمودی روی هم قرار گیرند. کشویی دکمه تقسیم در اینجا پشتیبانی نمی شود.</p>

                                <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                    <button type="button" class="btn btn-secondary">دکمه</button>
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            کشویی
                                            <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                            <a class="dropdown-item" href="#">لینک کشویی</a>
                                            <a class="dropdown-item" href="#">لینک کشویی</a>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-secondary">دکمه</button>
                                    <button type="button" class="btn btn-secondary">دکمه</button>
                                </div>

                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->
    <?php require_once "layout/footer.php" ?>
</div>
<!-- END layout-wrapper -->
<!-- /Right-bar -->

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


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/ui-buttons.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:19:37 GMT -->
</html>