<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 10</title>
</head>
<body>
<?php

/*

$x++
++$x

$x--
--$x


*/


$x = 5;
$x = $x + 1; // $x = 6
echo "<br>$x"; // 6
$x += 1; // $x = $x+1      $x = 7
echo "<br>$x"; // 7
$x++; // $x = 8
echo "<br>$x"; //8
$x--; //$x = 7
echo "<br>$x"; // 7
$x = 3;
$x++ < 4; // true
// 4
echo "<p>$x</p>";
$x = 3;
++$x; // $x = 4;
echo "<br>$x"; // 4
--$x; // $x = 3;
echo "<br>$x"; // 3
$test = ++$x < 4; // false
echo "<br>";
var_dump($test);

$d = 9;
echo ++$d;
echo "<br>" . $d++ . "<br>";
var_dump($d);
?>
</body>
</html>