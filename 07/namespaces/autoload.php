<?php

spl_autoload_register(function ($className) {
    $file =  __DIR__ . '/src/' . $className . '.php';
    if (is_file($file)) {
        require_once $file;
    }
},true);
