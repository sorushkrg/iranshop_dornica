<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="theme-color" content="#b91c1c" />
<link rel="stylesheet" href="assets/css/output.css" />
<link rel="stylesheet" href="assets/css/font.css">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/rangeInput.css">

<?php

include "./functions/functionQuery.php";
include "./variables/variables.php";
include "./library/jdf/jdf.php";


?>


<!-- setting query -->
<?php
$db->orderBy("created_at", "desc");
$db->where("status", 1);
$setting = $db->getOne("setting");
?>