<?php
require_once "../../checkLogin.php";
// Load the tng class

// get id
$id = _ktx($_GET['id']);

require_once "../../includes/tng/tNG.inc.php";
// Make a transaction dispatcher instance
$tNGs = new tNG_dispatcher("");
// Make unified connection variable
$conn_cn = new KT_connection($cn, $database_cn);

// Start trigger
$formValidation = new tNG_FormValidation();
$formValidation->addField("category_title", true, "text", "", "", "", "لطفا موضوع را وارد نمایید.");
$formValidation->addField("rules", true, "text", "", "", "", "لطفا قوانین را تایید نمایید.");
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
$ins_ctg = new tNG_update($conn_cn);
$tNGs->addTransaction($ins_ctg);
// Register triggers
$ins_ctg->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "send");
$ins_ctg->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$ins_ctg->registerTrigger("END", "Trigger_Default_Redirect", 99, "blogCategori_list.php?edit=1");
$ins_ctg->registerTrigger("AFTER", "Trigger_ImageUpload", 97);

// Add columns
$ins_ctg->setTable("category_blog");
$ins_ctg->addColumn("category_title", "STRING_TYPE", "POST", "category_title");
$ins_ctg->addColumn("image", "FILE_TYPE", "FILES", "image");
$ins_ctg->addColumn("status", "STRING_TYPE", "POST", "status");
$ins_ctg->addColumn("rules", "STRING_TYPE", "POST", "rules");
$ins_ctg->setPrimaryKey("id", "NUMERIC_TYPE", "VALUE", $id);

// Execute all the registered transactions

$db->where("category_title", _ktx($_POST["category_title"]));
$db->where("id", $id, "!=");
$categoryDuplicate = $db->getValue("category_blog", "category_title");
$errorDup = "";

if ($categoryDuplicate) {
    $errorDup = "عنوان تکراری است";
} else {
    $tNGs->executeTransactions();
}

// Get the transaction recordset
$rsbnk = $tNGs->getRecordset("category_blog");
$row_rsbnk = mysqli_fetch_assoc($rsbnk);
$totalRows_rsbnk = mysqli_num_rows($rsbnk);



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
                        <?php
                        if ($errorDup) {
                        ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                                <?= $errorDup ?>
                            </div>
                        <?php
                        } ?>
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
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-body KT_tngtable">
                                    <?php
                                    echo $tNGs->getErrorMsg();
                                    ?>
                                    <form method="post" action="<?= _ktx(KT_getFullUri()); ?>" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="title" class="form-label">نام دسته بندی</label>
                                                    <input type="text" class="form-control" id="title" name="category_title" placeholder="نام دسته بندی" value="<?= _ktx($row_rsbnk["category_title"]) ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="image" class="form-label">آپلود فایل</label>
                                                    <input type="file" class="form-control" id="image" name="image">
                                                </div>
                                                <div class="mb-3">
                                                    <span class="help-block m-3">فرمتهای مجاز: <?= _ktx($ImgAllowedExtensions) ?>. حداکثر اندازه فایل: <?= _ktx($ImgMaxSize) ?>KB</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">وضعیت</label>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="status" id="status1" value="1" <?php if (!(strcmp(1, KT_escapeAttribute($row_rsbnk['status'])))) {
                                                                                                                                                    echo 'checked="checked"';
                                                                                                                                                } ?>>
                                                            <label class="form-check-label" for="status1">فعال</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="status" id="status2" value="0" <?php if (!(strcmp(0, KT_escapeAttribute($row_rsbnk['status'])))) {
                                                                                                                                                    echo 'checked="checked"';
                                                                                                                                                } ?>>
                                                            <label class="form-check-label" for="status2">غیرفعال</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>
                                                    <a href="../<?php if (file_exists("../../../attachment/image/blogHTML/" . $row_rsbnk['image']) && ($row_rsbnk['image'])) echo '../../attachment/image/blogHTML/' . KT_escapeAttribute($row_rsbnk['image']);
                                                                else echo 'assets/images/placeholder.jpg'; ?>" data-popup="lightbox">
                                                        <img src="../<?php if (file_exists("../../../attachment/image/blogHTML/" . $row_rsbnk['image']) && ($row_rsbnk['image'])) echo '../../attachment/image/blogHTML/' . KT_escapeAttribute($row_rsbnk['image']);
                                                                        else echo 'assets/images/placeholder.jpg'; ?>" style="width: 80px; border-radius: 2px;" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="checkbox">
                                                <label for="tashilat" class="text-dark">
                                                    قوانین سایت
                                                </label>
                                                <input name="rules" id="rules" type="checkbox" class="styled" value="1" tabindex="67" <?php if (!(strcmp(1, KT_escapeAttribute($row_rsbnk['rules'])))) {
                                                                                                                                            echo 'checked="checked"';
                                                                                                                                        } ?> />
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="send">ارسال</button>
                                        <a class="btn btn-danger" href="blogCategori_list.php" name="cancel">لغو</a>
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