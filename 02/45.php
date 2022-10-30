<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 45</title>
</head>
<body>
<?php

$a = 18;
$b = 2;

if($a>$b)
    [$a,$b] = [$b,$a];

var_dump($a,$b);

// https://www.php.net/manual/en/function.range.php

$numbers = range($a,$b);

var_dump($numbers);

// https://www.php.net/manual/en/function.array-map.php
// https://www.php.net/manual/en/function.array-filter.php

$numbersTwo = [1,5,43,78,90,123,24,44];


function checkParity(int $n):int|null|string {
//    return $n % 2 === 0 ? $n : null;
//    return $n;
//    return null;
return 'php';
}

var_dump($numbersTwo);


// $evenNumbers = array_filter(array_map('checkParity', $numbersTwo));
$evenNumbers = array_map('checkParity', $numbersTwo);

var_dump($evenNumbers);

$evenNumbers2 = array_filter($numbersTwo, "checkParity");

var_dump($evenNumbers2);

function getNumbersFromArray(int $parity, array $numbers) : array {
    return array_filter($numbers, function ($var)use ($parity) {
        return is_int($var) && $var % 2 === $parity % 2;
    });
}

$numbersThree = getNumbersFromArray(3,$numbers);

var_dump($numbersThree);



?>
</body>
</html>