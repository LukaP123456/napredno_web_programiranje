<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 43</title>
</head>
<body>
<?php


$data_array = [1, "a", 3, "c", "f", "H"];

echo "Original order of array<br>";

foreach ($data_array as $k)
    echo "$k <br>";

/*

http://www.php.net/manual/en/function.sort.php


    SORT_REGULAR - compare items normally (don't change types)
    SORT_NUMERIC - compare items numerically
    SORT_STRING - compare items as strings
    SORT_LOCALE_STRING - compare items as strings, based on the current locale. It uses the locale, which can be changed using setlocale()
    SORT_NATURAL - compare items as strings using "natural ordering" like natsort()
    SORT_FLAG_CASE - can be combined (bitwise OR) with SORT_STRING or SORT_NATURAL to sort strings case-insensitively


*/

echo "<br>Array ordered by the <i>sort</i> function<br>";

sort($data_array, SORT_LOCALE_STRING);

foreach ($data_array as $k)
    echo "$k <br />";

echo "<br>Array ordered by <i>rsort</i> function<br>";

rsort($data_array);

foreach ($data_array as $k)
    echo "$k <br />";


sort($data_array, SORT_NATURAL | SORT_FLAG_CASE); // natcasesort()
var_dump($data_array);
?>
</body>
</html>