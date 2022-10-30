<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 39</title>
</head>
<body>
<?php

$first = ["a", "b", "c"];
$element_number = array_push($first, 1, 2, 3);


/*

Push one or more elements onto the end of array.
int array_push ( array &$array , mixed $value1 [, mixed $... ] )
array_push() treats array as a stack, and pushes the passed variables onto the end of array. 
The length of array increases by the number of variables pushed. Has the same effect as:
$array[] = $var;
repeated for each passed value.
Returns the new number of elements in the array.

ex.
$first[] = 1;

*/

foreach ($first as $k)
    echo "$k ";

echo "<br>number of elements = $element_number <br>";

?>
</body>
</html>