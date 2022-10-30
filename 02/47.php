<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 47</title>
</head>
<body>
<?php
$link = "one";
$links = ['one','two','three'];

if(isset($_GET['link'])) {
    $link = (string)$_GET['link'];
}

// if(is_callable($link))
if(is_callable($link) and in_array($link, $links)) {
    $link();
}

function one() {
    echo "<p>one</p>";
}

function two() {
    echo "<p>two</p>";
}

function three() {
    echo "<p>three</p>";
}

?>
</body>
</html>