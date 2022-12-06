<?php

require "config.php";
require "db_config.php";

function insertUser(array $users, $connection)
{
    for ($i = 0; $i < count($users); $i++) {
        foreach ($users[$i] as $key=>$value){
            $users[$i]['password'] = password_hash($users[$i]['username'].mt_rand(150,900).date('m'),PASSWORD_DEFAULT);

            $username = $users[$i]['username'];
            $password = $users[$i]['password'];
            $email = $users[$i]['email'];
            $status = $users[$i]['status'];
        }
        $sql = "INSERT INTO user(username, password, email, status) 
            VALUES ('$username','$password','$email','$status')";
        mysqli_query($connection, $sql) or die(mysqli_error($connection));
    }

}


$connection = databaseConnect();
insertUser($users, $connection);

