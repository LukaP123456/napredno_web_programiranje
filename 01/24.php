<?php
//require_once "24-functions.php";
 require_once "24-functions.php";

//include "24-functions.php";
/*
include "functions.php";
include_once "functions.php";
require "functions.php";
require_once "functions.php";
*/

$school = "VTS";
$city = "Subotica";
$a = 3;
$b = 5;

write();
calculate();
echo calculate2($a, $b);

set_value();
echo "<br> $b";

if (greater($a, $b) === false) {
    echo "<p> a is less then b</p>";
}

second();
second();
second();

?>