<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 21</title>
</head>
<body>
<?php
write();
write();
write();

$a = 12;
calculate($a);
calculate(34);
calculate(12);
echo $a;


// error function write-down(), function 2write()
// function write down()

function write()
{
    echo "PHP Subotica<br>";
}



write();
Write();

write();

function calculate($a)
{
    var_dump($a);

    //$a = 2;
    $b = 3;
    $exponent = 1;

    for ($i = 1; $i <= $b; $i++) {
        $exponent = $exponent * $a;
    }
    //$exponent = pow($a,$b);

    // pow()
    echo "$a<sup>$b</sup>  = $exponent <br>";
}


calculate(2);


?>
</body>
</html>