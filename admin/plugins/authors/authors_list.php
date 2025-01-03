<?php
require_once "../../checkLogin.php";
// Load the required classes
require_once('../../includes/tfi/TFI.php');
require_once('../../includes/tso/TSO.php');
require_once('../../includes/nav/NAV.php');

// Make unified connection variable
$conn_cn = new KT_connection($cn, $database_cn);

// Filter
$tfi_listrsAuth = new TFI_TableFilter($conn_cn, "tfi_listrsAuth");
$tfi_listrsAuth->addColumn("firstName", "STRING_TYPE", "firstName", "%");
$tfi_listrsAuth->addColumn("lastName", "STRING_TYPE", "lastName", "%");
$tfi_listrsAuth->addColumn("status", "NUMERIC_TYPE", "status", "=");
$tfi_listrsAuth->Execute();

// Sorter
$tso_listrsAuth = new TSO_TableSorter("tso_listrsAuth");
$tso_listrsAuth->addColumn("id");
$tso_listrsAuth->addColumn("firstName");
$tso_listrsAuth->addColumn("lastName");
$tso_listrsAuth->addColumn("status");
$tso_listrsAuth->setDefault("id ASC");
$tso_listrsAuth->Execute();

// Change Show Per Page
if (isset($_POST['tfi_listrsAuth_pgnum']))
    @$_SESSION['tfi_listrsAuth_pgnum'] = GetSQLValueString($_POST['tfi_listrsAuth_pgnum'], "int");
else if (_ktx(@$_SESSION['tfi_listrsAuth_pgnum']) == '')
    @$_SESSION['tfi_listrsAuth_pgnum'] = 10;


// Navigation
$nav_listrsbnk = new NAV_Regular("nav_listrsbnk", "rs1", "../", $_SERVER['PHP_SELF'], _ktx(@$_SESSION['tfi_listrsAuth_pgnum']));


//NeXTenesio3 Special List Recordset
$maxRows_rs1 = $_SESSION['max_rows_nav_listrsbnk'];
$pageNum_rs1 = 0;
if (isset($_GET['pageNum_rs1'])) {
    $pageNum_rs1 = $_GET['pageNum_rs1'];
}
$startRow_rs1 = $pageNum_rs1 * $maxRows_rs1;

// Defining List Recordset variable
$NXTFilter_rs1 = "1=1";
if (isset($_SESSION['filter_tfi_listrsAuth'])) {
    $NXTFilter_rs1 = _ktx($_SESSION['filter_tfi_listrsAuth']);
}

// Defining List Recordset variable
$NXTSort_rs1 = "id DESC";
if (isset($_SESSION['sorter_tso_listrsAuth'])) {
    $NXTSort_rs1 = _ktx($_SESSION['sorter_tso_listrsAuth']);
}

mysqli_select_db($cn, $database_cn);

$query_rs1 = "SELECT * FROM authors_blog WHERE  {$NXTFilter_rs1}  ORDER BY  {$NXTSort_rs1} ";
$query_limit_rs1 = sprintf("%s LIMIT %d, %d", $query_rs1, $startRow_rs1, $maxRows_rs1);
$rs1 = mysqli_query($cn, $query_limit_rs1) or die(sql_error_handler($cn));
$row_rs1 = mysqli_fetch_assoc($rs1);

if (isset($_GET['totalRows_rs1'])) {
    $totalRows_rs1 = $_GET['totalRows_rs1'];
} else {
    $all_rs1 = mysqli_query($cn, $query_rs1);
    $totalRows_rs1 = mysqli_num_rows($all_rs1);
}
$totalPages_rs1 = ceil($totalRows_rs1 / $maxRows_rs1) - 1;
//End NeXTenesio3 Special List Recordset

$nav_listrsbnk->checkBoundries();
$queryString_rs1 = sprintf("&totalRows_rs1=%d%s", $totalRows_rs1, $queryString_rs1);
if (isset($_GET['pageNum_rs1']) and $_GET['pageNum_rs1'] != "")
    $radif = $_GET['pageNum_rs1'] * $maxRows_rs1 + 1;
