<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 16</title></head>
<body>
<?php
$happy = "no";
$yes = "We are glad that you have a nice day!";
$no = "We are sorry that you have a bad day!";

function yes() {
    return "yes";
}
function no() {
    return "no";
}

$message = $happy != "very" ? yes() : no();

echo "$message";

$message = $happy != "very" ? $yes : $no;

if($happy!="very")
    $message = $yes;
else
    $message = $no;

/*

	? - uslovni operator / feltételes operátor

	if($happy!="very")
	$message = $yes;
	else
	$message = $no;

	(condition) ? TRUE : FALSE

*/

?>
</body>
</html>