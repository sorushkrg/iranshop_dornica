<?php
require_once "../../checkLogin.php";
// Load the tng class
require_once "../../includes/tng/tNG.inc.php";
// Make a transaction dispatcher instance
$tNGs = new tNG_dispatcher("");
// Make unified connection variable
$conn_cn = new KT_connection($cn, $database_cn);

// Start trigger
$formValidation = new tNG_FormValidation();
$formValidation->addField("category_title", true, "text", "", "", "", "لطفا موضوع را وارد نمایید.");
$formValidation->addField("image", true, "text", "", "", "", "لطفا عکس را وارد نمایید.");
$tNGs->prepareValidation($formValidation);
// End trigger


//start Trigger_ImageUpload trigger
//remove this line if you want to edit the code by hand 
$ImgMaxSize = 5000;
$ImgAllowedExtensions = "gif, jpg, jpe, jpeg, png";

function Trigger_ImageUpload(&$tNG)
{
    global $ImgMaxSize, $ImgAllowedExtensions;

    $uploadObj = new tNG_ImageUpload($tNG);
    $uploadObj->setFormFieldName("image");
    $uploadObj->setDbFieldName("image");
    $uploadObj->setFolder("../../../attachment/image/blogHTML/");
    // $uploadObj->setResize("true", 600, 600);
    $uploadObj->setMaxSize($ImgMaxSize);
    $uploadObj->setAllowedExtensions($ImgAllowedExtensions);
    $uploadObj->setRename("auto");
    // var_dump($uploadObj);
    return $uploadObj->Execute();
}
//end Trigger_ImageUpload trigger


// Make an insert transaction instance
$ins_ctg = new tNG_insert($conn_cn);
$tNGs->addTransaction($ins_ctg);
// Register triggers
$ins_ctg->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "send");
$ins_ctg->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$ins_ctg->registerTrigger("END", "Trigger_Default_Redirect", 99, "blogCategori_list.php?add=1");
$ins_ctg->registerTrigger("AFTER", "Trigger_ImageUpload", 97);

// Add columns
$ins_ctg->setTable("category_blog");
$ins_ctg->addColumn("category_title", "STRING_TYPE", "POST", "category_title");
$ins_ctg->addColumn("image", "FILE_TYPE", "FILES", "image");
$ins_ctg->addColumn("status", "STRING_TYPE", "POST", "status");
$ins_ctg->setPrimaryKey("id", "NUMERIC_TYPE");

// Execute all the registered transactions

$db->where("category_title", _ktx($_POST["category_title"]));
$categoryDuplicate = $db->getValue("category_blog", "category_title");
$errorDup = "";

if ($categoryDuplicate) {
    $errorDup = "عنوان تکراری است";
} else {
    $tNGs->executeTransactions();
}

?>


<!doctype html>
<html lang="en" dir="rtl">


<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:20:04 GMT -->

<head>

    <?php require_once "../../layout/head.php" ?>
    <link href="../../includes/skins/mxkollection3.css" rel="stylesheet" type="text/css" media="all" />
    <script src="../../includes/common/js/base.js" type="text/javascript"></script>
    <script src="../../includes/common/js/utility.js" type="text/javascript"></script>
    <?= $tNGs->displayValidationRules(); ?>


    <title>دسته بندی - بلاگ - درج | لکسا - قالب مدیریت و داشبورد</title>
</head>
<?php require_once "../../layout/header.php" ?>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <!-- ========== Left Sidebar Start ========== -->

        <!--- Sidemenu -->
        <?php require_once "../../layout/sideBar.php" ?>
        <!-- Sidebar -->

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
                                <h4> دسته بندی - بلاگ - درج</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">لکسا</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">صفحات</a></li>
                                    <li class="breadcrumb-item active"> دسته بندی - بلاگ - درج</li>
                                </ol>
                            </div>
                        </div>

                    </div>
                    <!-- end page title -->

                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">فرم درج بلاگ</h4>
                                    <?php
                                    echo $tNGs->getErrorMsg();
                                    ?>
                                    <form method="post" action="<?= _ktx(KT_getFullUri()); ?>" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="title" class="form-label">عنوان</label>
                                            <input type="text" class="form-control" id="title" name="category_title">
                                            <div id="category_title_error_element" class="validation-error-label text-danger"></div>
                                            <p class="text-danger"> <?= _ktx($errorDup) ?></p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="image" class="form-label">آپلود فایل</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                            <div id="image_error_element" class="validation-error-label text-danger"></div>
                                        </div>
                                        <div class="mb-3">
                                            <span class="help-block m-3">فرمتهای مجاز: <?= _ktx($ImgAllowedExtensions) ?>. حداکثر اندازه فایل: <?= _ktx($ImgMaxSize) ?>KB</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">وضعیت</label>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status" id="status1" value="1" checked>
                                                    <label class="form-check-label" for="status1">فعال</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status" id="status2" value="0">
                                                    <label class="form-check-label" for="status2">غیرفعال</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="send">ارسال</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>
        <!-- end main content-->
        <?php require_once "../../layout/footer.php" ?>
    </div>
    <!-- END layout-wrapper -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="../../assets/libs/jquery/jquery.min.js"></script>
    <script src="../../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="../../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../../assets/libs/node-waves/waves.min.js"></script>
    <script src="../../assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <script src="../../assets/js/app.js"></script>

</body>


<script>
    var ImgMaxSize = "<?= $ImgMaxSize ?>";
    var ImgAllowedExtensions = "<?= $ImgAllowedExtensions ?>";

    $("#image").change(function() {
        Filevalidation("image", ImgMaxSize, ImgAllowedExtensions)
    });
</script>

<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:20:04 GMT -->

</html>