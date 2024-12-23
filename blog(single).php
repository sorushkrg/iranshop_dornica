<!DOCTYPE html>
<html lang="fa" dir="rtl">

<!-- Mirrored from amirtttk.ir/blog(single).html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2024 19:47:55 GMT -->

<head>
  <?php require_once "masterPage/head.php" ?>



  <!-- blog_details Query -->
  <?php
  $id = $_GET['id'];
  $db->where("blog_page.id", $id);
  $db->where("blog_details.status", 1);
  $db->join("blog_page", "blog_page.ID=blog_details.blog_id", "LEFT");
  $db->join("category_blog", "category_blog.ID=blog_details.category_id", "LEFT");
  $db->join("authors_blog", "authors_blog.ID=blog_details.author_id", "LEFT");
  $blog_details =  $db->getOne("blog_details");

  ?>

  <title><?= testSecurity($setting["site_name"]) ?>-<?= testSecurity($blog_details["category_title"]) ?>-بلاگ</title>
</head>

<body class="bg-gray-50">
  <!-- NAVBAR -->
  <?php require_once "masterPage/header.php" ?>
  <!-- MAIN -->
  <div class="max-w-[1440px] mx-auto px-3">
    <div class="mt-0 mb-5 lg:mt-10 lg:mb-8 p-1 md:p-3">
      <div class="md:flex w-full gap-x-7">
        <div class="w-full md:w-8/12 lg:w-9/12">



          <span class="flex flex-col py-2 px-3 mt-6 lg:mt-0 max-w-5xl rounded-2xl bg-white">
            <div>
              <div class="flex flex-wrap gap-x-3 text-xs opacity-75 py-1">
                <div class="flex">
                  <div>تاریخ: </div>
                  <div><?= testSecurity(jdate('Y/m/d', strtotime($blog_details["created_at"]))) ?></div>
                </div>
                <div class="flex">
                  <div>نویسنده: </div>
                  <div><?= testSecurity($blog_details["firstName"]) . " " . testSecurity($blog_details["lastName"]) ?></div>
                </div>
                <div class="flex">
                  <div>دسته بندی: </div>
                  <div><?= testSecurity($blog_details["category_title"]) ?></div>
                </div>
                <div class="flex">
                  <div>امتیاز:</div>
                  <div><?= testSecurity($blog_details["rate"]) ?></div>
                </div>
              </div>
            </div>
            <img class="rounded-2xl my-3" src="attachment/image/blogHTML/<?= testSecurity($blog_details["image"]) ?>" alt="">
            <div>
              <div class="text-2xl opacity-95 py-3"><?= testSecurity($blog_details["category_title"]) ?></div>
              <div class="opacity-70 pb-3 leading-6 text-sm">
                <?= testSecurity($blog_details["description"]) ?>
              </div>
            </div>
          </span>




          <!-- parent Comment query -->
          <?php
          $db->where("blog_id", $id);
          $db->where("status", 1);
          $db->where("parent_id", 0);
          $comment_blog = $db->get("comment_blog");
          ?>
          <!-- BOX COMMENTS -->
          <div class="flex flex-col py-4 px-4 my-6 max-w-5xl rounded-2xl bg-white">
            <!-- UO COMMENTS -->
            <div>
              <div>نظرات</div>
              <div class="pr-5 opacity-70 text-xs"><?= $db->count ?>نظر</div>
            </div>

            <!-- COMMENT -->
            <?php foreach ($comment_blog as  $value) { ?>

              <div class="bg-gray-50 rounded-xl px-5 py-3 my-2">
                <div class="flex items-center">
                  <div>
                    <img class="w-10" src="attachment/image/userNotImage.png" alt="">
                  </div>
                  <div class="text-sm opacity-60 pr-1">
                    نوشته شده توسط <?= testSecurity($value["name"]) ?>
                  </div>
                </div>
                <div class="opacity-60 text-sm py-3">
                  <?= testSecurity($value["content"]) ?>
                </div>

                <div class="flex left-auto">
                  <a href="<?= (isset($_SESSION["user_id"])) ? "#content" : "#name"; ?>" data-commentid="<?= testSecurity($value["id"]) ?>" class="reply mr-auto px-2 sm:px-4 py-2 opacity-80 md:w-auto text-xs sm:text-sm xl:text-base">
                    پاسخ
                  </a>
                </div>
                <!--response query-->
                <?php
                $db->where("parent_id", $value["id"]);
                $db->where("status", 1);
                $replies = $db->get("comment_blog");
                ?>

                <div class="pl-4 mt-2">
                  <?php foreach ($replies as $reply) { ?>
                    <div class="bg-gray-100 rounded-xl pl-2 pr-5 sm:pr-8 py-3 my-2">
                      <div class="flex items-center">
                        <div>
                          <img class="w-10" src="attachment/image/userNotImage.png" alt="">
                        </div>
                        <div class="text-sm opacity-60 pr-1">
                          پاسخ داده شده توسط <?= testSecurity($reply["name"]) ?>
                        </div>
                      </div>
                      <div class="opacity-60 text-sm py-3">
                        <?= testSecurity($reply["content"]) ?>
                      </div>
                      <div class="flex left-auto">
                        <a href="<?= (isset($_SESSION["user_id"])) ? "#content" : "#name"; ?>" data-commentid="<?= testSecurity($reply["id"]) ?>" class="reply  mr-auto px-2 sm:px-4 py-2 opacity-80 md:w-auto text-xs sm:text-sm xl:text-base flex justify-center items-center">
                          پاسخ
                        </a>
                      </div>

                      <!-- two reply query -->
                      <?php
                      $db->where("parent_id", $reply["id"]);
                      $db->where("status", 1);
                      $rep_Reply = $db->get("comment_blog");
                      ?>

                      <?php foreach ($rep_Reply as $doubleRep) { ?>
                        <div class="bg-gray-50 rounded-xl pl-2 pr-5 sm:pr-8 py-3 my-2">
                          <div class="flex items-center">
                            <div>
                              <img class="w-10" src="attachment/image/userNotImage.png" alt="">
                            </div>
                            <div class="text-sm opacity-60 pr-1">
                              پاسخ داده شده توسط <?= testSecurity($doubleRep["name"]) ?>
                            </div>
                          </div>
                          <div class="opacity-60 text-sm py-3">
                            <?= testSecurity($doubleRep["content"]) ?>
                          </div>
                          <div class="flex left-auto">
                            <a href="<?= (isset($_SESSION["user_id"])) ? "#content" : "#name"; ?>" data-commentid="<?= testSecurity($doubleRep["id"]) ?>" class="reply  mr-auto px-2 sm:px-4 py-2 opacity-80 md:w-auto text-xs sm:text-sm xl:text-base flex justify-center items-center">
                              پاسخ
                            </a>
                          </div>
                        </div>
                      <?php } ?>
                    </div>
                  <?php } ?>
                </div>
              </div>
            <?php
            }
            ?>
            <!-- BOX SENT COMMENT -->
            <form action="" id="send_comment">
              <div>
                <div class="mb-4">
                  <label for="username" class="inline-block mb-2 ml-1 font-semibold text-xs text-slate-700"><?= (isset($_SESSION["user_id"])) ?  "نام کاربر :" . " " . $_SESSION["first_name"] . " " . $_SESSION["last_name"]  : "نام شما :"; ?></label>
                  <p id="errorN"></p>
                  <input type="<?= (isset($_SESSION["user_id"])) ? "hidden" : "text"; ?>" class="text-sm block w-full rounded-lg border border-gray-400 bg-white px-3 py-2 font-normal text-gray-700 outline-none focus:border-red-300" , id="name" />
                  <input type="hidden" id="parentid" name="parentid" value="">
                </div>
              </div>
              <div class="mb-4">
                <label for="mailTicket" class="inline-block mb-2 ml-1 font-semibold text-xs text-slate-700">نظر شما :</label>
                <p id="errorC"></p>
                <textarea cols="30" rows="5" class="text-sm block w-full rounded-lg border border-gray-400 bg-white px-3 py-2 font-normal text-gray-700 outline-none focus:border-red-300" id="content"></textarea>
              </div>
              <button class="inline-block px-8 py-2 ml-auto font-semibold text-center text-white bg-red-500 rounded-lg shadow-md text-xs" type="submit">ارسال نظر</button>
          </div>
          </form>

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
                  <img class='hover:scale-105 transition rounded-lg w-44' src='attachment/image/blog/<?= testSecurity($value['image']) ?>' alt=''>
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
    </div>
  </div>

  <!-- FOOTER -->
  <?php require_once "masterPage/footer.php" ?>
