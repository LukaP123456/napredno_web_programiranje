<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 28a</title>
</head>
<body>
<?php

function one() {
    echo "<p>one</p>";
}

function two() {
    echo "<p>two</p>";
}

function three() {
    echo "<p>three</p>";
}

function cetiri() {
    echo "<p>cetiri</p>";
}

$function_var = "one";
$links = ['one','two','three','cetiri'];

if(isset($_GET['link']) AND in_array($_GET['link'], $links)) {
    $function_var = $_GET['link'];
}


$function_var(); // one()

/*if($function_var == "one") {
    one();
}
elseif ($function_var == "two") {
    two();
}
elseif ($function_var == "three") {
    three();
}*/

?>
<a href="28a.php?link=one">one</a><br>
<a href="28a.php?link=two">two</a><br>
<a href="28a.php?link=three">three</a><br>
<a href="28a.php?link=cetiri">cetiri</a>
</body>
</html>