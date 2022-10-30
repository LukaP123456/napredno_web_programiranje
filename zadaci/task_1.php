<?php

$numbers = [1,2,3,4,'vts','php','Luka',12];

echo "Niz pre poziva funkcije: <br>";
var_dump($numbers);

echo "Neparni niz:<br>";
var_dump(getNumbersFromArray(3,$numbers));
echo '<hr>';

echo "Parni niz:<br>";
var_dump(getNumbersFromArray(2,$numbers));
echo '<hr>';
/**
 * @param int $parity
 * @param array $numbers
 * @return array
 */
function getNumbersFromArray(int $parity, array $numbers):array{
//    $newArray = [];
//
//    if ($parity %2 === 0){
//        foreach ($numbers as $item){
//            if (is_int($item) && $item %2 === 0){
//                array_push($newArray,$item);
//            }
//        }
//    }else{
//        foreach ($numbers as $item){
//            if (is_int($item) && $item %2 !== 0){
//                array_push($newArray,$item);
//            }
//        }
//    }
//
//    return $newArray;

    $remain = 0;
    $newArray = [];

    if ($parity %2 === 1){
        $remain = 1;
    }

    foreach ($numbers as $number){
        if (is_int($number) && $number %2 === $remain){
            $newArray[] = $number;
        }
    }

    return $newArray;
}