<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 69</title>
</head>

<body>
<?php

$color = $family = $size = $name = "";

if(isset($_POST['color'])) {
    $color = $_POST["color"];
}

if(isset($_POST['family'])) {
    $family = $_POST["family"];
}

if(isset($_POST['size'])) {
    $size = $_POST["size"];
}

if(isset($_POST['name'])) {
    $name = $_POST["name"];
}

echo "<p style=\"color:$color;font-family:$family;font-size:${size}pt;\">Hello $name</p>";

?>
</body>
</html>