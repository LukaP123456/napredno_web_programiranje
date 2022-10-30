<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 5</title>
</head>
<body>
<?php

$d = "45.56" * 1; // 45.56

var_dump($d);


/*

/
+
-
%
*

*/
$variable1 = 45.56;
echo "$variable1 - " . gettype($variable1) . "<br>";
settype($variable1, "string"); // "45.56"
echo "$variable1 - " . gettype($variable1) . "<br>";
settype($variable1, "integer"); // 45
echo "$variable1 - " . gettype($variable1) . "<br>";
settype($variable1, "boolean");
echo "$variable1 - " . gettype($variable1) . "<br><br>";

var_dump($variable1);
$variable2 = "25cm";
echo "<br>$variable2 - " . gettype($variable2) . "<br>";


settype($variable1, "integer");
$variable22 = (integer)$variable2; // (integer)"25cm"


var_dump($variable2);
var_dump($variable22);
echo "$variable2 - " . gettype($variable2) . "<br>";
$variable2 = (string)$variable2; // (string)"25cm" = "25cm"
echo "$variable2 - " . gettype($variable2) . "<br>";
$variable2 = (double)$variable2; // (double)"25cm" = 25
echo "$variable2 - " . gettype($variable2) . "<br><br>";

echo "<hr>";
$variable3 = "12.5cm";
$double_value = doubleval($variable3);
var_dump($variable3);
echo "$double_value - " . gettype($double_value) . "<br>";
$integer_value = intval($variable3);
echo "$integer_value - " . gettype($integer_value) . "<br>";
$string_value = strval($variable3);
echo "$string_value - " . gettype($string_value) . "<br>";

var_dump($variable3);

echo "<hr>";
/*
 intval()
  If base is 0, the base used is determined by the format of var:

    if string includes a "0x" (or "0X") prefix, the base is taken as 16 (hex); otherwise,
    if string starts with "0", the base is taken as 8 (octal); otherwise,
    the base is taken as 10 (decimal).

 */
var_dump((int)"0123", intval("0123"), intval("0123", 0), intval("0x123",0));

// "0123" = 83
// 1*8^2+2*8^1+3*8^0 = 64+16+3 = 83
// 1*16^2+2*16^1+3*16^0 = 256+32+3 = 291 
?>
</body>
</html>











