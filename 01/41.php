<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 41</title>
</head>
<body>
<?php


$first_array = array("a", "b", "c");

var_dump($first_array);

$k = array_shift($first_array);

var_dump($first_array);
/*

array_shift() shifts the first value of the array off and returns it, shortening the array by one element 
and moving everything down.

*/

echo "<br>The first element in the <i>first_array</i> is <b>$k</b><br /><br />The remaining elements of the array are:<br>";

foreach ($first_array as $value)
    echo "$value <br>";

var_dump($first_array);
?>
</body>
</html>