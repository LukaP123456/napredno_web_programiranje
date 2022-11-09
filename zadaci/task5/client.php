<?php
require "config.php";

$c = " p0hp24 2c9ss s3ass 0mys23ql 0html11 ha0mbu1rger6 ";

preg_match_all('!\d+!', $c, $numbers);

$numbers_temp = preg_replace("/[^0-9]/", '', $c);
$numbers = str_split($numbers_temp, 3);

asort($cities);
$citiesTemp = $cities;
var_dump($citiesTemp);
