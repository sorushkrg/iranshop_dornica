<!doctype html>
<html lang="en" dir="rtl">


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:19:33 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/libs/%40fullcalendar/core/main.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/%40fullcalendar/daygrid/main.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/%40fullcalendar/bootstrap/main.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/%40fullcalendar/timegrid/main.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap-rtl.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app-rtl.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Font Vazir-->
    <link href="assets/css/font-vzir.css" rel="stylesheet" type="text/css" />
    <link href="assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css" />

    <title>تقویم | لکسا - قالب مدیریت و داشبورد</title>
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
                                <h4>تقویم</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">لکسا</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">تقویم</a></li>
                                    <li class="breadcrumb-item active">تقویم</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="state-information d-none d-sm-block">
                                <div class="state-graph">
                                    <div id="header-chart-1"></div>
                                    <div class="info">تعادل 2,317 تومان </div>
                                </div>
                                <div class="state-graph">
                                    <div id="header-chart-2"></div>
                                    <div class="info">مورد فروخته شده 1230</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row mb-4">
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-grid">
                                        <button class="btn btn-primary" id="btn-new-event"><i class="mdi mdi-plus-circle-outline"></i>
                                            ایجاد رویداد جدید</button>
                                    </div>

                                    <div id="external-events">
                                        <br>
                                        <p class="text-muted">رویداد خود را بکشید و رها کنید یا در تقویم کلیک کنید</p>
                                        <div class="external-event fc-event bg-success" data-class="bg-success">
                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>برنامه ریزی رویداد جدید
                                        </div>
                                        <div class="external-event fc-event bg-info" data-class="bg-info">
                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>ملاقات
                                        </div>
                                        <div class="external-event fc-event bg-warning" data-class="bg-warning">
                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>تولید گزارش ها
                                        </div>
                                        <div class="external-event fc-event bg-danger" data-class="bg-danger">
                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>ایجاد تم جدید
                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <h5 class="font-size-14 mb-4">فعالیت اخیر :</h5>

                                        <ul class="list-unstyled activity-feed ms-1">
                                            <li class="feed-item">
                                                <div class="feed-item-list">
                                                    <div>
                                                        <div class="date">15 شهریور</div>
                                                        <p class="activity-text mb-0">پاسخ به نیاز «فعالیت های داوطلبانه”</p>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-item">
                                                <div class="feed-item-list">
                                                    <div>
                                                        <div class="date"> 14 شهریور </div>
                                                        <p class="activity-text mb-0">و نه کس دیگری وجود دارد <a href="javascript:void(0);" class="text-success">@Christi</a> خود درد چون درد است</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="feed-item">
                                                <div class="feed-item-list">
                                                    <div>
                                                        <div class="date">14 شهریور </div>
                                                        <p class="activity-text mb-0">اما برای اینکه ببینید این همه خطا از کجا زاده شده است"فعالیت های داوطلبانه"</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="feed-item">
                                                <div class="feed-item-list">
                                                    <div>
                                                        <div class="date">13 شهریور </div>
                                                        <p class="activity-text mb-0">پاسخ به نیاز «فعالیت های داوطلبانه»</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-xl-9">
                            <div class="card mt-4 mt-xl-0 mb-0">
                                <div class="card-body">
                                    <div id="calendar"></div>

                                </div>
                            </div>
                        </div> <!-- end col -->

                    </div>
                    <!-- end row -->


                    <!-- Add New Event MODAL -->
                    <!-- Add New Event MODAL -->
                    <div class="modal fade" id="event-modal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header py-3 px-4 border-bottom-0">
                                    <h5 class="modal-title" id="modal-title">Event</h5>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-hidden="true"></button>

                                </div>
                                <div class="modal-body p-4">
                                    <form class="needs-validation" name="event-form" id="form-event" novalidate>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">نام رخداد</label>
                                                    <input class="form-control" placeholder="درج نام رویداد"
                                                        type="text" name="title" id="event-title" required value="" />
                                                    <div class="invalid-feedback">لطفاً یک نام رویداد معتبر ارائه دهید</div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">دسته بندی</label>
                                                    <select class="form-control custom-select" name="category"
                                                        id="event-category">
                                                        <option selected> --انتخاب کنید-- </option>
                                                        <option value="bg-danger">خطر</option>
                                                        <option value="bg-success">موفقیت</option>
                                                        <option value="bg-primary">اولیه</option>
                                                        <option value="bg-info">اطلاعات</option>
                                                        <option value="bg-dark">تاریک</option>
                                                        <option value="bg-warning">هشدار</option>
                                                    </select>
                                                    <div class="invalid-feedback">لطفاً یک دسته رویداد معتبر انتخاب کنید</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-danger" id="btn-delete-event">حذف</button>
                                            </div>
                                            <div class="col-6 text-end">
                                                <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">بستن</button>
                                                <button type="submit" class="btn btn-success" id="btn-save-event">صرفه جویی</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- end modal-content-->
                        </div> <!-- end modal dialog-->
                    </div>
                    <!-- end modal-->

                </div>
                <!-- container-fluid -->
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

    <!-- plugin js -->
    <script src="assets/libs/moment/min/moment.min.js"></script>
    <script src="assets/libs/jquery-ui-dist/jquery-ui.min.js"></script>
    <script src="assets/libs/%40fullcalendar/core/main.min.js"></script>
    <script src="assets/libs/%40fullcalendar/bootstrap/main.min.js"></script>
    <script src="assets/libs/%40fullcalendar/daygrid/main.min.js"></script>
    <script src="assets/libs/%40fullcalendar/timegrid/main.min.js"></script>
    <script src="assets/libs/%40fullcalendar/interaction/main.min.js"></script>

    <!-- Calendar init -->
    <script src="assets/js/pages/calendar.init.js"></script>
    <script src="assets/js/app.js"></script>

</body>

<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:19:36 GMT -->

</html>