<?php function pg($title_pageNum_rs1, $pageNum_rs1, $currentPage, $queryString_rs1, $totalPages_rs1)
{ ?>
      <ul class="pagination d-flex gap-2">

            <?php if ($pageNum_rs1 > 0) { // Show if not first page 
            ?>
                  <li> <a href="<?php printf("%s?%s=%d%s", $currentPage, $title_pageNum_rs1, 0, $queryString_rs1); ?>" data-popup="tooltip" title="اول" class="text-text-decoration-none text-white bg-info py-2 px-3 rounded-2">&lsaquo;&lsaquo;</a>
                  <?php } // Show if not first page 
                  ?>
                  </li>
                  <?php if ($pageNum_rs1 > 0) { // Show if not first page 
                  ?>
                        <li>
                              <a href="<?php printf("%s?%s=%d%s", $currentPage, $title_pageNum_rs1, max(0, $pageNum_rs1 - 1), $queryString_rs1); ?>" data-popup="tooltip" title="قبلی" class="text-text-decoration-none text-white bg-info py-2 px-3 rounded-2">&lsaquo;</a>

                        </li>
                        <?php

                        $safheghabli = $pageNum_rs1 - 1;
                        $i = $safheghabli - 1;
                        if ($i < 1)
                              $i = 0;
                        while ($i >= 0 and $i <= $safheghabli) {
                        ?>
                              <li>
                                    <a href="<?php printf("%s?%s=%d%s", $currentPage, $title_pageNum_rs1, $i, $queryString_rs1); ?>" class="text-text-decoration-none text-white bg-info py-2 px-3 rounded-2"><?php echo $i + 1; ?></a>

                              </li>
                        <?php
                              $i++;
                        } ?>
                  <?php } // Show if not first page 
                  ?>
                  <li class="active"><a href="#" class="text-text-decoration-none text-white bg-info py-2 px-3 rounded-2">
                              <?php echo $pageNum_rs1 + 1; ?>
                        </a>
                  </li>
                  <?php if ($pageNum_rs1 < $totalPages_rs1) { // Show if not last page 
                  ?>
                        <?php
                        $i = 1;
                        $safhebadi = $pageNum_rs1 + 1;
                        while ($i < 3 and $safhebadi <= $totalPages_rs1) {
                        ?>
                              <li>
                                    <a href="<?php printf("%s?%s=%d%s", $currentPage, $title_pageNum_rs1, $safhebadi, $queryString_rs1); ?>" class="text-text-decoration-none text-white bg-info py-2 px-3 rounded-2"><?php echo $safhebadi + 1; ?></a>

                              </li>
                        <?php
                              $i++;
                              $safhebadi++;
                        } ?>
                        <li>
                              <a href="<?php printf("%s?%s=%d%s", $currentPage, $title_pageNum_rs1, min($totalPages_rs1, $pageNum_rs1 + 1), $queryString_rs1); ?>" data-popup="tooltip" title="بعدی" class="text-text-decoration-none text-white bg-info py-2 px-3 rounded-2">&rsaquo;</a>

                        </li>
                  <?php } // Show if not last page 
                  ?>
                  <li><?php if ($pageNum_rs1 < $totalPages_rs1) { // Show if not last page 
                        ?>
                              <a href="<?php printf("%s?%s=%d%s", $currentPage, $title_pageNum_rs1, $totalPages_rs1, $queryString_rs1); ?>" data-popup="tooltip" title="آخر" class="text-text-decoration-none text-white bg-info py-2 px-3 rounded-2">&rsaquo;&rsaquo;</a>
                        <?php } // Show if not last page 
                        ?>
                  </li>


      </ul>
<?php } ?>