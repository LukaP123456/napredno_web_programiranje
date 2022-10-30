<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 57</title>
</head>
<body>
<?php

$str1 = "223";
$str2 = "225";

$str3 = "Hello World!";
$str4 = "hello world!";

echo "strcmp($str1, $str2) = " . strcmp($str1, $str2); // -1
//Binary safe string comparison, this comparison is case sensitive.

echo "<br>strcasecmp($str3, $str4) = " . strcasecmp($str3, $str4); // 0
//Binary safe case-insensitive string comparison

echo "<br>strnatcmp($str1, $str2) = " . strnatcmp($str1, $str2); // -1
//This function implements a comparison algorithm that orders alphanumeric strings in the way a human being would, this is described as a "natural ordering".
// Note that this comparison is case sensitive.

echo "<br>strncmp($str1, $str2, 2) = " . strncmp($str1, $str2, 2); // 0
//This function is similar to strcmp(), with the difference that you can specify the (upper limit of the) number of characters from each string to be used in the comparison.
// Note that this comparison is case sensitive.

echo "<br>strncasecmp(\"php\",\"PHP024\", 3) = " . strncasecmp("php", "PHP024", 3); // 0
//This function is similar to strcasecmp(), with the difference that you can specify the (upper limit of the) number of characters from each string to be used in the comparison.
// Case-insensitive!

echo "<br> strcmp(php,PHP) = " . strcmp("php", "PHP"); // 1


/*
if $str1 == $str2 strcmp returns 0
if $str1 > $str2 strcmp returns >0
if $str1 < $str2 strcmp returns <0

acc = acc     |  ac < acc
accc > acc    | acd > acc
acb < acc     |  acb < accc
acb < accd   |  bcc > acc
bcc > acc     |  bcca > acc
bcc > acca   |  1bcc < acca
bcc < bcc1    |  bcc1 > bcc
1bcc < bcc    |  1bcc < 1bcd
1bcd > 1bcc  |  _bcc < bcc
bcc > _bcc    |   ;bcc < bcc
bcc > ;bcc     |  bcc < bcc;
bcc; = bcc;

$arr1 = $arr2 = array("img12.png", "img10.png", "img2.png", "img1.png");

Standard string comparison
Array
(
    [0] => img1.png
    [1] => img10.png
    [2] => img12.png
    [3] => img2.png
)

Natural order string comparison
Array
(
    [0] => img1.png
    [1] => img2.png
    [2] => img10.png
    [3] => img12.png
)

*/

/*$str1 = "Hello";
$str2 = "Hello World";
echo strcmp($str1, $str2);*/
?>
</body>
</html>