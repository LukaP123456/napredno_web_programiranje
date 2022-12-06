<?php
require "config.php";
require "db_config.php";
require "category.php";

$connection = databaseConnect();
var_dump($categories);

for ($i = 0; $i < count($categories); $i++) {
    if ($categories[$i] != null) {
        foreach ($categories[$i] as $key => $value) {
            echo $key;
            echo $value;

            $sql = "INSERT INTO category(name, code)
            VALUES ('$value','$key')";
            mysqli_query($connection, $sql) or die(mysqli_error($connection));
        }
    }

}







