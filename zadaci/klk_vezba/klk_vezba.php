<?php

$string = "php it css 21 45";

function sortLastChars(string $string):array
{
    $results = [];
   $temps = explode(" ",$string);

   foreach ($temps as $temp){
        if (!is_numeric($temp)){
            $results[]=$temp[strlen($temp)-1];
        }
   }
    sort($results);
   return $results;
}
$result = sortLastChars($string);
var_dump($result);