<?php
require "db_config.php";

$connection = databaseConnect(DB_CONN);
$values_array = ['name','password'];
$error_string = './index.php?';

//if (!isset($_POST['submit'])) {
//    header("Location:" . $error_string . 'm=1');
//    die();
//}

foreach ($values_array as $item) {
    if (empty($_POST[$item])) {
        header("Location:" . $error_string . 'm=1');
        die();
    }

    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($connection, trim(strip_tags($value)));
    }
}


//function UserExists(string $name,mysqli $connection){
//
//    $sql = "SELECT * FROM users WHERE username = '$name'";
//
//    if ()
//
//}