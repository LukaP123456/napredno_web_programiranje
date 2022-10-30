<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 37</title>
</head>
<body>
<?php

$users = ["John", "Robert", "Sean", "Ted"];

print_r($users);

$last = $users[count($users) - 1]; // 4-1=3 $users[3] - the last value in the array

echo "<br>";

echo "Array <i>users</i> contains " . count($users) . " records <br>";

echo "The last element in array <i>users</i> is - $last<br>";

$chars[0] = "I";
$chars[2] = "z";
$chars[3] = "u";

//count($chars) = 3
echo "\$chars[" . (count($chars) - 1) . "] = " . $chars[count($chars) - 1]; // $chars[2]
echo "<br>";

$names[55] = "Robert";
$names[66] = "Judith";
$names[77] = "Mark";
$names[88] = "Brian";
$names[99] = "true";

var_dump($names);

echo "<br >The last element in array <i>names</i> is " . end($names);

echo "<br><br>Judith has the key: ";

echo array_search('Judith', $names);
/*

mixed array_search ( mixed $needle , array $haystack [, bool $strict = false ] )
Searches haystack for needle.
If needle is a string, the comparison is done in a case-sensitive manner.
If the third parameter $strict is set to TRUE then the array_search() function will 
search for identical elements in the haystack. This means it will also 
check the types of the needle in the haystack, and objects must be the same instance.
Returns the key for needle if it is found in the array, FALSE otherwise.
!!!Use the === operator for testing the return value of this function.!!!

*/

?>
</body>
</html>