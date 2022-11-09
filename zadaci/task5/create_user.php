<?php

require "db_config.php";

$connection = databaseConnect(DB_CONN);

function insertUser(array $user, mysqli $connection)
{
    for ($i = 0; $i < count($user); $i++) {
        $username = $user[$i]["username"];
        $password = password_hash($user[$i]["password"], PASSWORD_DEFAULT);
        $email = $user[$i]["email"];

        $sql = "INSERT INTO user(username,password,email)VALUES ('$username','$password','$email')";
        if (mysqli_query($connection, $sql)) {
            echo 1;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        }
    }
}

insertUser($user, $connection);