<!doctype html>
<html lang="en" dir="rtl">


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:18:45 GMT -->
<head>
    <?php require_once "layout/head.php" ?>
    <title><?= $stitle ?> | لکسا - قالب مدیریت و داشبورد</title>
</head>

<body data-sidebar="dark">

<!-- <body data-layout="horizontal" data-topbar="colored"> -->

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
                            <h4>داشبورد</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">لکسا</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">داشبورد</a></li>
                                <li class="breadcrumb-item active">داشبورد</li>
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
                    <div class="col-xl-3 col-sm-6">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-cube-outline float-end"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-uppercase mb-3 font-size-16 text-white">سفارشات</h6>
                                    <h2 class="mb-4 text-white">1,587</h2>
                                    <span class="badge bg-info"> +11% </span> <span class="ms-2">از دوره قبل</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-buffer float-end"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-uppercase mb-3 font-size-16 text-white">درآمد</h6>
                                    <h2 class="mb-4 text-white">50,000 تومان </h2>
                                    <span class="badge bg-danger"> -29% </span> <span class="ms-2">از دوره قبل</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-tag-text-outline float-end"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-uppercase mb-3 font-size-16 text-white">قیمت میانگین</h6>
                                    <h2 class="mb-4 text-white">156.7 تومان </h2>
                                    <span class="badge bg-warning"> 0% </span> <span class="ms-2">از دوره قبل</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-briefcase-check float-end"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-uppercase mb-3 font-size-16 text-white">محصول فروخته شده</h6>
                                    <h2 class="mb-4 text-white">1890</h2>
                                    <span class="badge bg-info"> +89% </span> <span class="ms-2">از دوره قبل</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">

                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">درآمد ماهانه</h4>

                                <div class="row text-center mt-4">
                                    <div class="col-6">
                                        <h5 class="font-size-20"> 56241 تومان </h5>
                                        <p class="text-muted">بازار</p>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="font-size-20">23651 تومان </h5>
                                        <p class="text-muted">درآمد کلی</p>
                                    </div>
                                </div>

                                <div id="morris-donut-example" class="morris-charts morris-charts-height" dir="ltr"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">ایمیل ارسال شد</h4>

                                <div class="row text-center mt-4">
                                    <div class="col-4">
                                        <h5 class="font-size-20">89425 تومان </h5>
                                        <p class="text-muted">بازار</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="font-size-20">56210 تومان </h5>
                                        <p class="text-muted">درآمد کلی</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="font-size-20">8974 تومان </h5>
                                        <p class="text-muted">ماه گذشته</p>
                                    </div>
                                </div>

                                <div id="morris-area-example" class="morris-charts morris-charts-height" dir="ltr"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">درآمد ماهانه</h4>

                                <div class="row text-center mt-4">
                                    <div class="col-6">
                                        <h5 class="font-size-20">2548 تومان </h5>
                                        <p class="text-muted">بازار</p>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="font-size-20">6985 تومان </h5>
                                        <p class="text-muted">درآمد کلی</p>
                                    </div>
                                </div>

                                <div id="morris-bar-stacked" class="morris-charts morris-charts-height" dir="ltr"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

                <div class="row">

                    <div class="col-xl-4 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">صندوق ورودی</h4>
                                <div class="inbox-wid">
                                    <a href="#" class="text-dark">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img float-start me-3"><img src="assets/images/users/user-1.jpg" class="avatar-sm rounded-circle" alt=""></div>
                                            <h6 class="inbox-item-author mb-1 font-size-16">مه آلود</h6>
                                            <p class="inbox-item-text text-muted mb-0">سلام! آنجا من در دسترس هستم ...</p>
                                            <p class="inbox-item-date text-muted">13:40 بعد از ظهر</p>
                                        </div>
                                    </a>
                                    <a href="#" class="text-dark">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img float-start me-3"><img src="assets/images/users/user-2.jpg" class="avatar-sm rounded-circle" alt=""></div>
                                            <h6 class="inbox-item-author mb-1 font-size-16">ملیسا</h6>
                                            <p class="inbox-item-text text-muted mb-0">من تمومش کردم! میبینمت خیلی...</p>
                                            <p class="inbox-item-date text-muted">13:34 بعد از ظهر</p>
                                        </div>
                                    </a>
                                    <a href="#" class="text-dark">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img float-start me-3"><img src="assets/images/users/user-3.jpg" class="avatar-sm rounded-circle" alt=""></div>
                                            <h6 class="inbox-item-author mb-1 font-size-16">دواین</h6>
                                            <p class="inbox-item-text text-muted mb-0">این تم عالی است!</p>
                                            <p class="inbox-item-date text-muted">13:17 بعد از ظهر</p>
                                        </div>
                                    </a>
                                    <a href="#" class="text-dark">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img float-start me-3"><img src="assets/images/users/user-4.jpg" class="avatar-sm rounded-circle" alt=""></div>
                                            <h6 class="inbox-item-author mb-1 font-size-16">مارتین</h6>
                                            <p class="inbox-item-text text-muted mb-0">از ملاقات شما خوشبختم</p>
                                            <p class="inbox-item-date text-muted">12:20 بعد از ظهر</p>
                                        </div>
                                    </a>
                                    <a href="#" class="text-dark">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img float-start me-3"><img src="assets/images/users/user-5.jpg" class="avatar-sm rounded-circle" alt=""></div>
                                            <h6 class="inbox-item-author mb-1 font-size-16">وینسنت</h6>
                                            <p class="inbox-item-text text-muted mb-0">سلام! آنجا من در دسترس هستم ...</p>
                                            <p class="inbox-item-date text-muted">11:47صبح</p>
                                        </div>
                                    </a>

                                    <a href="#" class="text-dark">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img float-start me-3"><img src="assets/images/users/user-6.jpg" class="avatar-sm rounded-circle" alt=""></div>
                                            <h6 class="inbox-item-author mb-1 font-size-16">رابرت چاپا</h6>
                                            <p class="inbox-item-text text-muted mb-0">سلام! آنجا من در دسترس هستم ...</p>
                                            <p class="inbox-item-date text-muted">10:12 صبح</p>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">فید فعالیت اخیر</h4>

                                <ol class="activity-feed mb-0">
                                    <li class="feed-item">
                                        <div class="feed-item-list">
                                            <span class="date"> 25 اردبیهشت</span>
                                            <span class="activity-text">پاسخ به نیاز «فعالیت های داوطلبانه»</span>
                                        </div>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-item-list">
                                            <span class="date"> 24 اردبیهشت</span>
                                            <span class="activity-text">"فعالیت های داوطلبانه" مورد علاقه اضافه شد</span>
                                        </div>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-item-list">
                                            <span class="date">23 اردبیهشت</span>
                                            <span class="activity-text">به گروه "تالار انجمن هیئت مدیره" پیوست</span>
                                        </div>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-item-list">
                                            <span class="date"> 24 اردبیهشت</span>
                                            <span class="activity-text">پاسخ به نیاز به "فرصت در نوع"</span>
                                        </div>
                                    </li>
                                </ol>

                                <div class="text-center">
                                    <a href="#" class="btn btn-sm btn-primary">بارگذاری بیشتر</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-4">
                        <div class="card widget-user">
                            <div class="widget-user-desc p-4 text-center bg-primary position-relative">
                                <i class="fas fa-quote-left h2 text-white-50"></i>
                                <p class="text-white mb-0">زبان های اروپایی اعضای یک خانواده هستند. وجود جداگانه آنها یک افسانه است. برای علم، موسیقی، ورزش، و غیره، اروپا همان واژگان است. زبان ها فقط در گرامرشان.</p>
                            </div>
                            <div class="p-4">
                                <div class="float-start mt-2 me-3">
                                    <img src="assets/images/users/user-2.jpg" alt="" class="rounded-circle avatar-sm">
                                </div>
                                <h6 class="mb-1 font-size-16 mt-2">ماری مینیک</h6>
                                <p class="text-muted mb-0">مدیر بازاریابی</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">فروش سالانه</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div>
                                            <h3>52,345</h3>
                                            <p class="text-muted">زبان ها فقط گرامر متفاوت هستند</p>
                                            <a href="#" class="text-primary">بیشتر بدانید <i class="mdi mdi-chevron-double-right" ></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 text-end">
                                        <div id="sparkline"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">آخرین معاملات</h4>

                                <div class="table-responsive">
                                    <table class="table align-middle table-centered table-vertical table-nowrap">

                                        <tbody>
                                        <tr>
                                            <td>
                                                <img src="assets/images/users/user-2.jpg" alt="user-image" class="avatar-xs rounded-circle me-2" /> هربرت سی پاتون
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> تایید</td>
                                            <td>
                                                14,584 تومان
                                                <p class="m-0 text-muted font-size-14">میزان</p>
                                            </td>
                                            <td>
                                               2/5/1398
                                                <p class="m-0 text-muted font-size-14">تاریخ</p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">ویرایش کنید</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="assets/images/users/user-3.jpg" alt="user-image" class="avatar-xs rounded-circle me-2" /> ماتیاس ان. کلاوزن
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-warning"></i> در انتظار پرداخت</td>
                                            <td>
                                                8,541 تومان
                                                <p class="m-0 text-muted font-size-14">میزان</p>
                                            </td>
                                            <td>
                                                2/5/1398
                                                <p class="m-0 text-muted font-size-14">تاریخ</p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">ویرایش کنید</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="assets/images/users/user-4.jpg" alt="user-image" class="avatar-xs rounded-circle me-2" /> نیکولای اس. هنریکسن
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> تایید</td>
                                            <td>
                                                954 تومان
                                                <p class="m-0 text-muted font-size-14">میزان</p>
                                            </td>
                                            <td>
                                                2/5/1398
                                                <p class="m-0 text-muted font-size-14">تاریخ</p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">ویرایش کنید</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="assets/images/users/user-5.jpg" alt="user-image" class="avatar-xs rounded-circle me-2" />لاسه سی. اورگارد
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i> پرداخت منقضی شده است</td>
                                            <td>
                                                44,584 تومان
                                                <p class="m-0 text-muted font-size-14">میزان</p>
                                            </td>
                                            <td>
                                                2/5/1398
                                                <p class="m-0 text-muted font-size-14">تاریخ</p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">ویرایش کنید</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="assets/images/users/user-6.jpg" alt="user-image" class="avatar-xs rounded-circle me-2" /> کسپر اس جسن
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> تایید</td>
                                            <td>
                                                8,844 تومان
                                                <p class="m-0 text-muted font-size-14">میزان</p>
                                            </td>
                                            <td>
                                                1/11/2016
                                                <p class="m-0 text-muted font-size-14">تاریخ</p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">ویرایش کنید</button>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">آخرین سفارشات</h4>

                                <div class="table-responsive">
                                    <table class="table align-middle table-centered table-vertical table-nowrap mb-1">

                                        <tbody>
                                        <tr>
                                            <td>#12354781</td>
                                            <td>
                                                <img src="assets/images/users/user-1.jpg" alt="user-image" class="avatar-xs me-2 rounded-circle" /> صندلی شیشه ای ریورستون
                                            </td>
                                            <td><span class="badge rounded-pill bg-success">تحویل داده شده</span></td>
                                            <td>
                                                185 تومان
                                            </td>
                                            <td>
                                               2/5/1398
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">ویرایش کنید</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>#52140300</td>
                                            <td>
                                                <img src="assets/images/users/user-2.jpg" alt="user-image" class="avatar-xs me-2 rounded-circle" /> شرکت شاین کاتالینا
                                            </td>
                                            <td><span class="badge rounded-pill bg-success">تحویل داده شده</span></td>
                                            <td>
                                                 تومان 1,024
                                            </td>
                                            <td>
                                               2/5/1398
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">ویرایش کنید</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>#96254137</td>
                                            <td>
                                                <img src="assets/images/users/user-3.jpg" alt="user-image" class="avatar-xs me-2 rounded-circle" /> کیپ مبلمان فضای باز ترکس
                                            </td>
                                            <td><span class="badge rounded-pill bg-danger">لغو کنید</span></td>
                                            <td>
                                                657 تومان
                                            </td>
                                            <td>
                                               2/5/1398
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">ویرایش کنید</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>#12365474</td>
                                            <td>
                                                <img src="assets/images/users/user-4.jpg" alt="user-image" class="avatar-xs me-2 rounded-circle" /> گوشه ساج حمام اوسیس
                                            </td>
                                            <td><span class="badge rounded-pill bg-warning">ارسال شد</span></td>
                                            <td>
                                                8451 تومان
                                            </td>
                                            <td>
                                               2/5/1398
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">ویرایش کنید</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>#85214796</td>
                                            <td>
                                                <img src="assets/images/users/user-5.jpg" alt="user-image" class="avatar-xs me-2 rounded-circle" /> بلندگو بوپلس
                                            </td>
                                            <td><span class="badge rounded-pill bg-success">تحویل داده شده</span></td>
                                            <td>
                                                584 تومان
                                            </td>
                                            <td>
                                               2/5/1398
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">ویرایش کنید</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#12354781</td>
                                            <td>
                                                <img src="assets/images/users/user-6.jpg" alt="user-image" class="avatar-xs me-2 rounded-circle" /> صندلی شیشه ای ریورستون
                                            </td>
                                            <td><span class="badge rounded-pill bg-success">تحویل داده شده</span></td>
                                            <td>
                                                185 تومان
                                            </td>
                                            <td>
                                               2/5/1398
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">ویرایش کنید</button>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>
    <!-- end main content-->
    <?php require_once "layout/footer.php" ?>
    
</div>




<!-- END layout-wrapper -->

<!-- Right Sidebar -->

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

<!--Morris Chart-->
<script src="assets/libs/morris.js/morris.min.js"></script>
<script src="assets/libs/raphael/raphael.min.js"></script>

<script src="assets/js/pages/dashboard.init.js"></script>

<script src="assets/js/app.js"></script>

</body>


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:19:09 GMT -->
</html>