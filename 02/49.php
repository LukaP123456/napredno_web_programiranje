<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 49</title>
</head>
<body>
<?php

$red = 255;
$green = 10;
$blue = 125;

//Returns the length of the outputted string.
$length = printf("#%02X%02X%02X", $red, $green, $blue);


echo "<br>Length of outputted string: $length";

$format = "<br><span style=\"color:#%02X%02X%02X\">Hex value of color: #%02X%02X%02X</span>\n";
$format2 = "<br><span style=\"color:#%1$02X%2$02X%3$02X\">Hex value of color: #%1$02X%2$02X%3$02X</span>\n";

printf($format, $red, $green, $blue, $red, $green, $blue);
printf($format2, $red, $green, $blue);


$format3 = "<div style=\"background:#0000%02x;margin:2px;color:white;\">Hex value of color: #0000%02x</div>\n";


for ($i = 0; $i <= 255; $i++)
    printf($format3, $i, $i);
?>
</body>
</html>