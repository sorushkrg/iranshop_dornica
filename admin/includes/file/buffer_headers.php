<?php
header('Content-type: text/html; charset=utf-8');
header('Surrogate-Control: BigPipe/1.0');
header("Cache-Control: no-cache, must-revalidate");
header('X-Accel-Buffering: no');
ob_end_flush();
ob_implicit_flush(true);
?>