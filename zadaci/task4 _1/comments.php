<?php
require 'functions.php';

$values_array = ['name', 'email', 'days', 'months', 'years', 'comment', 'status'];
$error_string = './index.php?';

foreach ($values_array as $item) {
    if (empty($_POST[$item])) {
        header("Location:" . $error_string . 'm=1');
        die();
    }

    foreach ($_POST as $key=>$value){
        $$key = mysqli_real_escape_string($connection, trim(strip_tags($value)));
    }
}
//extract($_POST, EXTR_OVERWRITE, "form_");













