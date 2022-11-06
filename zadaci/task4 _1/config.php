<?php

require 'db_config.php';

$connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//asdasdasdasd

mysqli_query($connection, "SET NAMES utf8") or die (mysqli_error($connection));
mysqli_query($connection, "SET CHARACTER SET utf8") or die (mysqli_error($connection));
mysqli_query($connection, "SET COLLATION_CONNECTION='utf8_general_ci'") or die (mysqli_error($connection));

$titles = [
    'index.php' => 'Index page',
];


$messages = [
    'index.php' => [
        1 => ['style' => 'danger', 'text' => 'Please, insert the correct value into the fields below.'],
        2 => ['style' => 'danger', 'text' => 'Please, insert an image with the extension jpg or png smaller than 1MB.'],
        3 => ['style' => 'danger', 'text' => 'Failed to move image to directory.'],
        4 => ['style' => 'success', 'text' => 'Comment and picture uploaded.'],
    ]
];

$badWords = ['drop', 'delete', 'kill', 'destroy', 'fool'];

