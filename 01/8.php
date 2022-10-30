<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 8</title>
</head>
<body>
<?php

/*

 $x <=> $y spaceship operator

 Returns an integer less than, equal to, or greater than zero,
 depending on if $x is less than, equal to, or greater than $y.

*/

$x = 5;
$y = 10;

echo($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;
$y = 10;

echo($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;
$y = 10;


echo($x <=> $y); // returns +1 because $x is greater than $y

/*
>
<
>=
<=
<=> Spaceship
==
===
!
!=
!==


*/


$a = "5";
$b = 5;

$c = $a == $b; // "5" == 5 true

$d = $a === $b; // "5" === 5 false

echo "<hr>";

var_dump($c);
var_dump($d);


echo "<hr>";
/*
 Warning

Prior to PHP 8.0.0, if a string is compared to a number or a numeric string then
the string was converted to a number
before performing the comparison. This can lead to surprising results as can be
seen with the following example:

Output of the above example in PHP 7:

bool(true)
bool(true)
bool(true)
bool(true)
0

Output of the above example in PHP 8:

bool(false)
bool(true)
bool(true)
bool(true)
a


 */

var_dump((int)"a");

var_dump(0 == "a");
var_dump("1" == "01");
var_dump("10" == "1e1");
var_dump(100 == "1e2");

switch ("a") {
    case 0:
        echo "0";
        break;
    case "a":
        echo "a";
        break;
}


?>

</body>
</html>