<?php
$db = connectDb();
$footer_warranty = queryTemplate("footer_warranty", 1);

$useful_links = queryTemplate("useful_links", 1);
/***************footer,header,setting******************************************************* */

$latest_articles = queryTemplate("latest_articles",1);

/***************blogPage******************************************************* */

$slider_index = queryTemplate("slider_index", 1);


$image_single = queryTemplate("image_single", 1);

$last_offer = queryTemplate("last_offers", 1);

$discount_index = queryTemplate("discounts_index", 1);


$best_suggest = queryTemplate("best_suggest", 1);

$index_adds = queryTemplate("index_adds", 1);

$category_index = queryTemplate("category_index", 1);

$digital_product = queryTemplate("digital_product", 1);

$blog_index = queryTemplate("blog_index", 1);
/***************indexPage******************************************************* */
