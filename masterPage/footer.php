<footer class="pt-5 shadow-xl bg-white">
  <!-- SERVICES -->
  <div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-y-5 gap-x-10 justify-items-center mb-10">
      <?php
      foreach ($footer_warranty as $value) {
      ?>
        <div class="flex justify-center items-center flex-col rounded-3xl w-32 h-24">
          <img class="w-20" src="attachment/image/services/<?= testSecurity($value['logo']) ?>" alt="<?= testSecurity($value['name']) ?>">
          <span class="text-sm opacity-80">
            <?= testSecurity($value['name']) ?>
          </span>
        </div>
      <?php
      }
      ?>

    </div>
  </div>
  <!-- MAIN -->
  <div class="flex items-center justify-between my-4 px-5">
    <a href="../../iranshop_dornica/index .php" class="inline-block">
      <img
        src="attachment/image/site_logo/<?= testSecurity($setting["site_logo"]) ?>"
        alt="logo"
        class="w-48" />
    </a>
    <button type="button" class="flex items-center gap-x-1 border rounded-lg px-3 py-2 text-zinc-500 text-sm md:text-base" id="btn-back-to-top">
      برو به بالا
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#9c9c9c" viewBox="0 0 256 256">
        <path d="M128,26A102,102,0,1,0,230,128,102.12,102.12,0,0,0,128,26Zm0,192a90,90,0,1,1,90-90A90.1,90.1,0,0,1,128,218Zm44.24-78.24a6,6,0,1,1-8.48,8.48L128,112.49,92.24,148.24a6,6,0,0,1-8.48-8.48l40-40a6,6,0,0,1,8.48,0Z"></path>
      </svg>
    </button>
  </div>
  <div class="mx-auto shadow-lg">
    <div class="flex flex-wrap">
      <div class="w-full px-4 sm:w-2/3 lg:w-4/12">
        <div class="mb-10 w-full">
          <p class="mb-2 opacity-80">
            <?= testSecurity($setting["site_name"]) ?>
          </p>
          <p class="mb-7 opacity-60 text-sm">
            <?= testSecurity($setting["site_descripton"]) ?>
          </p>
        </div>
      </div>
      <div class="w-full px-4 sm:w-1/2 lg:w-3/12">
        <div class="mb-10 w-full">
          <h4 class="mb-2 opacity-80"><?= testSecurity($setting["useful_links_name"]) ?></h4>






          <ul class="grid gap-y-2">
            <?php
            foreach ($useful_links as $value) {
            ?>
              <li>
                <a href='<?= testSecurity($value["link"]) ?>'
                  class='mb-2 text-sm hover:text-red-600 transition opacity-60 hover:opacity-100'>
                  <?=testSecurity( $value["name"]) ?>
                </a>
              </li>
            <?php
            }
            ?>
          </ul>
        </div>
      </div>
      <div class="w-full px-4 sm:w-1/2 lg:w-3/12">
        <div class="mb-10 w-full">
          <h4 class="mb-2 opacity-80"><?= testSecurity($setting["contact_us_name"]) ?></h4>
          <ul class="grid gap-y-2">
            <li>
              <div
                class="mb-2 text-sm opacity-60">
                <?= testSecurity($setting["address"]) ?>
              </div>
            </li>
            <li>
              <div
                class="mb-2 text-sm opacity-60">
                <?= testSecurity($setting["tell"]) ?>
              </div>
            </li>
            <li>
              <div
                class="mb-2 text-sm opacity-60">
                <?= testSecurity($setting["Response_time"] )?>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
        <div class="mb-10 w-full">
          <h4 class="mb-2 text-center opacity-80">شبکه های اجتماعی:</h4>
          <div class="mb-5 flex items-center justify-center">

            <!-- query social_media -->
            <?php
            $db->where("social_media.status", 1);
            $db->where("social_media_type.status", 1);
            $db->orderBy("social_media_type.sort" , "desc" );
            $db->join("social_media_type", "social_media_type.id=social_media.social_media_type_id", "LEFT");
            $social_media = $db->get("social_media");
            
            ?>

            <?php
            foreach ($social_media as $value) {
            ?>
              <a href='<?= $value["url"] ?>' title='<?= testSecurity($value["name"]) ?>' class='mr-1 flex h-12 w-12 items-center justify-center p-2'>
                <img src='attachment/image/services/<?= testSecurity( $value["icon"]) ?>' alt='<?= testSecurity($value["name"] )?>'>
              </a>
            <?php
            }
            ?>



          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- COPYRIGHT -->
  <div class="px-4 grid grid-cols-1 sm:grid-cols-2 border-t-[1px] py-5 text-gray-400">
    <span class="text-xs text-center sm:text-right">
      <?= testSecurity($setting["copyright_text"]) ?>
    </span>
  </div>
</footer>