else
    $radif = 1;

?>


<!doctype html>
<html lang="en" dir="rtl">



<head>

    <?php require_once "../../layout/head.php" ?>

    <title> بلاگ-نویسنده-لیست | لکسا - قالب مدیریت و داشبورد</title>


</head>


<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php require_once "../../layout/header.php" ?>
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <?php require_once "../../layout/sideBar.php" ?>
                <!-- Sidebar -->
            </div>
        </div>
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
                                <h4> بلاگ - نویسنده  - لیست</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">لکسا</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">صفحات</a></li>
                                    <li class="breadcrumb-item active"> بلاگ -  نویسنده - لیست</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row justify-content-center">
                        <legend>
                            <div class="flex">
                                <a href="authors_add.php" class="btn btn-primary"> ثبت رکورد جدید</a>

                                <a href="<?php echo $nav_listrsbnk->getShowAllLink(); ?>" class="btn btn-secondary"><?php echo NXT_getResource("Show"); ?>
                                    <?php
                                    if (@$_GET['show_all_nav_listrsbnk'] == 1)
                                        echo $_SESSION['default_max_rows_nav_listrsbnk'];
                                    else
                                        echo NXT_getResource("all");

                                    echo ' ' . NXT_getResource("records"); ?></a>

                                <?php
                                if (@$_SESSION['has_filter_tfi_listrsAuth'] == 1) {
                                ?>
                                    <a href="<?php echo $tfi_listrsAuth->getResetFilterLink(); ?>" class="btn btn-warning"><i class="icon-search4"></i> <?php echo NXT_getResource("Reset filter"); ?></a>
                                <?php
                                } else { ?>
                                    <a href="<?php echo $tfi_listrsAuth->getShowFilterLink(); ?>" class="btn btn-info"><i class="icon-search4"></i> <?php echo NXT_getResource("Show filter"); ?></a>
                                <?php } ?>

                                <div class="btn btn-secondary m-2">
                                    <div class="form-group row align-items-center">
                                        <label class="col-lg-4 col-form-label text-center" style="padding-top:8px">تعداد نمایش</label>
                                        <div class="col-lg-8">
                                            <form name="formpgnum" id="formpgnum" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                                <select name="tfi_listrsAuth_pgnum" id="tfi_listrsAuth_pgnum" class="form-control" onchange="submit();" tabindex="1">
                                                    <option value="10" <?php if (!(strcmp('10', _ktx(@$_SESSION['tfi_listrsAuth_pgnum'])))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>10</option>
                                                    <option value="15" <?php if (!(strcmp('15', _ktx(@$_SESSION['tfi_listrsAuth_pgnum'])))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>15</option>
                                                    <option value="20" <?php if (!(strcmp('20', _ktx(@$_SESSION['tfi_listrsAuth_pgnum'])))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>20</option>
                                                    <option value="30" <?php if (!(strcmp('30', _ktx(@$_SESSION['tfi_listrsAuth_pgnum'])))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>30</option>
                                                    <option value="50" <?php if (!(strcmp('50', _ktx(@$_SESSION['tfi_listrsAuth_pgnum'])))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>50</option>
                                                    <option value="100" <?php if (!(strcmp('100', _ktx(@$_SESSION['tfi_listrsAuth_pgnum'])))) {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>100</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </legend>



                        <div class="col-lg-10">
                            <div class="card">
                                <div class="card-body">

                                    <form action="<?= _ktx(KT_getFullUri()); ?>" method="post" id="form1">
                                        <div class="table-responsive">
                                            <table class="table table-bordered border-primary mb-0">
                                                <thead>
                                                    <tr>
                                                        <th><a href="<?php echo $tso_listrsAuth->getSortLink("id") ?>">ردیف</a></th>
                                                        <th id="firstName"><a href="<?php echo $tso_listrsAuth->getSortLink("firstName") ?>">نام</a></th>
                                                        <th id="lastName"><a href="<?php echo $tso_listrsAuth->getSortLink('lastName'); ?>">نام خانوادگی</a></th>
                                                        <th><a href="<?php echo $tso_listrsAuth->getSortLink('status'); ?>">وضعیت</a></th>
                                                        <th></th>
                                                    </tr>
                                                    <?php
                                                    // Show IF Conditional region3
                                                    if (@$_SESSION['has_filter_tfi_listrsAuth'] == 1) {
                                                    ?>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <input type="text" name="tfi_listrsAuth_firstName" id="tfi_listrsAuth_firstName" class="form-control" value="<?php echo _ktx(@$_SESSION['tfi_listrsAuth_firstName']); ?>" autocomplete="off" tabindex="2" />
                                                            </td>
                                                            <td>
                                                                <input type="text" name="tfi_listrsAuth_lastName" id="tfi_listrsAuth_lastName" class="form-control" value="<?php echo _ktx(@$_SESSION['tfi_listrsAuth_lastName']); ?>" autocomplete="off" tabindex="2" />
                                                            </td>
                                                            <td>
                                                                <select name="tfi_listrsAuth_status" id="tfi_listrsAuth_status" class="form-control" tabindex="3">
                                                                    <option value="" <?php if (!(strcmp("", _ktx(@$_SESSION['tfi_listrsAuth_status'])))) {
                                                                                            echo "selected=\"selected\"";
                                                                                        } ?>></option>
                                                                    <option value="1" <?php if (!(strcmp(1, _ktx(@$_SESSION['tfi_listrsAuth_status'])))) {
                                                                                            echo "selected=\"selected\"";
                                                                                        } ?>>فعال</option>
                                                                    <option value="0" <?php if (!(strcmp(0, _ktx(@$_SESSION['tfi_listrsAuth_status'])))) {
                                                                                            echo "selected=\"selected\"";
                                                                                        } ?>>غیرفعال</option>
                                                                </select>
                                                            </td>
                                                            <td><input type="submit" name="tfi_listrsAuth" class="btn btn-primary btn-xs" value="<?php echo NXT_getResource("Filter"); ?>" tabindex="4" /></td>
                                                        </tr>
                                                    <?php }
                                                    // endif Conditional region3
                                                    ?>
                                                </thead>

                                                <tbody>
                                                    <?php if ($totalRows_rs1 == 0) { // Show if recordset empty 
                                                    ?>
                                                        <tr>
                                                            <td colspan="5">اطلاعاتی یافت نشد .</td>
                                                        </tr>
                                                    <?php } // Show if recordset empty 
                                                    ?>
                                                    <?php if ($totalRows_rs1 > 0) { // Show if recordset not empty 
                                                    ?>
                                                        <?php do { ?>
                                                            <tr>
                                                                <td><?= _ktx($row_rs1["id"]) ?> </td>
                                                                <td><?= _ktx($row_rs1['firstName']) ?></td>
                                                                <td><?= _ktx($row_rs1['lastName']) ?></td>
                                                                <td>
                                                                    <?php checkstatus($row_rs1['status']); ?>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <a href="authors_edit.php?id=<?php echo ($row_rs1['id']); ?>"><i class="mdi mdi-update"></i></a>
                                                                        <a href="authors_delete.php?id=<?php echo ($row_rs1['id']); ?>" title="حذف"><i class="mdi mdi-delete"></i></a>

                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        <?php } while ($row_rs1 = mysqli_fetch_assoc($rs1)); ?>
                                                    <?php } // Show if recordset not empty 
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>




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


<script src="../../includes/common/js/base.js" type="text/javascript"></script>
<script src="../../includes/common/js/utility.js" type="text/javascript"></script>

<script src="../../includes/nxt/scripts/list.js" type="text/javascript"></script>
<script src="../../includes/nxt/scripts/list.js.php" type="text/javascript"></script>
<script type="text/javascript">
    $NXT_LIST_SETTINGS = {
        duplicate_buttons: false,
        duplicate_navigation: false,
        row_effects: false,
        show_as_buttons: false,
        record_counter: false
    }
</script>

<!-- Mirrored from theme-script.ir/templates/lexa/Lexa-RTL/RTL-lexa-teal/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Dec 2024 17:20:04 GMT -->

</html>

<?php
mysqli_free_result($rs1);
?>