<?php

require 'config.php';

function databaseConnect(array $db_conn)
{
    $connection = mysqli_connect($db_conn['host'], $db_conn['user'], $db_conn['password'], $db_conn['database']);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    mysqli_query($connection, "SET NAMES utf8") or die (mysqli_error($connection));
    mysqli_query($connection, "SET CHARACTER SET utf8") or die (mysqli_error($connection));
    mysqli_query($connection, "SET COLLATION_CONNECTION='utf8_general_ci'") or die (mysqli_error($connection));

    return $connection;
}
