<?php
require "client.php";
require "db_config.php";

function insertCities(array $cities, mysqli $connection)
{
    foreach ($cities as $item) {
        $sql = "INSERT INTO city(name)VALUES ('$item')";

        if (mysqli_query($connection, $sql)) {
            echo 1;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        }
    }
}

var_dump($citiesTemp);

$connection = databaseConnect(DB_CONN);

insertCities($citiesTemp,$connection);