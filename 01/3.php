<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 3</title>
</head>
<body>
<?php


$var = 12; // integer
$var = "string"; // string

$_first = "start it first";

//echo $_first;

echo "<p><b>\$_first = $_first</b></p>";
echo "<p><b>" . $_first . "</b></p>";

echo '<p><b>' . $_first . '</b></p>';


//$var0;
$var0 = null;
//$var0 = null;// NULL


$type = gettype($var0); // "NULL"
$type2 = gettype($_first);

echo "<p><b>type of variable var0 is $type</b></p>";

echo "<p><b>type of variable first is $type2</b></p>";


var_dump($_first);


echo gettype($var0);

var_dump($var0);
var_dump($type);

$var1 = "php";
$var1 = 12;

var_dump($var1);

echo gettype($var1);

$Var1 = 24;

$var2 = 23.45; // error  $2var = 23.45
$_var3 = true;

echo "<b>$var2</b><br>";

echo '<b>$var2</b><br>';

echo '<b title="php">php ' . $greetings . '</b><br>';

/*


    String
    Integer
    Float (floating point numbers - also called double)
    Boolean
    Array
    Object
    NULL
    Resource
        
*/

echo "<b title=\"Subotica\">024</b>";

echo "<b>\$var1 = $var1</b> <br>";

echo $var1;

echo $var1 . "<br>";

echo "$var1 <br>";

echo "$var1 <br>";

echo "php" . "024";

echo $Var1;

echo $Var1 . "<br>";
echo "$var2 <br>";
echo "$_var3 <br>";
echo "\$var1 =  $var1 ";
echo "<br>what is <span title=\"PHP is ...\" style=\"cursor:help;border-bottom:dotted 1px #000\">PHP</span>?";


?>
</body>
</html>