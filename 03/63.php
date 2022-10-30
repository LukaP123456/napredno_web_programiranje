<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 63</title>
</head>

<body>
<?php
// https://www.php.net/manual/en/function.var-export
/*
Arrow functions have the basic form fn (argument_list) => expr.

Arrow functions support the same features as anonymous functions, except that using variables from the parent scope is
always automatic.

The following illustrates the basic syntax for arrow functions:

fn (arguments) => expression;

In this syntax, an arrow function

    Start with the fn keyword.
    Can have only one expression and return this expression.

The arrow function is functionally equivalent to the following anonymous function:

function(arguments) { return expression; }

When a variable used in the expression is defined in the parent scope it will be implicitly captured by-value. In the
following example, the functions $fn1 and $fn2 behave the same way.
 */

$a = [1, 2, ["a", "b", "c"]];
var_export($a);//ispisuje array kao string
//echo $a;
$y = 1;

$fn1 = fn($x) => $x + $y;
// equivalent to using $y by value:
$fn2 = function ($x) use ($y) {
//    $y = 12;
    return $x + $y;
};
echo "<hr>";
var_export($fn1(3));
echo "<hr>";
var_dump($y);
echo "<hr>";

function multiplier($x)
{
    return fn ($y) => $x * $y;
}

$pomnozi = multiplier(2);

echo $pomnozi(10); // 20
echo "<hr>";

$eq = fn ($x, $y) => $x == $y;

echo $eq(100, '100'); // 1 (or true)

echo "<hr>";

$list = [10, 20, 30];

$results = array_map(
    fn ($item) => $item * 2,
    $list
);//izvrsice rekurzivnu funkciju nad svakim elementom niza i vratice novi niz

var_dump($results);
?>
</body>
</html> 
