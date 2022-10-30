<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 13</title></head>
<body>
<?php
$school = "StartIt";

$city = "Subotica";

if ($school === "StartIt") {
    echo "City - Subotica";
}


if ($city === "Subotica") {
    echo "<p>";
    echo "school - $school";
    echo "</p>";
}

if ($school !== "StartIt") {
    echo " unknown school! ";
} else {
    echo " City - Subotica ";
}
?>
</body>
</html>