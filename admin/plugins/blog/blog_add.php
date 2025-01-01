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
$formValidation->addField("image", true, "text", "", "", "", "لطفا عکس را وارد نمایید.");
$formValidation->addField("content", true, "text", "", "", "", "لطفا توضیحات را وارد نمایید.");
$formValidation->addField("published_date", true, "text", "", "", "", "لطفا زمان انتشار را وارد نمایید.");
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
    $uploadObj->setFolder("../../../attachment/image/blogPage/");
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
$ins_ctg->registerTrigger("END", "Trigger_Default_Redirect", 99, "blog_list.php?add=1");
$ins_ctg->registerTrigger("AFTER", "Trigger_ImageUpload", 97);

// Add columns
$ins_ctg->setTable("blog_page");
$ins_ctg->addColumn("author_id", "STRING_TYPE", "POST", "author_id");
$ins_ctg->addColumn("category_id", "STRING_TYPE", "POST", "category_id");
$ins_ctg->addColumn("content", "STRING_TYPE", "POST", "content");
$ins_ctg->addColumn("image", "FILE_TYPE", "FILES", "image");
$ins_ctg->addColumn("published_date", "DATE_TYPE", "POST", "published_date");
$ins_ctg->addColumn("created_at", "DATE_TYPE", "VALUE", date("Y-m-d H:i:s"));
$ins_ctg->addColumn("status", "STRING_TYPE", "POST", "status");
$ins_ctg->setPrimaryKey("id", "NUMERIC_TYPE");

// Execute all the registered transactions
$db->where("category_id", _ktx($_POST["category_id"]));
$blogDuplicate = $db->getValue("blog_page", "category_id");
$errorDup = "";

if ($blogDuplicate) {
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

    <title> بلاگ - درج | لکسا - قالب مدیریت و داشبورد</title>
</head>


<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php require_once "../../layout/header.php" ?>
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
                        <div class="col-md-6">
                            <div class="page-title-box">
                                <h4>بلاگ - درج</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">لکسا</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">صفحات</a></li>
                                    <li class="breadcrumb-item active">بلاگ - درج</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-10">
                            <div class="card">
                                <div class="card-body">
                                    <?php
                                    echo $tNGs->getErrorMsg();
                                    ?>
                                    <form action="<?= _ktx(KT_getFullUri()); ?>" class="needs-validation" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="image" class="form-label">آپلود فایل</label>
                                                    <input type="file" class="form-control" id="image" name="image">
                                                    <div id="image_error_element" class="validation-error-label text-danger"></div>
                                                </div>
                                                <div>
                                                    <span class="help-block m-3">فرمتهای مجاز: <?= _ktx($ImgAllowedExtensions) ?>. حداکثر اندازه فایل: <?= _ktx($ImgMaxSize) ?>KB</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">ناحیه متنی</label>
                                                    <div>
                                                        <textarea class="form-control" placeholder="اینجا تایپ کنید" name="content" rows="2"></textarea>
                                                        <div id="content_error_element" class="validation-error-label text-danger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="col-md-2 col-form-label">زمان انتشار</label>
                                                    <input class="form-control" type="date" name="published_date">
                                                    <div id="published_date_error_element" class="validation-error-label text-danger"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <!-- query athors -->
                                            <?php
                                            $db->where("status", 1);
                                            $authors = $db->get("authors_blog");
                                            ?>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">نویسنده</label>
                                                    <select name="author_id" id="author_id">
                                                        <?php foreach ($authors as $value) { ?>
                                                            <option value="<?= _ktx($value["id"]) ?>"> <?= _ktx($value["firstName"]) . " " . _ktx($value["lastName"])  ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <?php
                                            $db->where("status", 1);
                                            $category = $db->get("category_blog");
                                            ?>
                                            <!-- end col -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="validationCustom02">دسته بندی بلاگ</label>
                                                    <select name="category_id" id="category">
                                                        <?php foreach ($category as $value) { ?>
                                                            <option value="<?= _ktx($value["id"]) ?>"> <?= _ktx($value["category_title"]) ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <p class="text-danger"><?= _ktx($errorDup) ?></p>
                                                </div>
                                            </div>
                                            <!-- end col -->


                                        </div>
                                        <!-- end row -->
                                        <div class="row">
                                            <div class="col-md-4">
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
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <button class="btn btn-primary" type="submit" name="send">ارسال فرم</button>
                                    </form>
                                    <!-- end form -->
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                    </div>
                    <!-- end page title -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>

        <?php require_once "../../layout/footer.php" ?>
        <!-- end main content-->

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

<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:20:04 GMT -->

</html>