<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 38</title>
</head>
<body>

<?php

$first = ["a", "b", "c"];
$second = [1, 2, 3];

$third = array_merge($first, $second);

var_dump($third);

$f1 = ['a' => 23, 'b' => 45, 'd' => 12];

$s1 = ['a' => 43, 'b' => 423, 'c' => 33];

foreach ($s1 as $value) {
    echo "$value <br>";
}


//$third_two = array_merge($f1, $s1);
echo "<pre>third";
$third_two = array_merge_recursive($f1, $s1);
var_dump($third_two);
echo "</pre>";

echo "First array:<br>";

for ($i = 0; $i < count($first); $i++)
    echo "$first[$i] <br>";// 0 1 2

echo "<br>Second array:<br>";

$second = [1, 2, 3];
/*
 0=1
1=2
2=3
$cart[134] = 12;
$cart[12] = 2;
$cart[56] = 1;
foreach($cart as $key=>$value)
{

}

$cart[0] = array("id"=>12,"amount"=>2,"price"=>345);
$cart[1] = array("id"=>12,"amount"=>2,"price"=>345);
$cart[2] = array("id"=>12,"amount"=>2,"price"=>345);

 */
foreach ($second as $key => $value) // 1,2,3
    echo "$key=$value <br>";

echo "<br>Third array:<br>";

foreach ($third as $value)
    echo "$value <br>";

var_dump($third);
echo "<br>";

$numbers = [1, 5, 3, 6, 789, 34, 23, 45, 11, 89];

$odd = [];
$even = [];

foreach ($numbers as $value) {
    if ($value % 2 == 0)
        $even[] = $value;
    else
        $odd[] = $value;
}

echo "<br>Numbers in the array: ";
var_dump($numbers);

echo "<br><br>Odd numbers in the array: ";
var_dump($odd);

echo "<br><br>Even numbers in the array:";
var_dump($even);

?>
</body>
</html>