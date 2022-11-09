<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 80</title>
</head>
<body>
<?php
/*
https://www.php.net/manual/en/function.date.php
https://php.net/manual/en/timezones.php
https://www.php.net/manual/en/datetime.format.php
*/

date_default_timezone_set('Europe/Belgrade');

echo time();

echo "<br><b> Današnji datum i vreme / A mai dátum és idő: </b>";
echo date("Y.m.d. H:i:s") . "<br>";
echo date("Y.m.d. H:i:s", time()) . "<br>";

echo date("Y.m.d. H:i:s");


?>
</body>
</html>