</body>
<!--DROPDOWNS FOR NAVBAR-->
<script src="assets/js/flowbite.bundle.js"></script>
<script src="assets/js/alpine.js" defer>
</script>
<script src="assets/js/jquery.min.js"></script>
<!--MOBILE NAVBAR-->
<script src=assets/js/navbar.js"></script>
<!-- SHOW MODAL SEARCH -->
<script src="assets/js/searchBox.js"></script>



<script>
  $(".reply").on("click", function() {
    $("#parentid").val($(this).data("commentid"));
  });


  $("#send_comment").on("submit", function(e) {
    e.preventDefault();

    $("#errorN").text("");
    $("#errorC").text("");

    const formData = {
      blog_id: <?= $id ?>,
      name: $("#name").val(),
      content: $("#content").val(),
      parent_id: $("#parentid").val(),
    };


    $.ajax({
      type: "POST",
      url: "insert_comment.php",
      data: formData,
      success: function(response) {

        if (response.indexOf("ثبت شد") !== -1) {
          $("#errorN").text(response).css("color", "green");
          $("#name").val("");
          $("#content").val("");
        } else {

          const errors = JSON.parse(response);
          if (errors.errorN) {
            $("#errorN").text(errors.errorN).css("color", "red");
          }
          if (errors.errorC) {
            $("#errorC").text(errors.errorC).css("color", "red");
          }
        }

      },
      error: function() {

        $("#errorN").html("خطایی رخ داده است. لطفا دوباره تلاش کنید").css("color", "red");
      }
    });
  });
</script>

</html>