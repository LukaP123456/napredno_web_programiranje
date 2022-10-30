<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 30</title>
</head>
<body>
<?php


function getString(int $age, string $school = "Subotica Tech", string $city="Subotica", string $country = "Serbia"):string {
    return "<p>I'm $age old student. I study at $school in $city, $country.</p>";
}


echo getString(20, "VTS");
echo getString(22, school:"FTN", city: "Novi Sad");
echo getString(21, school:"Obuda University", country: "Hungary");
echo getString(22);


?>
</body>
</html>