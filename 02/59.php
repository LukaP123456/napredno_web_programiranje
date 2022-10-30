<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 59</title>
</head>
<body>
<?php

$text = "webmaster";
$character = "e";

echo "original text: $text <br>";
echo "search character: $character <br><br>";

$pos1 = strpos($text, $character);
//Find the numeric position of the first occurrence of needle in the haystack string. 

echo "the first position: $pos1 <br>"; // 1

$pos2 = strrpos($text, $character);
//Find the numeric position of the last occurrence of needle in the haystack string. 
echo "the last position: $pos2 <br>"; // 7

?>
</body>
</html>
