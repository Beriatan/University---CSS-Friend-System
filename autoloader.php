<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className) {
    $path = "Models/";
    $ext = ".php";
    $fullPath = $path . $className . $ext;
    if(!file_exists($fullPath)){
        return false;
    }
    include_once $fullPath;
}