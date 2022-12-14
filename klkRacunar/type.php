<?php

// 3.task
$temp = trim(' #web! App19 dEsign sun tea $maRketiNG$sKY yES oH Se0o4 ');
$array = explode(" ", $temp);
$keyWords = [];

foreach ($array as $value) {
    if (strlen($value) > 3) {
        $keyWords[] = $value;
    }
}

var_dump($keyWords);

// 4.task
foreach ($keyWords as $key => $value) {
    for ($i = 0; $i < strlen($keyWords[$key]); $i++) {
        if (!(ctype_alpha($keyWords[$key][$i]))) {
            $keyWords[$key] = preg_replace("/[^a-zA-Z]+/", "", $keyWords[$key]);;
        }
    }
}

var_dump($keyWords);

// 5. task
$keyWords = array_map("strtoupper", $keyWords);

foreach ($keyWords as $key => $value) {
    for ($i = 0; $i < strlen($value); $i++) {
        if ($i % 2 != 1) {
            $value[$i] = strtolower($value[$i]);
        }
    }
    $keyWords[$key] = $value;
}

var_dump($keyWords);

// 6.task

$beforeLastChars = [];

foreach ($keyWords as $key => $value) {
    for ($i = 0; $i < strlen($value); $i++) {
        $end = strlen($keyWords[$key]) - 2;
        if ($i == $end) {
            $beforeLastChars[] = $keyWords[$key][$i];
        }
    }
}

var_dump($beforeLastChars);

?>