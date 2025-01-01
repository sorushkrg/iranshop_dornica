<div class="vertical-menu">

<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">منو اصلی </li>

            <li>
                <a href="<?= $nav_path ?>index.php" class="waves-effect">
                    <i class="mdi mdi-view-dashboard"></i>
                    <span class="badge rounded-pill bg-primary float-end">2</span>
                    <span>داشبورد</span>
                </a>
            </li>




            <li class="menu-title">اجزاء</li>



            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-account-box"></i>
                    <span> احراز هویت </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="<?= $nav_path ?>pages-login.php">وارد شدن</a></li>
                    <li><a href="<?= $nav_path ?>pages-register.php">ثبت نام</a></li>
                    <li><a href="<?= $nav_path ?>pages-recoverpw.php">بازیابی رمز عبور</a></li>
                    <li><a href="<?= $nav_path ?>pages-lock-screen.php">صفحه قفل</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ion ion-md-copy"></i>
                    <span> بلاگ</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="<?= $nav_path ?>plugins/blog/blog_add.php">درج</a></li>
                    <li><a href="<?= $nav_path ?>plugins/blog/blog_list.php">لیست</a></li>
                </ul>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ion ion-md-copy"></i>
                    <span> بلاگ-دسته بندی </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="<?= $nav_path ?>plugins/blogCategori/blogCategori_add.php">درج</a></li>
                    <li><a href="<?= $nav_path ?>plugins/blogCategori/blogCategori_list.php">لیست</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ion ion-md-copy"></i>
                    <span> بلاگ-نویسنده</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="<?= $nav_path ?>plugins/authors/authors_add.php">درج</a></li>
                    <li><a href="<?= $nav_path ?>plugins/authors/authors_list.php">لیست</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>