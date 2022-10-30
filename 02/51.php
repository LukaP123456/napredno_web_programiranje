<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 51</title>
</head>
<body>
<?php

$s1 = " vts ";
$s11 = trim($s1);
var_dump($s11);

$s11 = trim($s1,"ts ");

var_dump($s11);
/*
trim — Strip whitespace (or other characters) from the beginning and end of a string.
The second parameter lists the characters to be stripped.
Without the second parameter, trim() will strip these characters:

    " " (ASCII 32 (0x20)), an ordinary space.
    "\t" (ASCII 9 (0x09)), a tab.
    "\n" (ASCII 10 (0x0A)), a new line (line feed).
    "\r" (ASCII 13 (0x0D)), a carriage return.
    "\0" (ASCII 0 (0x00)), the NULL-byte.
    "\x0B" (ASCII 11 (0x0B)), a vertical tab.
*/

echo "<pre>a string value =$s1, after trim($s1,\"ts \") =$s11|</pre>";
echo "<hr>";
 
$s2 = " php ";
$s22 = ltrim($s2);
echo "<pre>a string value =$s2, after ltrim =$s22|</pre>";
echo "<hr>";

$s3 = " php ";
$s33 = chop($s3);
echo "<pre>a string value =$s3, after chop =$s33|</pre>";
//This function is an alias of: rtrim().

echo "<hr />";

$s4 = " php ";
$s44 = rtrim($s4);
echo "<pre>a string value =$s4, after rtrim =$s44|</pre>";

?>
</body>
</html>