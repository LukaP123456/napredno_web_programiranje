<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 56</title>
</head>
<body>
<?php

$str = "Subotica";

//echo $str[0];
$px = 16;
$strArray = ["city"=>"Subotica", "postalCode"=>"24000"];

$l = strlen($str); 
echo "The length of string $str is: $l<br><br>";
echo "The first character in string $str is: <b>". $str[0]."</b><br>";
echo "The fourth character in string $str is: <b>". $str[3]."</b><br>";
$last = $str[strlen($str)-1];
echo "The last character in string $str is: <b> $last</b><br>";

echo "Our city is ${strArray["city"]} <br>";
// echo "Our city is $strArray["city"]";
//echo "Our city is".$strArray["city"]."<br>";


echo "Font size is ${px}px"; // 16px 16 px


?>
</body>
</html>