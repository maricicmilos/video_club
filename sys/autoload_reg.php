<?php

    spl_autoload_register(function ($className){
        $directory = __DIR__ . '/class/';
        $extension = '.class.php';
        $path = $directory . $className . $extension;
        include "$path";
    })



?>