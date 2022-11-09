<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php 79</title>
</head>
<body>
<?php
echo "<b>vremenska oznaka / időbélyeg</b> = " . time() . "<br><br>";
echo "<pre>";
$datum_array = getdate();

var_dump($datum_array);

echo "</pre>";

foreach ($datum_array as $key => $value) {
    echo "<b>$key </b>= $value<br>";
}

echo "<br><b> Današnji datum / A mai datum:</b> ";

echo $datum_array['year'] . "." . $datum_array['mon'] . "." . $datum_array['mday'] . ".";

/*
 
 time()
 
 Return current UNIX timestamp
 
 Returns the current time measured in the number of seconds since
the Unix Epoch (January 1 1970 00:00:00 GMT).
 
 01.01.1970. 00:00:00
 
*/


?>

</body>
</html>