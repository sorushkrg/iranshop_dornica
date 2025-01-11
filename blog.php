<!DOCTYPE html>
<html lang="fa" dir="rtl">


<head>
  <?php require_once "masterPage/head.php" ?>
  <title><?= testSecurity( $setting["site_name"]) ?>-بلاگ</title>
</head>


<body class="bg-gray-50">
  <!-- NAVBAR -->
  <?php require_once "masterPage/header.php" ?>
  <!-- MAIN -->

  <!-- categori query -->
  <?php
  $db->where("status", 1);
  $db->orderBy("sort", "desc");
  $category = $db->get("category_blog");

  ?>

  <div class="max-w-[1440px] mx-auto px-3">
    <div class="my-5 lg:my-10 p-1 md:p-3">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">


        <?php
        $sections = array_chunk($category, 3);
        foreach ($sections as $section) {
        ?>
          <div class="grid gap-4">
            <?php
            foreach ($section as $value) {
            ?>
              <a href="#" class="relative hover:scale-105 transition">
                <img class="h-auto w-full rounded-xl" src="attachment/image/blogHTML/<?=testSecurity( $value["image"] )?>" alt="">
                <div class="absolute top-0 bg-neutral-900 bg-opacity-70 rounded-xl w-full h-full flex justify-center items-center text-center text-white text-lg md:text-xl">
                  <?= testSecurity($value["category_title"]) ?>
                </div>
              </a>
            <?php
            }
            ?>
          </div>
        <?php
        }
        ?>
      </div>

      <!-- queryBlog -->
      <?php

      $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
      $articlesPerPage = 3;
      $db->pageLimit = $articlesPerPage;
      $db->join("category_blog c", "c.ID=b.category_id", "LEFT");
      $db->join("authors_blog a", "a.ID=b.author_id ", "LEFT");
      $db->where("b.status", 1);
      $blogProduct = $db->arraybuilder()->paginate("blog_page b", $page , "b.id , b.title , b.category_id , b.author_id  , b.image , c.category_title , b.content , a.firstName  , a.lastName ,  b.created_at" );
      $totalPages = $db->totalPages;
      ?>
      <?php
      /****************** withOut db library *****************************/
      // // pagintion logic //
      // $articlesPerPage = 3;
      // $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
      // $totalArticles = count($blogProduct);
      // $totalPages = ceil($totalArticles / $articlesPerPage);
      // $offset = ($page - 1) * $articlesPerPage;
      // $paginatedArticles = array_slice($blogProduct, $offset, $articlesPerPage);
      ?>
      <div class="md:flex w-full mt-14 gap-x-7">
        <div class="w-full md:w-8/12 lg:w-9/12">
          <?php foreach ($blogProduct as $value): ?>
            <a href="./blog(single).php?id=<?= testSecurity($value["id"]) ?>&category=<?= testSecurity($value["category_id"]) ?>&author=<?= testSecurity($value["author_id"]) ?>" class="flex flex-col sm:flex md:flex-row items-center shadow-sm p-2 mx-auto my-6 max-w-md md:max-w-full rounded-2xl bg-white">
              <div class="md:ml-6 mb-3 md:mb-0">
                <img class="hover:scale-105 transition rounded-xl w-full md:w-auto mx-auto max-h-56" src="attachment/image/blogPage/<?= testSecurity( $value["image"]) ?>" alt="<?= testSecurity($value['category_title']) ?>" />
              </div>
              <div class="grid gap-y-5 w-full">
                <div class=" flex-column items-center gap-4 ">
                <div class="text-lg opacity-80 mx-auto md:mx-0 md:h-10 pt-3 "><?= testSecurity($value['category_title'])?></div>
                <div class="text-lg opacity-80 mx-auto md:mx-0 md:h-10 pt-3 ">موضوع:<?=  " " . testSecurity($value['title'])?></div>
                </div>
                <div class="text-sm opacity-80 md:h-16 flex justify-start items-start"><?= testSecurity($value['content']) ?></div>
                <div class="flex justify-end text-xs opacity-75 md:gap-x-2 mx-auto md:mx-0">
                  <div><?= testSecurity($value['firstName']) ?> <?= testSecurity($value['lastName']) ?></div>
                  <div><?= testSecurity(jdate('Y/m/d', strtotime($value["created_at"]))) ?></div>
                </div>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
        <div class="w-full md:w-4/12 lg:w-3/12 max-w-xl mx-auto">
          <div class="lg:block p-3 space-y-4 mx-2 md:ml-3 bg-white rounded-2xl">
            <div class="opacity-90 border-b pb-3">
              جدیدترین مقاله ها:
            </div>

            <?php
            foreach ($latest_articles as $value) {
            ?>
              <a href='#' class='flex flex-row items-center p-1'>
                <div class='md:ml-3 mb-3 md:mb-0'>
                  <img class='hover:scale-105 transition rounded-lg w-44' src='attachment/image/blog/<?= testSecurity($value['image']) ?>' alt='<?= $value['name'] ?>'>
                </div>
                <div class='w-full px-3 md:px-0'>
                  <div class='mx-auto text-sm h-10 opacity-90'><?= testSecurity($value['name']) ?></div>
                  <div class='text-xs md:flex justify-start opacity-75 mx-auto md:mx-0 pb-3'>
                    <div><?= testSecurity(jdate('Y/m/d',  strtotime($value["created_at"]))) ?></div>
                  </div>
                </div>
              </a>

            <?php
            }
            ?>

          </div>
        </div>
      </div>


      <div class="flex justify-center mt-10">
        <ul class="flex list-none gap-2">


          <?php if ($page > 1): ?>
            <li><a href="?page=1" class="px-4 py-2 bg-gray-200 rounded">صفحه اول</a></li>
          <?php endif; ?>


          <?php if ($page > 1): ?>
            <li><a href="?page=<?= $page - 1 ?>" class="px-4 py-2 bg-gray-200 rounded">قبلی</a></li>
          <?php endif; ?>


          <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <li>
              <a href="?page=<?= $i ?>" class="px-4 py-2 <?= $i == $page ? 'bg-red-500 text-white' : 'bg-gray-200' ?> rounded">
                <?= $i ?>
              </a>
            </li>
          <?php endfor; ?>


          <?php if ($page < $totalPages): ?>
            <li><a href="?page=<?= $page + 1 ?>" class="px-4 py-2 bg-gray-200 rounded">بعدی</a></li>
          <?php endif; ?>


          <?php if ($page < $totalPages): ?>
            <li><a href="?page=<?= $totalPages ?>" class="px-4 py-2 bg-gray-200 rounded">صفحه آخر</a></li>
          <?php endif; ?>
        </ul>
      </div>


    </div>
  </div>
  <!-- FOOTER -->

  <?php require_once "masterPage/footer.php" ?>

</body>
<!--DROPDOWNS FOR NAVBAR-->
<script src="assets/js/flowbite.bundle.js"></script>
<script src="assets/js/alpine.js" defer>
</script>
<!--MOBILE NAVBAR-->
<script src="assets/js/navbar.js"></script>
<!-- SHOW MODAL SEARCH -->
<script src="assets/js/searchBox.js"></script>

<!-- Mirrored from amirtttk.ir/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2024 19:47:55 GMT -->

</html>