<?php

function write()
{
    global $school, $city;

    echo "$school $city<br>";
}

function calculate()
{
    global $a, $b;

    echo pow($a, $b) . "<br>";

}

function calculate2($a, $b)
{
    $c = pow($a, $b);

    return $c;

}

function set_value()
{

    $b = 35;

}

function greater($a, $b)
{

    if ($a > $b) {
        return true;
    } else {
        return false;
    }
}

function second()
{
    static $c = 0;
    echo "$c<br>";
    $c++;
}

?>