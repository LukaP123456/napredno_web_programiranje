<?php
session_start();
$_SESSION["captcha"] = NULL;

$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuwxyz";
$end = strlen($chars) - 1;
$length = mt_rand(3, 6); 
$i = 0;
$code = "";

while ($i < $length) {
    $character = $chars[(mt_rand(0, $end))];
    if($i % 2 == 1) {
        if (ctype_upper($character)) {
            continue;
        } else {
            $code .= strtoupper($character);
        }
    } else {
        $code .= strtolower($character);
    }
    $i++;
}

$_SESSION["captcha"] = $code;

$day = date("d");

header("Content-type: image/png");
$im = imagecreatefrompng("captcha.png") or die("Cannot Initialize new GD image stream");
if($day % 2 == 0) {
    $text_color = imagecolorallocate($im, 0, 255, 0);
} else {
    $text_color = imagecolorallocate($im, 255, 0, 0);
}

imagettftext($im, 11, 3, 5, 20, $text_color, __DIR__ . "/arial.ttf", $code);

imagepng($im);


?>