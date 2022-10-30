<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 48</title>
</head>
<body>
<?php
/*
 * Strings in PHP https://www.php.net/manual/en/book.strings.php
 */

$number = 255;

//Output a formatted string
printf("Decimal : %d<br>", $number);
printf("Binary : %b <br>", $number);
printf("Float : %f<br>", $number);
printf("Octal : %o<br>", $number);
printf("String : %s<br>", $number);
printf("Hex (with lowercase letters) : %x<br>", $number);
printf("Hex (with uppercase letters) : %X<br>", $number);

//Return a formatted string
$d = sprintf("Hex  : %X<br>", $number);

var_dump($d);
echo $d;
//http://www.php.net/sprintf/




?>
</body>
</html>