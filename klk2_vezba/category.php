<?php

$cat = " n2a4t5u25re spo12r54t funn82y sea2! su#!mmer!";
$cat_arr = explode(" ", trim($cat));

function Parse($cat_arr)
{
    if (strlen($cat_arr) > 4) {
        if (str_contains($cat_arr, '!') or str_contains($cat_arr, '#')) {
            return "FALSE";
        } else {
            return $cat_arr;
        }
    }
}

function parse_numbers($cat_temp)
{
    if ($cat_temp != "FALSE") {
        $value = preg_replace('/\d+/u', '', $cat_temp);
        $key = preg_replace("/[^0-9]/", '', $cat_temp);
        if ($value == null) {
            return 1;
        }
        return ([$key => $value]);

    }
}

$cat_temp = array_map('Parse', $cat_arr);
$categories = (array_map('parse_numbers', $cat_temp));
ksort($categories);