<?php
require_once "../../checkLogin.php";
// Load the tng class
require_once "../../includes/tng/tNG.inc.php";
// Make a transaction dispatcher instance

// get id 
$id = _ktx($_GET['id']);

$tNGs = new tNG_dispatcher("");
// Make unified connection variable
$conn_cn = new KT_connection($cn, $database_cn);

// Start trigger
$formValidation = new tNG_FormValidation();
$formValidation->addField("firstName", true, "text", "", "", "", "لطفا نام را وارد نمایید.");
$formValidation->addField("lastName", true, "text", "", "", "", "لطفا نام خانوادگی را وارد نمایید.");
$formValidation->addField("rules", true, "text", "", "", "", "لطفا قوانین را تایید نمایید.");
$tNGs->prepareValidation($formValidation);
// End trigger

// Make an insert transaction instance
$ins_auth = new tNG_update($conn_cn);
$tNGs->addTransaction($ins_auth);
// Register triggers
$ins_auth->registerTrigger("STARTER", "Trigger_Default_Starter", 1, "POST", "send");
$ins_auth->registerTrigger("BEFORE", "Trigger_Default_FormValidation", 10, $formValidation);
$ins_auth->registerTrigger("END", "Trigger_Default_Redirect", 99, "authors_list.php?edit=1");

// Add columns
$ins_auth->setTable("authors_blog");
$ins_auth->addColumn("firstName", "STRING_TYPE", "POST", "firstName");
$ins_auth->addColumn("lastName", "STRING_TYPE", "POST", "lastName");
$ins_auth->addColumn("rules", "STRING_TYPE", "POST", "rules");
$ins_auth->addColumn("status", "STRING_TYPE", "POST", "status");
$ins_auth->setPrimaryKey("id", "NUMERIC_TYPE", "VALUE", $id);

// Execute all the registered transactions
$db->where("firstName", _ktx($_POST["firstName"]));
$db->where("lastName", _ktx($_POST["lastName"]));
$db->where("id", $id, "!=");
$authorDuplicate = $db->getOne("authors_blog");
$errorDup = "";

if ($authorDuplicate) {
    $errorDup = "این فرد تکراری است";
} else {
    $tNGs->executeTransactions();
}



// Get the transaction recordset
$rsbnk = $tNGs->getRecordset("authors_blog");
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

    <title> نویسنده - درج | لکسا - قالب مدیریت و داشبورد</title>
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
                        <div class="col-md-6">
                            <div class="page-title-box">
                                <h4>نویسنده - درج</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">لکسا</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">صفحات</a></li>
                                    <li class="breadcrumb-item active">نویسنده - درج</li>
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
                                    <form action="<?= _ktx(KT_getFullUri()); ?> " class="needs-validation" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">نام کوچک</label>
                                                    <input type="text" class="form-control" id="validationCustom01" name="firstName" value="<?= _ktx($row_rsbnk['firstName']) ?>">
                                                    <div id="firstName_error_element" class="validation-error-label text-danger"></div>
                                                   
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="validationCustom02">نام خانوادگی</label>
                                                    <input type="text" class="form-control" id="validationCustom02" placeholder="نام خانوادگی" name="lastName" value="<?= _ktx($row_rsbnk['lastName']) ?>">
                                                    <div id="lastName_error_element" class="validation-error-label text-danger"></div>
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
                                                <div class="mb-3">
                                                    <div class="checkbox text-danger">
                                                        <label for="tashilat" class="text-dark">
                                                            قوانین سایت
                                                        </label>
                                                        <input name="rules" id="rules" type="checkbox" class="styled" value="1" tabindex="67" <?php if (!(strcmp(1, KT_escapeAttribute($row_rsbnk['rules'])))) {
                                                                                                                                                    echo 'checked="checked"';
                                                                                                                                                } ?> />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <button class="btn btn-primary" type="submit" name="send">ارسال فرم</button>
                                        <a class="btn btn-danger" href="authors_list.php" name="cancel">لغو</a>
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