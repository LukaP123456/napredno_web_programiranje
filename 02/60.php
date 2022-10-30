<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 60</title>
</head>
<body>
<?php

$str = "webmaster:/php024/";
echo "$str<br>";

//mixed substr_replace ( mixed $string , mixed $replacement , mixed $start [, mixed $length ] )
//substr_replace() replaces a copy of string delimited by the start and (optionally) length parameters with the string given in replacement.
$k6 = substr_replace($str, "PHP", 0); //from start till end
echo $k6;
$k7 = substr_replace($str, "PHP", 0, strlen($str)); //from start till end
echo "<br>$k7<br>";
$k8 = substr_replace($str, "PHP", 0, 0); //from start till start
echo "$k8<br>";
$k9 = substr_replace($str, "PHP", 11, -1); //from the 11th character till the one before the end
echo "$k9<br>";
$k10 = substr_replace($str, "PHP", -7, -1); //same
echo "$k10<br>";
$k11 = substr_replace($str, "", 11, -1); //delete vts024
echo "$k11<br>";

$word = "drop database user drop drop drop";

$filter=str_replace("drop","",$word, $count);
//mixed str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )
//This function returns a string or an array with all occurrences of search in subject replaced with the given replace value.

echo $filter;
echo "<br>$count";
var_dump($word);
?>
</body>
</html>