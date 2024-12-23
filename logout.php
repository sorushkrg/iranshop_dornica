<?php
session_start();
session_unset();
session_destroy();
header("location:index%20.php");
