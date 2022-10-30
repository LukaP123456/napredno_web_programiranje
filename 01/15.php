<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 15</title>
</head>
<body>
<?php

$school = "ftn";

switch ($school) {

    case "ftn":
        echo "Novi Sad";
        break;

    case "fon":
        echo "Beograd";
        break;

    case "StartIt":
    case "vts":
    case "gdf":
    case "eccf":
        echo "Subotica";
        break;

    case "tfzr":
        echo "Zrenjanin";
        break;

    default:
        echo "Sorry, unknown school!";
        break;
}

?>
</body>
</html>