<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 67</title>
</head>

<body>
<pre>
<?php
$films = ["matrix", "terminator", "star wars", "dirty dozen", "d-day", "black hawk down"];
$film = [];

if (isset($_GET["film"]))
    $film = $_GET["film"];

$sb = $_GET["sb"];
//var_dump($_GET);


//count(array_diff($film, $films))==0
//https://www.php.net/manual/en/function.array-diff.php

//var_dump(array_diff($film, $films));

//if (!empty($film) AND $sb == "send" AND !array_diff($film, $films)) {
if (!empty($film) and $sb == "send" and count(array_diff($film, $films)) == 0) {
    echo "Your favorites :<br>";
    foreach ($film as $filmName)
        echo "$filmName <br>";
} else {
    echo "You have no favorites films!";
}

?>
    </pre>
</body>
</html>
