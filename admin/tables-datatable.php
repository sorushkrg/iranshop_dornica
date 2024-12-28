<!doctype html>
<html lang="en" dir="rtl">


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:19:54 GMT -->
<head>

    <meta charset="utf-8" />
    <title>جدول داده ها | لکسا - قالب مدیریت و داشبورد</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap-rtl.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app-rtl.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Font Vazir-->
    <link href="assets/css/font-vzir.css" rel="stylesheet" type="text/css"/>
    <link href="assets/fonts/fontawesome/css/all.min.html" rel="stylesheet" type="text/css"/>

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
                            <h4>جدول داده</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">لکسا</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">قرص</a></li>
                                <li class="breadcrumb-item active">جدول داده</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="state-information d-none d-sm-block">
                            <div class="state-graph">
                                <div id="header-chart-1"></div>
                                <div class="info">تعادل      2,317</div>
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

                                <h4 class="card-title">جدول داده پیش فرض</h4>
                                <p class="card-title-desc">جدول های داده اکثر ویژگی‌های فعال را به طور پیش‌فرض دارد، بنابراین تنها کاری که برای استفاده از آن با جداول خود باید انجام دهید این است که تابع ساخت و ساز را فراخوانی کنید: <code>  ().DataTable();</code>.
                                </p>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>نام</th>
                                        <th>موقعیت</th>
                                        <th>دفتر</th>
                                        <th>سن</th>
                                        <th>شروع کنید تاریح</th>
                                        <th>حقوق</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>ببر نیکسون</td>
                                        <td>معمار سیستم</td>
                                        <td>ادینبورگ</td>
                                        <td>61</td>
                                        <td>1398/3/5</td>
                                        <td>   320,800 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>Gآرت وینترز</td>
                                        <td>حسابدار</td>
                                        <td>توکیو</td>
                                        <td>63</td>
                                        <td>1398/3/5</td>
                                        <td>   170,750 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>اشتون کاکس</td>
                                        <td>نویسنده فنی جوان</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>66</td>
                                        <td>1398/3/5</td>
                                        <td>   86,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>سدریک کلی</td>
                                        <td>برنامه نویس ارشد جاوا اسکریپت</td>
                                        <td>ادینبورگ</td>
                                        <td>22</td>
                                        <td>1398/3/5</td>
                                        <td>    433,060 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>آیری ساتو</td>
                                        <td>حسابدار</td>
                                        <td>توکیو</td>
                                        <td>33</td>
                                        <td>1398/3/5</td>
                                        <td>   162,700  تومان </td>
                                    </tr>
                                    <tr>
                                        <td>بریل ویلیامسون</td>
                                        <td>کارشناس ادغام</td>
                                        <td>نیویورک</td>
                                        <td>61</td>
                                        <td>1398/3/5</td>
                                        <td>   372,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>هرود چندلر</td>
                                        <td>دستیار فروش</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>59</td>
                                        <td>1398/3/5</td>
                                        <td>   137,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>رونا دیویدسون</td>
                                        <td>کارشناس ادغام</td>
                                        <td>توکیو</td>
                                        <td>55</td>
                                        <td>1398/3/5</td>
                                        <td>   327,900 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>کالین هرست</td>
                                        <td>برنامه نویس جاوا اسکریپت</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>39</td>
                                        <td>1398/3/5</td>
                                        <td>   205,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>سونیا فراست</td>
                                        <td>مهندس نرم افزار</td>
                                        <td>ادینبورگ</td>
                                        <td>23</td>
                                        <td>1398/3/5</td>
                                        <td>   103,600 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>جنا گینز</td>
                                        <td>مدیر دفتر</td>
                                        <td>لندن</td>
                                        <td>30</td>
                                        <td>1398/3/5</td>
                                        <td>   90,560 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>کوین فلین</td>
                                        <td>سرب پشتیبانی</td>
                                        <td>ادینبورگ</td>
                                        <td>22</td>
                                        <td>1398/3/5</td>
                                        <td>   342,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>شارد مارشال</td>
                                        <td>مدیر منطقه</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>36</td>
                                        <td>1398/3/5</td>
                                        <td>   470,600 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>هیلی کندی</td>
                                        <td>طراح ارشد بازاریابی</td>
                                        <td>لندن</td>
                                        <td>43</td>
                                        <td>1398/3/5</td>
                                        <td>   313,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>تاتیانا فیتزپاتریک</td>
                                        <td>مدیر منطقه</td>
                                        <td>لندن</td>
                                        <td>19</td>
                                        <td>1398/3/5</td>
                                        <td>   385,750 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>مایکل سیلوا</td>
                                        <td>طراح بازاریابی</td>
                                        <td>لندن</td>
                                        <td>66</td>
                                        <td>1398/3/5</td>
                                        <td>   198,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>پل برد</td>
                                        <td>مدیر ارشد مالی (CFO)</td>
                                        <td>نیویورک</td>
                                        <td>64</td>
                                        <td>1398/3/5</td>
                                        <td>   725,000</td>
                                    </tr>
                                    <tr>
                                        <td>گلوریا لیتل</td>
                                        <td>مدیر سیستم ها</td>
                                        <td>نیویورک</td>
                                        <td>59</td>
                                        <td>1398/3/5</td>
                                        <td>   237,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>بردلی گریر</td>
                                        <td>مهندس نرم افزار</td>
                                        <td>لندن</td>
                                        <td>41</td>
                                        <td>1398/3/5</td>
                                        <td>   132,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>دای ریوس</td>
                                        <td>رهبری پرسنل</td>
                                        <td>ادینبورگ</td>
                                        <td>35</td>
                                        <td>1398/3/5</td>
                                        <td>   217,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>جنت کالدول</td>
                                        <td>رهبر توسعه</td>
                                        <td>نیویورک</td>
                                        <td>30</td>
                                        <td>1398/3/5</td>
                                        <td>   345,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>یوری بری</td>
                                        <td>مدیر ارشد بازاریابی (CMO)</td>
                                        <td>نیویورک</td>
                                        <td>40</td>
                                        <td>1398/3/5</td>
                                        <td>   675,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>سزار ونس</td>
                                        <td>پشتیبانی قبل از فروش</td>
                                        <td>نیویورک</td>
                                        <td>21</td>
                                        <td>1398/3/5</td>
                                        <td>   106,450 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>دوریس وایلدر</td>
                                        <td>دستیار فروش</td>
                                        <td>سیدنی</td>
                                        <td>23</td>
                                        <td>1398/3/5</td>
                                        <td>   85,600 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>آنجلیکا راموس</td>
                                        <td>مدیر عامل (مدیر عامل)</td>
                                        <td>لندن</td>
                                        <td>47</td>
                                        <td>1398/3/5</td>
                                        <td>   1,200,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>گاوین جویس</td>
                                        <td>توسعه دهنده</td>
                                        <td>ادینبورگ</td>
                                        <td>42</td>
                                        <td>1398/3/5</td>
                                        <td>   92,575 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>جنیفر چانگ</td>
                                        <td>مدیر منطقه</td>
                                        <td>سنگاپور</td>
                                        <td>28</td>
                                        <td>1398/3/5</td>
                                        <td>   357,650 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>برندن واگنر</td>
                                        <td>مهندس نرم افزار</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>28</td>
                                        <td>1398/3/5</td>
                                        <td>   206,850 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>فیونا سبز</td>
                                        <td>مدیر ارشد عملیات (COO)</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>48</td>
                                        <td>1398/3/5</td>
                                        <td>   850,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>شو Itou</td>
                                        <td>بازاریابی منطقه ای</td>
                                        <td>توکیو</td>
                                        <td>20</td>
                                        <td>1398/3/5</td>
                                        <td>   163,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>میشل هاوس</td>
                                        <td>کارشناس ادغام</td>
                                        <td>سیدنی</td>
                                        <td>37</td>
                                        <td>1398/3/5</td>
                                        <td>   95,400 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>سوکی بورکز</td>
                                        <td>توسعه دهنده</td>
                                        <td>لندن</td>
                                        <td>53</td>
                                        <td>1398/3/5</td>
                                        <td>   114,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>پرسکات بارتلت</td>
                                        <td>نویسنده فنی</td>
                                        <td>لندن</td>
                                        <td>27</td>
                                        <td>1398/3/5</td>
                                        <td>   145,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>گاوین کورتز</td>
                                        <td>سرگروه</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>22</td>
                                        <td>1398/3/5</td>
                                        <td>   235,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>مارتنا مک کری</td>
                                        <td>پشتیبانی پس از فروش</td>
                                        <td>ادینبورگ</td>
                                        <td>46</td>
                                        <td>1398/3/5</td>
                                        <td>   324,050 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>باتلر یونیتی</td>
                                        <td>طراح بازاریابی</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>47</td>
                                        <td>1398/3/5</td>
                                        <td>   85,675 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>هوارد هتفیلد</td>
                                        <td>مدیر دفتر</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>51</td>
                                        <td>1398/3/5</td>
                                        <td>   164,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>امید فوئنتس</td>
                                        <td>دبیر، منشی</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>41</td>
                                        <td>1398/3/5</td>
                                        <td>   109,850 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>ویویان هارل</td>
                                        <td>کنترل کننده مالی</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>62</td>
                                        <td>1398/3/5</td>
                                        <td>   452,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>تیموتی مونی</td>
                                        <td>مدیر دفتر</td>
                                        <td>لندن</td>
                                        <td>37</td>
                                        <td>1398/2/6</td>
                                        <td>   136,200 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>جکسون برادشاو</td>
                                        <td>کارگردان</td>
                                        <td>نیویورک</td>
                                        <td>65</td>
                                        <td>1398/3/5</td>
                                        <td>   645,750 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>اولیویا لیانگ</td>
                                        <td>مهندس پشتیبانی</td>
                                        <td>سنگاپور</td>
                                        <td>64</td>
                                        <td>1398/3/5</td>
                                        <td>   234,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>برونو نش</td>
                                        <td>مهندس نرم افزار</td>
                                        <td>لندن</td>
                                        <td>38</td>
                                        <td>1398/3/5</td>
                                        <td>   163,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>ساکورا یاماموتو</td>
                                        <td>مهندس پشتیبانی</td>
                                        <td>توکیو</td>
                                        <td>37</td>
                                        <td>1398/2/6</td>
                                        <td>   139,575</td>
                                    </tr>
                                    <tr>
                                        <td>ثور والتون</td>
                                        <td>توسعه دهنده</td>
                                        <td>نیویورک</td>
                                        <td>61</td>
                                        <td>1398/2/6</td>
                                        <td>   98,540 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>فین کاماچو</td>
                                        <td>مهندس پشتیبانی</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>47</td>
                                        <td>1398/3/5</td>
                                        <td>   87,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>سرژ بالدوین</td>
                                        <td>هماهنگ کننده داده ها</td>
                                        <td>سنگاپور</td>
                                        <td>64</td>
                                        <td>1398/3/5</td>
                                        <td>   138,575 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>زنایدا فرانک</td>
                                        <td>مهندس نرم افزار</td>
                                        <td>نیویورک</td>
                                        <td>63</td>
                                        <td>1398/2/6</td>
                                        <td>   125,250 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>زوریتا سرانو</td>
                                        <td>مهندس نرم افزار</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>56</td>
                                        <td>1398/2/6</td>
                                        <td>   115,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>جنیفر آکوستا</td>
                                        <td>برنامه نویس جوان جاوا اسکریپت</td>
                                        <td>ادینبورگ</td>
                                        <td>43</td>
                                        <td>1398/2/6</td>
                                        <td>   75,650 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>کارا استیونز</td>
                                        <td>دستیار فروش</td>
                                        <td>نیویورک</td>
                                        <td>46</td>
                                        <td>1398/2/6</td>
                                        <td>   145,600 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>هرمیون باتلر</td>
                                        <td>مدیر منطقه</td>
                                        <td>لندن</td>
                                        <td>47</td>
                                        <td>1398/2/6</td>
                                        <td>   356,250 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>لائل گریر</td>
                                        <td>مدیر سیستم ها</td>
                                        <td>لندن</td>
                                        <td>21</td>
                                        <td>1398/3/5</td>
                                        <td>   103,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>جوناس الکساندر</td>
                                        <td>توسعه دهنده</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>30</td>
                                        <td>1398/3/5</td>
                                        <td>   86,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>شاد دکر</td>
                                        <td>مدیر منطقه</td>
                                        <td>ادینبورگ</td>
                                        <td>51</td>
                                        <td>1398/2/6</td>
                                        <td>   183,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>مایکل بروس</td>
                                        <td>برنامه نویس جاوا اسکریپت</td>
                                        <td>سنگاپور</td>
                                        <td>29</td>
                                        <td>1398/2/6</td>
                                        <td>   183,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>دونا اسنایدر</td>
                                        <td>پشتیبانی مشتری</td>
                                        <td>نیویورک</td>
                                        <td>27</td>
                                        <td>1398/3/5</td>
                                        <td>   112,000 تومان </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">مثال دکمه ها</h4>
                                <p class="card-title-desc">پسوند دکمهبرای جدول های داده مجموعه‌ای از گزینه‌ها، روش‌های API و استایل‌ها را برای نمایش دکمه‌ها در صفحه‌ای که با DataTable تعامل دارند، ارائه می‌کند. کتابخانه هسته چارچوبی را فراهم می کند که پلاگین ها می توانند بر اساس آن ساخته شوند.</p>
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>نام</th>
                                        <th>موقعیت</th>
                                        <th>دفتر</th>
                                        <th>سن</th>
                                        <th>تاریخ شروع</th>
                                        <th>حقوق</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>ببر نیکسون</td>
                                        <td>معمار سیستم</td>
                                        <td>ادینبورگ</td>
                                        <td>61</td>
                                        <td>1398/3/5</td>
                                        <td>   320,800 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>Gآرت وینترز</td>
                                        <td>حسابدار</td>
                                        <td>توکیو</td>
                                        <td>63</td>
                                        <td>1398/3/5</td>
                                        <td>   170,750 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>اشتون کاکس</td>
                                        <td>نویسنده فنی جوان</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>66</td>
                                        <td>1398/3/5</td>
                                        <td>   86,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>سدریک کلی</td>
                                        <td>برنامه نویس ارشد جاوا اسکریپت</td>
                                        <td>ادینبورگ</td>
                                        <td>22</td>
                                        <td>1398/3/5</td>
                                        <td>   433,060 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>آیری ساتو</td>
                                        <td>حسابدار</td>
                                        <td>توکیو</td>
                                        <td>33</td>
                                        <td>1398/3/5</td>
                                        <td>   162,700 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>بریل ویلیامسون</td>
                                        <td>کارشناس ادغام</td>
                                        <td>نیویورک</td>
                                        <td>61</td>
                                        <td>1398/3/5</td>
                                        <td>   372,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>هرود چندلر</td>
                                        <td>دستیار فروش</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>59</td>
                                        <td>1398/3/5</td>
                                        <td>   137,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>رونا دیویدسون</td>
                                        <td>کارشناس ادغام</td>
                                        <td>توکیو</td>
                                        <td>55</td>
                                        <td>1398/3/5</td>
                                        <td>   327,900 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>کالین هرست</td>
                                        <td>برنامه نویس جاوا اسکریپت</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>39</td>
                                        <td>1398/3/5</td>
                                        <td>   205,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>سونیا فراست</td>
                                        <td>مهندس نرم افزار</td>
                                        <td>ادینبورگ</td>
                                        <td>23</td>
                                        <td>1398/3/5</td>
                                        <td>   103,600 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>جنا گینز</td>
                                        <td>مدیر دفتر</td>
                                        <td>لندن</td>
                                        <td>30</td>
                                        <td>1398/3/5</td>
                                        <td>   90,560 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>کوین فلین</td>
                                        <td>سرب پشتیبانی</td>
                                        <td>ادینبورگ</td>
                                        <td>22</td>
                                        <td>1398/3/5</td>
                                        <td>   342,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>شارد مارشال</td>
                                        <td>مدیر منطقه</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>36</td>
                                        <td>1398/3/5</td>
                                        <td>   470,600 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>هیلی کندی</td>
                                        <td>طراح ارشد بازاریابی</td>
                                        <td>لندن</td>
                                        <td>43</td>
                                        <td>1398/3/5</td>
                                        <td>   313,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>تاتیانا فیتزپاتریک</td>
                                        <td>مدیر منطقه</td>
                                        <td>لندن</td>
                                        <td>19</td>
                                        <td>1398/3/5</td>
                                        <td>   385,750 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>مایکل سیلوا</td>
                                        <td>طراح بازاریابی</td>
                                        <td>لندن</td>
                                        <td>66</td>
                                        <td>1398/3/5</td>
                                        <td>   198,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>پل برد</td>
                                        <td>مدیر ارشد مالی (CFO)</td>
                                        <td>نیویورک</td>
                                        <td>64</td>
                                        <td>1398/3/5</td>
                                        <td>   725,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>گلوریا لیتل</td>
                                        <td>مدیر سیستم ها</td>
                                        <td>نیویورک</td>
                                        <td>59</td>
                                        <td>1398/3/5</td>
                                        <td>   237,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>بردلی گریر</td>
                                        <td>مهندس نرم افزار</td>
                                        <td>لندن</td>
                                        <td>41</td>
                                        <td>1398/3/5</td>
                                        <td>   132,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>دای ریوس</td>
                                        <td>رهبری پرسنل</td>
                                        <td>ادینبورگ</td>
                                        <td>35</td>
                                        <td>1398/3/5</td>
                                        <td>   217,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>جنت کالدول</td>
                                        <td>رهبر توسعه</td>
                                        <td>نیویورک</td>
                                        <td>30</td>
                                        <td>1398/3/5</td>
                                        <td>   345,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>یوری بری</td>
                                        <td>مدیر ارشد بازاریابی (CMO)</td>
                                        <td>نیویورک</td>
                                        <td>40</td>
                                        <td>1398/3/5</td>
                                        <td>   675,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>سزار ونس</td>
                                        <td>پشتیبانی قبل از فروش</td>
                                        <td>نیویورک</td>
                                        <td>21</td>
                                        <td>1398/3/5</td>
                                        <td>   106,450 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>دوریس وایلدر</td>
                                        <td>دستیار فروش</td>
                                        <td>سیدنی</td>
                                        <td>23</td>
                                        <td>1398/3/5</td>
                                        <td>   85,600 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>آنجلیکا راموس</td>
                                        <td>مدیر عامل (مدیر عامل)</td>
                                        <td>لندن</td>
                                        <td>47</td>
                                        <td>1398/3/5</td>
                                        <td>   1,200,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>گاوین جویس</td>
                                        <td>توسعه دهنده</td>
                                        <td>ادینبورگ</td>
                                        <td>42</td>
                                        <td>1398/3/5</td>
                                        <td>   92,575</td>
                                    </tr>
                                    <tr>
                                        <td>جنیفر چانگ</td>
                                        <td>مدیر منطقه</td>
                                        <td>سنگاپور</td>
                                        <td>28</td>
                                        <td>1398/3/5</td>
                                        <td>   357,650 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>برندن واگنر</td>
                                        <td>مهندس نرم افزار</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>28</td>
                                        <td>1398/3/5</td>
                                        <td>   206,850 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>فیونا گرین</td>
                                        <td>مدیر ارشد عملیات (COO)</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>48</td>
                                        <td>1398/3/5</td>
                                        <td>   850,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>شو ایتو</td>
                                        <td>بازاریابی منطقه ای</td>
                                        <td>توکیو</td>
                                        <td>20</td>
                                        <td>1398/3/5</td>
                                        <td>   163,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>میشل هاوس</td>
                                        <td>کارشناس ادغام</td>
                                        <td>سیدنی</td>
                                        <td>37</td>
                                        <td>1398/3/5</td>
                                        <td>   95,400 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>سوکی بورکز</td>
                                        <td>توسعه دهنده</td>
                                        <td>لندن</td>
                                        <td>53</td>
                                        <td>1398/3/5</td>
                                        <td>   114,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>پرسکات بارتلت</td>
                                        <td>نویسنده فنی</td>
                                        <td>لندن</td>
                                        <td>27</td>
                                        <td>1398/3/5</td>
                                        <td>   145,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>گاوین کورتز</td>
                                        <td>سرگروه</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>22</td>
                                        <td>1398/3/5</td>
                                        <td>   235,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>مارتنا مک کری</td>
                                        <td>پشتیبانی پس از فروش</td>
                                        <td>ادینبورگ</td>
                                        <td>46</td>
                                        <td>1398/3/5</td>
                                        <td>   324,050 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>باتلر یونیتی</td>
                                        <td>طراح بازاریابی</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>47</td>
                                        <td>1398/3/5</td>
                                        <td>   85,675 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>هوارد هتفیلد</td>
                                        <td>مدیر دفتر</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>51</td>
                                        <td>1398/3/5</td>
                                        <td>   164,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>امید فوئنتس</td>
                                        <td>دبیر، منشی</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>41</td>
                                        <td>1398/3/5</td>
                                        <td>   109,850 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>ویویان هارل</td>
                                        <td>کنترل کننده مالی</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>62</td>
                                        <td>1398/3/5</td>
                                        <td>   452,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>تیموتی مونی</td>
                                        <td>مدیر دفتر</td>
                                        <td>لندن</td>
                                        <td>37</td>
                                        <td>2008/12/11</td>
                                        <td>   136,200 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>جکسون برادشاو</td>
                                        <td>کارگردان</td>
                                        <td>نیویورک</td>
                                        <td>65</td>
                                        <td>1398/3/5</td>
                                        <td>   645,750 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>اولیویا لیانگ</td>
                                        <td>مهندس پشتیبانی</td>
                                        <td>سنگاپور</td>
                                        <td>64</td>
                                        <td>1398/3/5</td>
                                        <td>   234,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>برونو نش</td>
                                        <td>مهندس نرم افزار</td>
                                        <td>لندن</td>
                                        <td>38</td>
                                        <td>1398/3/5</td>
                                        <td>   163,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>ساکورا یاماموتو</td>
                                        <td>مهندس پشتیبانی</td>
                                        <td>توکیو</td>
                                        <td>37</td>
                                        <td>1398/5/3</td>
                                        <td>   139,575 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>ثور والتون</td>
                                        <td>توسعه دهنده</td>
                                        <td>نیویورک</td>
                                        <td>61</td>
                                        <td>1398/5/3</td>
                                        <td>   98,540 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>فین کاماچو</td>
                                        <td>مهندس پشتیبانی</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>47</td>
                                        <td>1398/5/3</td>
                                        <td>   87,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>سرژ بالدوین</td>
                                        <td>هماهنگ کننده داده ها</td>
                                        <td>سنگاپور</td>
                                        <td>64</td>
                                        <td>1398/5/3</td>
                                        <td>   138,575 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>زنایدا فرانک</td>
                                        <td>مهندس نرم افزار</td>
                                        <td>نیویورک</td>
                                        <td>63</td>
                                        <td>1398/5/3</td>
                                        <td>   125,250 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>زوریتا سرانو</td>
                                        <td>مهندس نرم افزار</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>56</td>
                                        <td>1398/5/3</td>
                                        <td>   115,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>جنیفر آکوستا</td>
                                        <td>برنامه نویس جوان جاوا اسکریپت</td>
                                        <td>ادینبورگ</td>
                                        <td>43</td>
                                        <td>1398/5/3</td>
                                        <td>   75,650 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>کارا استیونز</td>
                                        <td>دستیار فروش</td>
                                        <td>نیویورک</td>
                                        <td>46</td>
                                        <td>1398/5/3</td>
                                        <td>   145,600 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>هرمیون باتلر</td>
                                        <td>مدیر منطقه</td>
                                        <td>لندن</td>
                                        <td>47</td>
                                        <td>1398/5/3</td>
                                        <td>   356,250 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>لائل گریر</td>
                                        <td>مدیر سیستم ها</td>
                                        <td>لندن</td>
                                        <td>21</td>
                                        <td>1398/5/3</td>
                                        <td>   103,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>جوناس الکساندر</td>
                                        <td>توسعه دهنده</td>
                                        <td>سانفرانسیسکو</td>
                                        <td>30</td>
                                        <td>1398/5/3</td>
                                        <td>   86,500 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>شاد دکر</td>
                                        <td>مدیر منطقه</td>
                                        <td>ادینبورگ</td>
                                        <td>51</td>
                                        <td>1398/5/3</td>
                                        <td>   183,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>مایکل بروس</td>
                                        <td>برنامه نویس جاوا اسکریپت</td>
                                        <td>سنگاپور</td>
                                        <td>29</td>
                                        <td>1398/5/3</td>
                                        <td>   183,000 تومان </td>
                                    </tr>
                                    <tr>
                                        <td>دونا اسنایدر</td>
                                        <td>پشتیبانی مشتری</td>
                                        <td>نیویورک</td>
                                        <td>27</td>
                                        <td>1398/5/3</td>
                                        <td>   112,000 تومان </td>
                                    </tr>
                                    </tbody>
                                </table>
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

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/jszip/jszip.min.js"></script>
<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
</body>


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:19:57 GMT -->
</html>