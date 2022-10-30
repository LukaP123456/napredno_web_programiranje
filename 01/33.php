<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 32</title>
</head>
<body>
<?php

$user = ["name" => "Peter",
    "job" => "webmaster",
    "age" => 30,
    "email" => "webmaster@php.rs"
];

echo $user["name"] . "<br>"; // Peter

$student["name"] = "Joan";
$student["school"] = "PHP";
$student["city"] = "Subotica";

echo $student["school"] . "<br>"; // PHP

var_dump($user);

$worker = [
    'name' => 'John Malkovic',
    'salary' => 1890,
    'email' => 'john@mexpert.com'];

var_dump($worker);

?>
</body>
</html>