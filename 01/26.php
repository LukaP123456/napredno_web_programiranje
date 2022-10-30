<?php
declare(strict_types=1); // strict requirement
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 26</title>
</head>
<body>
<?php
define('LANGUAGE', 'PHP');

function setHeight(int $b, int $minheight = 60) {
    echo "The height is : $minheight $b<br>";
    echo "Language is " . LANGUAGE . "<hr>";
}

function calculateFormula(int $a, int $b, array $d):int {
    $c = 2*$a+$b**3+array_sum($d);
    return $c;
    //return "vts";
}


setHeight(350);
//setHeight();
setHeight(135);
setHeight(80);
setHeight(10,30);

$d = [1,2,3];

echo "Result of formula is: ".calculateFormula(1,2,$d);

?>
</body>
</html>