<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 64</title>
</head>
<body>
<pre>
<?php

$user = "";
$pass = "";

var_dump($_POST);
var_dump($_GET);

if (isset($_POST["user"]))
    $user = $_POST["user"];

if (isset($_POST["pass"]))
    $pass = $_POST["pass"];

if (empty($_POST['user']))
    echo "USER IS EMPTY<br >";


$test = 0;

$p = isset($test);
var_dump($p);

$p2 = empty($test);
var_dump($p2);


/*
    empty

    Returns FALSE if var exists and has a non-empty, non-zero value. Otherwise returns TRUE.

    The following things are considered to be empty:

    "" (an empty string)
    0 (0 as an integer)
    0.0 (0 as a float)
    "0" (0 as a string)
    NULL
    FALSE
    array() (an empty array)
    $var; (a variable declared, but without a value)

	if(isset($a) AND isset($b))   Determine if a variable is set and is not NULL.


*/


$sb = $_POST["sb"];

echo "username: $user<br>";
echo "password: $pass <br>";
echo "sb: $sb <br>";

?>
    </pre>
</body>
</html>
