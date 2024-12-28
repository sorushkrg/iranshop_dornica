<!doctype html>
<html lang="en" dir="rtl">

<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/form-editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:19:46 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Form Editors | Lexa - Admin & Dashboard Template</title>
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
    <link href="assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/font-vzir.css" rel="stylesheet" type="text/css" />
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
                                <h4>ویرایشگران فرم</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">لکسا</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">فرم‌ها</a></li>
                                    <li class="breadcrumb-item active">ویرایشگران فرم</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="state-information d-none d-sm-block">
                                <div class="state-graph">
                                    <div id="header-chart-1"></div>
                                    <div class="info">موجودی 2317 دلار</div>
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

                                    <h4 class="card-title">Tinymce html5</h4>
                                    <p class="card-title-desc">Bootstrap-html5 یک افزونه جاوا اسکریپت است که ایجاد ویرایشگرهای ساده و زیبای را با کمک html5 و توییتر بوت استرپ آسان می کند.</p>

                                    <form method="post">
                                        <textarea id="elm1" name="area"></textarea>
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



    <!-- init js -->
    <!--
        <script src="assets/js/pages/form-editor.init.js"></script>
-->

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <!--tinymce js-->
    <script src="assets/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            height: 500,
            language_url: 'assets/tinymce/js/tinymce/langs/fa.js',
            language: "fa",
            // plugins: [
            //     'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview', 'anchor',
            //     'pagebreak', 'tinymcespellchecker'
            // ],
            spellchecker_languages: "Arabic=ar,Azerbaijani=az,Bulgarian=bg,Bengali=bn,Bosnian=bs,Catalan=ca,Czech=cs,Welsh=cy,Danish=da,German=de,Greek=el,+English / British English=en,Esperanto=eo,Spanish / Argentinian Spanish / Mexican Spanish / Nicaraguan Spanish=es,Estonian=et,Basque=eu,Persian=fa,Finnish=fi,French=fr,Frisian=fy,Irish=ga,Galician=gl,Hebrew=he,Hindi=hi,Croatian=hr,Hungarian=hu,Indonesian=id,Icelandic=is,Italian=it,Japanese=ja,Georgian=ka,Kazakh=kk,Khmer=km,Kannada=kn,Korean=ko,Lithuanian=lt,Latvian=lv,Macedonian=mk,Malayalam=ml,Mongolian=mn,Norwegian Bokmal=nb,Nepali=ne,Dutch=nl,Norwegian Nynorsk=nn,Punjabi=pa,Polish=pl,Portuguese / Brazilian Portuguese=pt,Romanian=ro,Russian=ru,Slovak=sk,Slovenian=sl,Albanian=sq,Serbian / Serbian Latin=sr,Swedish=sv,Swahili=sw,Tamil=ta,Telugu=te,Thai=th,Turkish=tr,Tatar=tt,Ukrainian=uk,Urdu=ur,Vietnamese=vi,Simplified Chinese / Traditional Chinese=zh",
            // elements: "id_form-0-content",
            // theme_advanced_buttons3: "forecolorpicker,fontselect,fontsizeselect",
            // custom_undo_redo_levels: 10,
            // skin: "o2k7",
            // cleanup_on_startup: true,
            // theme_advanced_buttons1: "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect",
            directionality: "rtl",

            // theme_advanced_buttons2: "bullist,numlist,|,outdent,indent,|,undo,redo,|,hr",
            // theme: "advanced",
            // strict_loading_mode: 1,
            // mode: "exact"
            // toolbar: "vazir",
            // font_formats: "vazir",
        })
    </script>
</body>


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/form-editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:19:46 GMT -->

</html>