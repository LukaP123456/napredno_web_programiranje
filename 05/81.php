<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 81</title>
</head>
<body>
<?php

$time = mktime(9, 9, 38, 3, 4, 2000);
$time2 = mktime(12, 5, 36, 5, 9, 1945);
$time3 = mktime(2,5,15,4,2,2001);

echo $time;
echo "<br>$time2<br>";
echo "<br>$time3<br>";

echo "<br><b> The day is: </b>" . Date("l", $time3);

echo "<br>" . date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
echo "<br>" . date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
echo "<br>" . date("M-d-Y", mktime(0, 0, 0, 13, 32, 1997));
echo "<br>" . date("M-d-Y", mktime(0, 0, 0, 1, 1, 1998));
echo "<br>" . date("M-d-Y", mktime(0, 0, 0, 5, 9, 1902));

echo "<br>" . date("D", mktime(0, 0, 0, 1, 1, 2000));

echo "<br>" . date("M-d-Y", mktime(0, 0, 0, 3, 0, 2008));

/*
https://www.php.net/manual/en/function.mktime

 mktime(
    int $hour,
    ?int $minute = null,
    ?int $second = null,
    ?int $month = null,
    ?int $day = null,
    ?int $year = null
): int|false

*/


?>
</body>
</html>
