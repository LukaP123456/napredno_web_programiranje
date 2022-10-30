<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 23</title>
</head>
<body>
<?php



$school = "PHP";
$city = "Subotica";
$a = 3;
$b = 5;

write();

echo "<p>$school</p>";

calculate();
echo calculate2($a, $b); // echo $c;

/*
$d = calculate2($a, $b)	
*/


set_value();
echo "<br> $b";

if (greater($a, $b) === false) // if(false === false)
    echo "<p> a is less then b </p>";


////////////////////////////////////////////////////////
// functions
///////////////////////////////////////////////////////


function write()
{
    global $school, $city;

    echo "$school $city<br>";

    $school = "024";
}


/**
 *
 */
function calculate()
{
    global $a, $b;

    echo pow($a, $b) . "<br>";

}

$a = 2;
$b = 3;

$d = calculate2($a, $b); // $d = $c;
//echo calculate2($a,$b); // echo $c;


/**
 * Calculates and returns pow for two numbers
 *
 * @param integer $a
 * @param integer $b
 * @return integer $c
 */
function calculate2($a, $b)
{
    $a = (int)$a;
    $b = (int)$b;

    if (is_int($a) and is_int($b)) {
        $c = pow($a, $b);
        return $c;
        //return pow($a, $b);
    } else {
        return false;
    }
}

$r = calculate2(2,"vts"); // $r = $c;
var_dump($r);

function set_value()
{

    $b = 35;

}

function greater($a, $b)
{

    if ($a > $b)
        return true;
    else
        return false;

}

second();
second();
second();


function second()
{
    static $c = 0;
    //$c = 0;
    echo "$c<br />";
    $c++;
}


/**
 * somehting tkejtkejtkejtkejtkejtje
 * tjektjektj ekte
 * tjektjektjketjke
 *
 * @param $a
 * @param $b
 * @return int
 */
function testIt($a, $b): int
{
    $c = $a + $b;
    //$c = "vts";
    return $c;
}


$p1 = 12;
$p2 = 10;

var_dump($p1);
var_dump($p2);

function global2() {
    $p1 = 1;
    $p2 = 3;
    $r = $p1+$p2;
    $d = $GLOBALS['p1']+$GLOBALS['p2'];
    $GLOBALS['p1'] = "vts";
    echo $d;
    echo "<p>".$r."</p>";
}

var_dump($GLOBALS);

global2();

var_dump($p1);
var_dump($p2);
echo "<p>Return value of testIt function is " . testIt($a, $b) . "</p>";

?>
</body>
</html>