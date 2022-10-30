<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 14</title>
</head>
<body>
<?php


$auto = "Toyota";

if ($auto === "Toyota") {
    echo "Toyota - Japan<br>";
} elseif ($auto === "Hyundai" OR $auto === "Zastava" OR $auto === "YUGO") {
    echo "Hyundai - Korea";
} else {
    echo "unknown country";
}
?>
</body>
</html>
