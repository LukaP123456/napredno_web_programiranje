<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 22</title>
</head>
<body>
<?php

$school = "PHP";
$city = "Subotica";

write();
var_dump($city);

function write()
{
    global $school, $city;
    echo "$school $city<br>";
    $city = "Novi Sad";

}


$a = 3;
$b = 5;
calculate($a, $b); //calculate(3,5);
calculate(12, 4);
calculate(2, 5);

function calculate($a, $b)
{
    echo "$a<sup>$b</sup> = " . pow($a, $b) . "<br>";
}

?>
</body>
</html>