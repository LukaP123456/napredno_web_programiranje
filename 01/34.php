<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 33</title>
</head>
<body>
<?php

$users["name"] = "Peter";
$users["job"] = "webmaster";
$users["age"] = 30;
$users["email"] = "webmaster@php.rs";

echo $users["email"] . "<br>";

echo $users['school'];

$users['school'] = 'php';

if (isset($users['school'])) {
    echo "school is " . $users['school'];
}

?>
</body>
</html>