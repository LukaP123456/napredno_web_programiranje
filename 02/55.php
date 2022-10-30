<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 55</title>
</head>
<body>
<?php

$str = "abcdef";

//Returns the portion of string specified by the start and length parameters.
$k1 = substr($str, 1); // bcdef
$k2 = substr($str, 1, 3); // bcd
$k3 = substr($str, 0, 4); // abcd
$k4 = substr($str, 0, 8); // abcdef
$k5 = substr($str, -3, -1); // de
$k6 = substr($str, -3, 1); // d

echo "<b>$str</b> <br><br>";
echo "$k1<br>";
echo "$k2<br>";
echo "$k3<br>";
echo "$k4<br>";
echo "$k5<br>";
echo "$k6<br>";

?> 
</body>
</html>