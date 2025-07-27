<?php

spl_autoload_register('autoLoader');

function autoLoader($className)
{
    $path = "classes/";
    $extension = ".php";
    $filePath = $path . $className . $extension;

    if (! file_exists($filePath))
        return false;
    include_once $filePath;
}
