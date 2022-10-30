<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 65</title>
</head>

<body>
<pre>
<?php

var_dump($_GET);

$pl = $_GET["pl"];
$color = $_GET["color"];

echo "<span style=\"color:$color;\">Your favorite language is <b>$pl</b></span>";
?>
    </pre>
</body>
</html>
