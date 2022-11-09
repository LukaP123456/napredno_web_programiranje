<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 82</title>
</head>
<body>
<?php

date_default_timezone_set('Europe/Belgrade');
/*
 https://www.php.net/manual/en/function.strtotime
*/
echo time() . "<br>";
echo strtotime("21:05:40") . "<br>";
echo strtotime("21:05:40") - strtotime("19:00:00");
echo "<br>";
echo strtotime("now");
echo "<br>";
echo strtotime("2 days");

$future = strtotime("last day of february next year");
echo "<p>" . Date("d.m.Y.", $future) . "</p>";


echo strtotime("now") . "<br>";
echo strtotime("10 September 2014") . "<br>";
echo strtotime("+1 day") . "<br>";
echo strtotime("+1 week") . "<br>";
echo strtotime("+1 week 2 days 4 hours 2 seconds") . "<br>";
echo strtotime("next Thursday") . "<br>";
echo strtotime("last Monday") . "<br>";

$str = 'Not Good';
// $str = "Today";

if (($timestamp = strtotime($str)) === false) {
    echo "<p>The string ($str) is bogus</p>";
} else {
    echo "$str == " . date('l dS \o\f F Y h:i:s A', $timestamp);
}

?>
</body>
</html>
