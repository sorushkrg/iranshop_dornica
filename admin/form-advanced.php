<!doctype html>
<html lang="en" dir="rtl">


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/form-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:19:43 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap-rtl.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app-rtl.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Font Vazir-->
    <link href="assets/css/font-vzir.css" rel="stylesheet" type="text/css" />
    <link href="assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/jalalidatepicker/jalalidatepicker.min.css">
    <script type="text/javascript" src="assets/jalalidatepicker/jalalidatepicker.min.js"></script>

    <title>فرم پیشرفته | لکسا - قالب مدیریت و داشبورد</title>
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
                                <h4>فرم پیشرفته</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">لکسا</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">تشکیل می دهد</a></li>
                                    <li class="breadcrumb-item active">فرم پیشرفته</li>
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

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">انتخاب کننده رنگ</h4>
                                    <p class="card-title-desc">پلاگین colorpicker فانتزی و قابل تنظیم برای توییتر بوت استرپ.</p>

                                    <form action="#">
                                        <div class="mb-3">
                                            <label class="form-label">فیلد ورودی ساده</label>
                                            <input type="text" class="form-control" id="colorpicker-default" value="#7a6fbe">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">نمایش آلفا</label>
                                            <input type="text" class="form-control" id="colorpicker-showalpha" value="rgba(244, 106, 106, 0.6)">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">نمایش فقط پالت</label>
                                            <input type="text" class="form-control" id="colorpicker-showpaletteonly" value="#58db83">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">فقط پالت را تغییر دهید</label>
                                            <input type="text" class="form-control" id="colorpicker-togglepaletteonly" value="#7a6fbe">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">نمایش اولیه</label>
                                            <input type="text" class="form-control" id="colorpicker-showintial" value="#f5b225">
                                        </div>
                                        <div>
                                            <label class="form-label">نمایش ورودی و اولیه</label>
                                            <input type="text" class="form-control" id="colorpicker-showinput-intial" value="#ec536c">
                                        </div>
                                    </form>
                                    <!-- end form -->
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">حداکثر طول بوت استرپ</h4>
                                    <p class="card-title-desc">این افزونه به طور پیش‌فرض با بوت استرپ توییتر با استفاده از نشان‌ها ادغام می‌شود تا حداکثر طول فیلدی را که کاربر در آن متن درج می‌کند نمایش دهد. </p>

                                    <label class="form-label">استفاده پیش فرض</label>
                                    <p class="text-muted mb-2">
                                        وقتی نویسه‌های باقی‌مانده 10 یا کمتر باشند، نشان به‌طور پیش‌فرض نشان داده می‌شود:
                                    </p>
                                    <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" />

                                    <div class="mt-3">
                                        <label class="form-label">مقدار آستانه</label>
                                        <p class="text-muted mb-2">
                                            آیا می خواهید نشان زمانی که 20 نویسه یا کمتر وجود دارد نشان داده شود؟ استفاده کنید<code>threshold</code> گزینه:
                                        </p>
                                        <input type="text" maxlength="25" name="thresholdconfig" class="form-control" id="thresholdconfig" />
                                    </div>

                                    <div class="mt-3">
                                        <label class="form-label">همه گزینه ها</label>
                                        <p class="text-muted mb-2">
                                            لطفا توجه داشته باشید: اگر <code>alwaysShow</code> گزینه فعال است، <code>threshold</code> گزینه نادیده گرفته می شود
                                        </p>
                                        <input type="text" class="form-control" maxlength="25" name="alloptions" id="alloptions" />
                                    </div>

                                    <div class="mt-3">
                                        <label class="form-label">موقعیت</label>
                                        <p class="text-muted mb-2">
                                            تنها کاری که باید انجام دهید این است که<code>placement</code> گزینه، با یکی از آن رشته ها. اگر هیچ کدام
                                            مشخص شده است، موقعیت یابی به «پایین» تغییر خواهد کرد.
                                        </p>
                                        <input type="text" class="form-control" maxlength="25" name="placement" id="placement" />
                                    </div>

                                    <div class="mt-3">
                                        <label class="form-label">مناطق متنی</label>
                                        <p class="text-muted mb-2">
                                            حداکثر طول بوت استرپ از مناطق متنی و همچنین ورودی ها پشتیبانی می کند. حتی در IE قدیمی.
                                        </p>
                                        <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="این ناحیه متنی دارای محدودیت 225 کاراکتر است."></textarea>
                                    </div>

                                </div><!-- end cardbody -->
                            </div><!-- end card -->

                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">سوئیچ Css</h4>
                                    <p class="card-title-desc">در اینجا چند نوع سوئیچ آورده شده است. </p>

                                    <div class="d-flex flex-wrap gap-2">
                                        <input type="checkbox" id="switch1" switch="none" checked />
                                        <label for="switch1" data-on-label="بله" data-off-label="خیر"></label>

                                        <input type="checkbox" id="switch2" switch="default" checked />
                                        <label for="switch2" data-on-label="" data-off-label=""></label>

                                        <input type="checkbox" id="switch3" switch="bool" checked />
                                        <label for="switch3" data-on-label="بله" data-off-label="خیر"></label>

                                        <input type="checkbox" id="switch6" switch="primary" checked />
                                        <label for="switch6" data-on-label="بله" data-off-label="خیر"></label>

                                        <input type="checkbox" id="switch4" switch="success" checked />
                                        <label for="switch4" data-on-label="بله" data-off-label="خیر"></label>

                                        <input type="checkbox" id="switch7" switch="info" checked />
                                        <label for="switch7" data-on-label="بله" data-off-label="خیر"></label>

                                        <input type="checkbox" id="switch5" switch="warning" checked />
                                        <label for="switch5" data-on-label="بله" data-off-label="خیر"></label>

                                        <input type="checkbox" id="switch8" switch="danger" checked />
                                        <label for="switch8" data-on-label="بله" data-off-label="خیر"></label>

                                        <input type="checkbox" id="switch9" switch="dark" checked />
                                        <label for="switch9" data-on-label="بله" data-off-label="خیر"></label>

                                    </div>
                                </div><!-- end cardbody  -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">خرماگیر</h4>
                                    <p class="card-title-desc">نمونه هایی از گرفتن زمان بوت استرپ توییتر.</p>

                                    <form action="#">
                                        <div class="mb-3">
                                            <label>عملکرد پیش فرض</label>
                                            <div>
                                                <div class="input-group" id="datepicker1">
                                                    <input type="text" class="form-control" placeholder="روز ماه , سال" data-jdp data-jdp-min-date="today">

                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>

                                                </div><!-- input-group -->
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label>بسته شدن خودکار</label>
                                            <div>
                                                <div class="input-group" id="datepicker2">
                                                    <input type="text" class="form-control" placeholder="روز ماه , سال" data-jdp data-jdp-min-date="today">

                                                    <span class="input-group-text"><i
                                                            class="mdi mdi-calendar"></i></span>

                                                </div>
                                                <!-- input-group -->
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label>تاریخ چندگانه</label>
                                            <div>
                                                <div class="input-group" id="datepicker3">
                                                    <input type="text" class="form-control" placeholder="روز ماه , سال" data-jdp data-jdp-min-date="today">

                                                    <span class="input-group-text"><i
                                                            class="mdi mdi-calendar"></i></span>

                                                </div>
                                                <!-- input-group -->
                                            </div>
                                        </div>

                                        <div class="mb-0">
                                            <label>محدوده زمانی</label>
                                            <div>
                                                <div class="input-daterange input-group" id="datepicker4">
                                                    <input type="text" class="form-control" name="start" placeholder="تاریخ شروع" data-jdp data-jdp-min-date="today" />
                                                    <input type="text" class="form-control" name="end" placeholder="تاریخ پایان" data-jdp data-jdp-min-date="today" />
                                                </div>
                                            </div>
                                        </div>

                                    </form><!-- end form -->
                                </div><!-- end cardbody -->
                            </div><!-- end card -->

                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">بوت استرپ چرخش را لمس کنید</h4>
                                    <p class="card-title-desc">یک جزء چرخشی ورودی سازگار با موبایل و لمس برای بوت استرپ
                                    </p>

                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">استفاده از ویژگی های داده</label>
                                            <input data-toggle="touchspin" type="text" value="55">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">مثال با پسوند (بزرگ)</label>
                                            <input data-toggle="touchspin" value="18.20" type="text" data-step="0.1"
                                                data-decimals="2" data-bts-postfix="%">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">با پیشوند</label>
                                            <input data-toggle="touchspin" type="text" data-bts-prefix=" تومان ">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Init با مقدار خالی:</label>
                                            <input data-toggle="touchspin" type="text">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">ویژگی مقدار تنظیم نشده است (در حال اعمال
                                                settings.initval)</label>
                                            <input id="demo3_21" type="text" value="" name="demo3_21">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">مقدار به صراحت روی 33 تنظیم شده است (پرش
                                                settings.initval) </label>
                                            <input id="demo3_22" type="text" value="33" name="demo3_22">
                                        </div>
                                        <div>
                                            <label class="form-label">تراز دکمه عمودی:</label>
                                            <input id="demo_vertical" type="text" value="" name="demo_vertical">
                                        </div>
                                    </form><!-- end form -->

                                </div><!-- end cardbody -->
                            </div><!-- end card -->

                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">انتخاب دوم</h4>
                                    <p class="card-title-desc">یک جزء چرخشی ورودی سازگار با موبایل و لمس برای بوت استرپ
                                    </p>

                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">انتخاب واحد</label>
                                            <select class="form-control select2">
                                                <option>انتخاب کنید</option>
                                                <optgroup label="منطقه زمانی آلاسکا/هاوایی">
                                                    <option value="AK">آلاسکا</option>
                                                    <option value="HI">هاوایی</option>
                                                </optgroup>
                                                <optgroup label="منطقه زمانی اقیانوس آرام">
                                                    <option value="CA">کالیفرنیا</option>
                                                    <option value="NV">نوادا</option>
                                                    <option value="OR">اورگان</option>
                                                    <option value="WA">واشنگتن</option>
                                                </optgroup>
                                                <optgroup label="منطقه زمانی کوهستان">
                                                    <option value="AZ">آریزونا</option>
                                                    <option value="CO">کلرادو</option>
                                                    <option value="ID">آیداهو</option>
                                                    <option value="MT">مونتانا</option>
                                                    <option value="NE">نبراسکا</option>
                                                    <option value="NM">نیومکزیکو</option>
                                                    <option value="ND">داکوتای شمالی</option>
                                                    <option value="UT">یوتا</option>
                                                    <option value="WY">وایومینگ</option>
                                                </optgroup>
                                                <optgroup label="منطقه زمانی مرکزی">
                                                    <option value="AL">آلاباما</option>
                                                    <option value="AR">آرکانزاس</option>
                                                    <option value="IL">ایلینوی</option>
                                                    <option value="IA">آیووا</option>
                                                    <option value="KS">کانزاس</option>
                                                    <option value="KY">کنتاکی</option>
                                                    <option value="LA">لوئیزیانا</option>
                                                    <option value="MN">مینه سوتا</option>
                                                    <option value="MS">می سی سی پی</option>
                                                    <option value="MO">میسوری</option>
                                                    <option value="OK">اوکلاهما</option>
                                                    <option value="SD">جنوب Dakota</option>
                                                    <option value="TX">تگزاس</option>
                                                    <option value="TN">تنسی</option>
                                                    <option value="WI">ویسکانسین</option>
                                                </optgroup>
                                                <optgroup label="منطقه زمانی شرقی">
                                                    <option value="CT">کنتیکت</option>
                                                    <option value="DE">دلاور</option>
                                                    <option value="FL">فلوریدا</option>
                                                    <option value="GA">گرجستان</option>
                                                    <option value="IN">ایندیانا</option>
                                                    <option value="ME">مین</option>
                                                    <option value="MD">مریلند</option>
                                                    <option value="MA">ماساچوست</option>
                                                    <option value="MI">میشیگان</option>
                                                    <option value="NH">نیوهمپشایر</option>
                                                    <option value="NJ">نیوجرسی</option>
                                                    <option value="NY">نیویورک</option>
                                                    <option value="NC">کارولینای شمالی</option>
                                                    <option value="OH">اوهایو</option>
                                                    <option value="PA">پنسیلوانیا</option>
                                                    <option value="RI">رود آیلند</option>
                                                    <option value="SC">کارولینای جنوبی</option>
                                                    <option value="VT">ورمونت</option>
                                                    <option value="VA">ویرجینیا</option>
                                                    <option value="WV">ویرجینیای غربی</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group mb-0">
                                            <label class="form-label">انتخاب چندگانه</label>

                                            <select class="select2 form-control select2-multiple" multiple="multiple" multiple data-placeholder="انتخاب کنید ...">
                                                <optgroup label="منطقه زمانی آلاسکا/هاوایی">
                                                    <option value="AK">آلاسکا</option>
                                                    <option value="HI">هاوایی</option>
                                                </optgroup>
                                                <optgroup label="منطقه زمانی اقیانوس آرام">
                                                    <option value="CA">کالیفرنیا</option>
                                                    <option value="NV">نوادا</option>
                                                    <option value="OR">اورگان</option>
                                                    <option value="WA">واشنگتن</option>
                                                </optgroup>
                                                <optgroup label="منطقه زمانی کوهستان">
                                                    <option value="AZ">آریزونا</option>
                                                    <option value="CO">کلرادو</option>
                                                    <option value="ID">آیداهو</option>
                                                    <option value="MT">مونتانا</option>
                                                    <option value="NE">نبراسکا</option>
                                                    <option value="NM">نیومکزیکو</option>
                                                    <option value="ND">داکوتای شمالی</option>
                                                    <option value="UT">یوتا</option>
                                                    <option value="WY">وایومینگ</option>
                                                </optgroup>
                                                <optgroup label="منطقه زمانی مرکزی">
                                                    <option value="AL">آلاباما</option>
                                                    <option value="AR">آرکانزاس</option>
                                                    <option value="IL">ایلینوی</option>
                                                    <option value="IA">آیووا</option>
                                                    <option value="KS">کانزاس</option>
                                                    <option value="KY">کنتاکی</option>
                                                    <option value="LA">لوئیزیانا</option>
                                                    <option value="MN">مینه سوتا</option>
                                                    <option value="MS">می سی سی پی</option>
                                                    <option value="MO">میسوری</option>
                                                    <option value="OK">اوکلاهما</option>
                                                    <option value="SD">داکوتای جنوبی</option>
                                                    <option value="TX">تگزاس</option>
                                                    <option value="TN">تنسی</option>
                                                    <option value="WI">ویسکانسین</option>
                                                </optgroup>
                                                <optgroup label="منطقه زمانی شرقی">
                                                    <option value="CT">کانکتیکات</option>
                                                    <option value="DE">دلاور</option>
                                                    <option value="FL">فلوریدا</option>
                                                    <option value="GA">گرجستان</option>
                                                    <option value="IN">ایندیانا</option>
                                                    <option value="ME">مین</option>
                                                    <option value="MD">مریلند</option>
                                                    <option value="MA">ماساچوست</option>
                                                    <option value="MI">میشیگان</option>
                                                    <option value="NH">نیوهمپشایر</option>
                                                    <option value="NJ">نیوجرسی</option>
                                                    <option value="NY">نیویورک</option>
                                                    <option value="NC">کارولینای شمالی</option>
                                                    <option value="OH">اوهایو</option>
                                                    <option value="PA">پنسیلوانیا</option>
                                                    <option value="RI">رود آیلند</option>
                                                    <option value="SC">کارولینای جنوبی</option>
                                                    <option value="VT">ورمونت</option>
                                                    <option value="VA">ویرجینیا</option>
                                                    <option value="WV">ویرجینیای غربی</option>
                                                </optgroup>
                                            </select>

                                        </div>

                                    </form>

                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">بوت استرپ فایل استایل</h4>
                                    <p class="card-title-desc">نمونه هایی از بوت استرپ سبک فایل.</p>

                                    <form action="#">
                                        <div class="mb-3">
                                            <label class="form-lable">ورودی فایل پیش فرض</label>
                                            <input type="file" class="filestyle" data-buttonname="btn-secondary">
                                        </div>

                                        <div class="form-group mb-0">
                                            <label class="form-lable">سبک فایل بدون ورودی</label>
                                            <input type="file" class="filestyle" data-input="false" data-buttonname="btn-secondary">
                                        </div>

                                    </form>
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

    <script src="assets/libs/select2/js/select2.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
    <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="assets/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>
    <script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

    <script src="assets/js/pages/form-advanced.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            jalaliDatepicker.startWatch({
                minDate: "attr",
                maxDate: "attr",
                time: true,
                // date:false
            });
            /* Below is a js demo | you don't need to use */
            setTimeout(function() {
                var elm = document.getElementsByTagName("input[data-jdp]")[0];
                elm.focus();
                jalaliDatepicker.hide();
                jalaliDatepicker.show(elm);
            }, 1000);
        });
    </script>
</body>


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/form-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:19:46 GMT -->

</html>