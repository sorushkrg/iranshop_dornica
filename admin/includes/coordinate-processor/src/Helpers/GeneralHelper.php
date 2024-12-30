<?php

function validateCoordinates(float $latitude, float $longitude): bool {
    return preg_match("/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/", $latitude) && preg_match("/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/", $longitude);
}

function deleteDirectory($directory) {

    $files = array_diff(scandir($directory), array('.','..'));
 
     foreach ($files as $file) {
       (is_dir("$directory/$file")) ? deleteDirectory("$directory/$file") : unlink("$directory/$file");
     }
 
     return rmdir($directory);
 
   }