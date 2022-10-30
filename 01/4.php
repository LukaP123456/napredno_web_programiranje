<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>php 4</title>
</head>
<body>
<?php
$var0; // =NULL

var_dump($var0);

$var1 = "internet";
$Var1 = 24; 
$var2 = 23.45;
$_var3 = true;

$myFavouriteLanguage = "php"; // camel case
$my_favourite_language = "php"; // snake case

echo gettype($var0); // NULL
echo "<br>";
echo gettype($var1); // "string"
echo "<br>";
echo gettype($Var1); // "integer"
echo "<br>";
echo gettype($var2); // double 
echo "<br>";
echo gettype($_var3); // boolean 
echo "<br>";

var_dump($var1);
var_dump($var1, $var2, $_var3);


?>
</body>
</html>