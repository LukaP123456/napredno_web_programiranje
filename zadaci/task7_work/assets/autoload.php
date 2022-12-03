<?php
spl_autoload_register(function ($className) {
    $file = __DIR__ . '/assets/' . $className . '.php';
    if (is_file($file)) {
        require_once $file;
    } else {
        return false;
    }
});

