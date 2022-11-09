<?php
session_start();
unset($_SESSION["code"]);

/*
48-57 0 - 9
65-90 A-Z
97-122 a-z

*/

/*

$i =0;
$code = "";
$chars = "1234567890abcdefghijklmnopqrstwyzxu";
$length = mt_rand(5,8);
$end = strlen($chars) - 1;

while ($i < $length) {
    $character = $chars[(mt_rand(0, $end))]; // $chars[2]
    $code .= $character; // "3"."a"
    $i++;
}

*/
$length = mt_rand(5, 8);  // 5
$down = 48;
$up = 57;
$i = 0;
$code = "";

while ($i < $length) { // 48 - 0
    $character = chr(mt_rand($down, $up)); // chr(51) => "0"."3"
    $code .= $character; // "0"."2"

    $i++;
}


$_SESSION["code"] = $code;

header("Content-type: image/png");
$im = imagecreatefrompng("captcha.png") or die("Cannot Initialize new GD image stream");
$text_color = imagecolorallocate($im, 0, 0, 0);
$text_color2 = imagecolorallocate($im, 255, 0, 0);

$angles = [1,2,3,4,5,6,7,8,8,10,-1,-2,-3,-4,-5,-6,-7,-8,-9,-10];

$angle = mt_rand(-360,360);
//imagettftext($im, 11, 3, 5, 20, $text_color, __DIR__ . "/arial.ttf", $code);
imagettftext($im, 16, $angle, 16, 20, $text_color2, __DIR__ . "/arial.ttf", "VTS");

imagepng($im);
imagedestroy($im);
unset($code);