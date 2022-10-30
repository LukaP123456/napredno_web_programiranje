<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 32</title>
</head>
<body>
<?php

$colors = ["blue", "blue", "blue", "blue"];

$colors[] = "red";
$colors[] = "red";
$colors[] = "red";
$colors[] = "red";

print_r($colors);

echo "<br>";
$colors2 = array_fill(0, 5, "yellow");
/*

array array_fill ( int $start_index , int $num , mixed $value )
Fills an array with $num entries of the value of the $value parameter, keys starting at the $start_index parameter.

*/
print_r($colors2);

echo "<br>";
$colors3 = array_fill(4, 3, "black");
$colors3[] = "white";
print_r($colors3);

$first = count($colors);
$second = count($colors2);

echo "<br><br>";
echo "$first elements in the first array.<br /><br />";
echo "$second elements in the second array. <br /><br />";


$keys = ['foo', 5, 10, 'bar'];
$third = array_fill_keys($keys, 'banana');

var_dump($third);

?>
</body>
</html>