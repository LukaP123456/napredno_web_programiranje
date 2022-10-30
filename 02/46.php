<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 46</title>
</head>
<body>
<?php
// https://php.watch/versions/8.0/mixed-type
// https://php.watch/versions/8.0/union-types
/*
mixed is equivalent to a Union Type of:
string|int|float|bool|null|array|object|callable|resource
*/

function getMessage(mixed $data): mixed
{
    return is_int($data) ? "Your data is integer and it is $data" : false;
}

$message = getMessage("php");

var_dump($message);
///////////////////////////////////////////////////////////////////////////////////

$message = getMessage(12);

var_dump($message);

//  You can declare a type as nullable by prefixing a ? sign to the type.
//  With PHP 8.0 Union Types, int|null will be functionally equivalent to ?int.

function getData(?int $data): mixed {
    return is_int($data) ? "You are integer - $data" : null;
}


$data = getData(12);

var_dump($data);

////////////////////////////////////////////////////////////////////////////////

$data2 = [2,45,"vts",[1,2],"1a"];

function getData2(int|string|array $data):int|false
{
    $sum = false;
    if (is_array($data)) {
        foreach ($data as $d) {
            if (!is_array($d)) {
                $sum += (int)$d;
            }
        }
    }
    else if(is_int($data)) {
        $sum = $data;
    }

    return $sum;
}
$result = getData2($data2);
//$result = getData2(1);
var_dump($result);


////////////////////////////////////////////////////////////////////////////////

function printFormatted(callable $format, string $str):void {
    echo $format($str);
    echo "<br>";
}

function exclaim($str) { return $str . " funkcija exclaim"; }
printFormatted("exclaim", "Hello World");

///////////////////////////////////////////////////////////////////////////////

function foo() {
    echo 'foo';
}

function run(callable $callback) {
    $callback();
}

run('foo'); // 'foo'
var_dump(is_callable('foo')); // bool(true)

//////////////////////////////////////////////////////////////////////////////

$greet = function($name)
{
    printf("Hello %s\r\n", $name);
};

$greet('World');
$greet('PHP');



?>
</body>
</html>