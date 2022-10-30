<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 12</title>
</head>
<body>


<?php
//$array1 = [];
$array1 = [1, 2, 56, 333, "su"];
//$array2 = array();
$array2 = array(12, 44, 5555, 6777);

echo $array1[0] . "<br>";

echo "<pre>";
var_dump($array1);
echo "</pre>";

echo $array2[3] . "<br>";

echo "<pre>";
var_dump($array2);
echo "</pre>";

$array3[2] = 12;
$array3[4] = 12;
$array3[5] = 12;
$array3[9] = 12;
$array3[11] = 14;
$array3[] = 13;
$array3[6] = 14;
$array3[] = 15;

echo $array3[5] . "<br>";

echo "<pre>";
var_dump($array3);
echo "</pre>";

$array3[] = "34";
$array3[22] = "024";
$array3[22] = 89;
$array3[] = 100;

echo "<pre>";
var_dump($array3);
echo "</pre>";

$array4 = array(
    "one" => 1,
    "two" => 2,
    "email" => 'something@gmail.com'
);

echo $array4['email'] . "<br>";

echo "<pre>";
var_dump($array4);
echo "</pre>";

$array5 = [
    "one" => 11,
    "two" => 22,
    "email" => 'something2@gmail.com'
];

echo $array5['email'] . "<br>";

echo "<pre>";
var_dump($array5);
echo "</pre>";

$prom1 = "024";

$array6['one'] = 12;
$array6['email'] = "something@me.com $prom1"; // 'something@me.com 024'
$array6['name'] = "Me";

echo "<pre>";
var_dump($array6);
echo "</pre>";

$array7 = [
    0 => 1,
    1 => 2,
    4 => 5
];

echo "<pre>";
var_dump($array7);
echo "</pre>";


echo "<p>\$array1 has " . count($array1) . " elements</p>";
echo "<p>\$array2 has " . count($array2) . " elements</p>";
echo "<p>\$array3 has " . count($array3) . " elements</p>";
echo "<p>\$array4 has " . count($array4) . " elements</p>";
echo "<p>\$array5 has " . count($array5) . " elements</p>";
echo "<p>\$array6 has " . count($array6) . " elements</p>";
echo "<p>\$array7 has " . count($array7) . " elements</p>";

$array8[0][1] = 12;
$array8[0][2] = 13;

echo "<pre>";
var_dump($array8);
echo "</pre>";

$array9[1] = [
    1 => 12,
    2 => 13
];

$array9[0] = [
    1 => 12,
    2 => 13
];

$array9[] = [11, 12, 13];

echo $array9[2][2];

echo "<pre>";
var_dump($array9);
echo "</pre>";
echo "<pre>";
$array10 = [
    [
        'id' => "12",
        'name' => 'n1',
        'email' => 'n1@n1.com'
    ],
    [
        'id' => 18,
        'name' => 'n2',
        'email' => 'n2@n1.com'
    ],
];
echo $array10[1]['email'];

var_dump($array10);
echo "</pre>";
?>
</body>
</html>