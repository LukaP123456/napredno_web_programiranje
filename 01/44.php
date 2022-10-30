<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 44</title>
</head>
<body>
<?php
$data_array = ["first" => "e", "second" => "s", "third" => "c", "fourth" => "b"];

echo "Original order of array<br />";

foreach ($data_array as $key => $value)
    echo "$key=$value<br />";

asort($data_array, SORT_LOCALE_STRING);

/*

This function sorts an array such that array indices maintain 
their correlation with the array elements they are associated 
with. This is used mainly when sorting associative arrays 
where the actual element order is significant.

*/

echo "<br>";
echo "Array ordered by <i>asort</i> function.<br>";

foreach ($data_array as $key => $value)
    echo "$key=$value<br />";

$data_array2 = ["x" => 5, "a" => 2, "f" => 1];

echo "<br>Original order of array<br>";


foreach ($data_array2 as $key => $value)
    echo "$key=$value<br>";

ksort($data_array2);

/*

Sorts an array by key, maintaining key to data correlations. 
This is useful mainly for associative arrays.

*/

echo "<br>";
echo "Array ordered by <i>ksort</i> function.<br>";

foreach ($data_array2 as $key => $value)
    echo "$key=$value<br>";

?>
</body>
</html>