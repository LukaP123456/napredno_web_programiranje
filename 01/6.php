<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 6</title>
</head>
<body>
<?php
/*
$a = (int)"12 vts";
var_dump($a);

if(is_int($a)) {
    $d = 20+$a;
}
else {
    echo "Value is not integer!";
    $d = 0;
}

var_dump($d);
*/
/*$a = "school";
$school = "PHP";

$number = 12.5;
$text1 = $number . " - string type"; //  "12.5 - string type"
echo "$text1<br>";
//$text2 = $text1 + 20; // "12.5 - string type" + 20
$text2 = (double)$text1 + 20; // "12.5 - string type" + 20

echo "New number = $text2<br>"; // 32.5
$text3 = $text2 + "php 20"; // 32.5 + "php 20"
echo "$text3<br>"; // 32.5
*/
$a = "school";

$values = ['school', 'city', 'address'];
$school = 4444444444;
$city = 2;
$address = 3;

if(in_array($a, $values)) {
    echo $$a; // echo $school;
}
else {
    echo "unknown value";
}
 // 1. $a = "school" 2. echo $school


?>
</body>
</html>