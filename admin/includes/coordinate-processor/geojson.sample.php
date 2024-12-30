<?php 

require_once("vendor/autoload.php");
require_once("src/Helpers/GeneralHelper.php");
require_once("src/Helpers/UTMHelper.php");

$converter = Redcoder\CoordinateProcessor\ProcessorFactory::create('geojson');
$multiPolygons = $converter->process("samples/farhood.geojson");