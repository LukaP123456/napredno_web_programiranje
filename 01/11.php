<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 11</title>
</head>
<body>
<?php

define("CITY", "Subotica");
define("NUMBER", 12);
//define("GREETING", "Welcome to StartIt Center",true);
define("GREETING", "Welcome to StartIt Center");

// Defining case-insensitive constants is deprecated as of PHP 7.3.0. As of PHP 8.0.0, only false is an acceptable value,
// passing true will produce a warning.

define("MY_SCHOOL", "sc");

echo CITY;


echo "<p>" . CITY . "</p>";

echo "<br>" . GREETING . "<br>";
//echo "<br>" . greeting . "<br>";

echo "CITY constant value: " . CITY;
echo "<br>";
echo "NUMBER constant value: " . NUMBER;

$result = 45 + NUMBER;
echo "<p>Result of (45 + NUMBER) is: $result</p>";

define("CARS", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);

echo CARS[2];

define("INPUT1", [
    "Your name",
    "enter your name",
    "Please, enter your name!"
]);

define("INPUT2", [
    "Your password",
    "enter your password",
    "Please, enter your password!"
]);

echo '<p><label>' . INPUT1[0] . '</label>
      <input type="text" name="name" id="name" placeholder="' . INPUT1[1] . '">
      <span class="error">' . INPUT1[2] . '</span></p>';


if(defined('CITY')) {
    echo "<p>".CITY."</p>";
}


function getValue() {
    return "CITY";
}

$value = getValue();

echo constant($value);

// http://php.net/manual/en/reserved.constants.php
// http://php.net/manual/en/language.constants.predefined.php
?>
</body>
</html>