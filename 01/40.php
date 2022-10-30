<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 40</title>
</head>
<body>
<?php

$first = ["a", "b", "c"];
$element_number = array_unshift($first, 1, 2);

/*

array_unshift() prepends passed elements to the front of the array. 
Note that the list of elements is prepended as a whole, so that the prepended elements stay in the same order.
Returns the new number of elements in the array.

*/

foreach ($first as $k)
    echo "$k<br>";

echo "number of elements = $element_number <br>";

?>
</body>
</html>
