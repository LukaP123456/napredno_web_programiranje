<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 42</title>
</head>
<body>

<?php
$i = ["a", "b", "c", "d", "e"];

$o = array_slice($i, 2); // c,d,e

var_dump($o);
//var_dump($i);

/*a

array array_slice ( array $array , int $offset [, int $length = NULL [, bool $preserve_keys = false ]] )
array_slice() returns the sequence of elements from the array $array as specified by the $offset and $length parameters.
If $offset is non-negative, the sequence will start at that offset in the array. If $offset is negative, 
the sequence will start that far from the end of the array.
If length is given and is positive, then the sequence will have up to that many elements in it.
If the array is shorter than the length, then only the available array elements will be present. 
If length is given and is negative then the sequence will stop that many elements from the end of the array.
If it is omitted, then the sequence will have everything from offset up until the end of the array.

*/

foreach ($o as $j)
    echo "1. - $j<br>";

$i = ["a", "b", "c", "d", "e"];
$o = array_slice($i, -2, 1); //d

foreach ($o as $j)
    echo "2. - $j<br>";

$o = array_slice($i, 0, 3); //a,b,c
foreach ($o as $j)
    echo "3. - $j<br>";

$o = array_slice($i, -3, -1); //c,d

foreach ($o as $j)
    echo "4. - $j<br>";


$o = array_slice($i, 3, 3); //d,e true
foreach ($o as $j)
    echo "5. - $j<br>";

//var_dump($o);
?>
</body>
</html>
