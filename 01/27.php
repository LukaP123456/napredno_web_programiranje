<?php

writeData(1, 2);
writeData(1, 2, 3);

function writeData($a, $b, $c = 'choose')
{
    echo "1. parameter $a <br>";
    echo "2. parameter $b <br>";
    echo "3. parameter $c <br>";
}

$a = $b = $c = "vts";

writeDataTwo($a, $b, $c);
writeDataTwo($a, $b);

function writeDataTwo($a, $b, $c)
{
    echo "1. parameter $a <br>";
    echo "2. parameter $b <br>";
    echo "3. parameter $c <br>";
}

