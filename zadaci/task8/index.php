<?php
require "config.php";
require "db_config.php";
require "functions.php";

$pdo = connectDatabase($dsn, $pdoOptions);

//$day = date('j');
$day = 6;
$month = 1;
//$month = date('n');
$data = dynamicHolidays($day, $month, $pdo);

if (!empty($data)) {

    echo "Danas je" . $data[0]['name'] . "<br>";
    echo "<img alt='slika' src='pictures/" . $data[0]['picture'] . "' ><br>";
    echo $data[0]['day'] . "<br>";
    echo $data[0]['month'] . "<br>";
    echo $data[0]['slogan'] . "<br>";

    mail('admin@vts.rs', "Danas je praznik!", $data[0]['slogan']);
    setcookie('HOLIDAY_SLOGAN', md5($data[0]['name']), strtotime('+15 minutes'));
}

