<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EXIF</title>
</head>

<body>
<?php

$picture = "WP_000099.jpg";

$exif_data = exif_read_data("$picture", 0, true);

//$exif_data = exif_read_data("$picture");
// http://php.net/manual/en/function.exif-read-data.php

echo '<pre>';
print_r($exif_data);
echo '</pre>';
$lat = 0;
$long = 0;
/*
GPS
[0] => Degrees
[1] => Minutes
[2] => Seconds
*/
if (isset($exif_data['GPS']) and is_array($exif_data['GPS']) and count($exif_data['GPS']) > 0) {
    ///////////////// GPS LATITUDE ///////////////////

    $latRef = $exif_data['GPS']['GPSLatitudeRef'];

    $degrees = $exif_data['GPS']['GPSLatitude'][0];
    $parts = explode('/', $degrees);
    $degrees = $parts[0] / $parts[1];

    $minutes = $exif_data['GPS']['GPSLatitude'][1];
    $parts = explode('/', $minutes);
    $minutes = $parts[0] / $parts[1];

    $seconds = $exif_data['GPS']['GPSLatitude'][2];
    $parts = explode('/', $seconds);
    $seconds = $parts[0] / $parts[1];

    echo "<p><b>LATITUDE (širina / szélesség)</b>:  $degrees degrees $minutes minutes $seconds seconds</p>";
    $min_sec = $minutes * 60;
    $seconds += $min_sec;
    $total = $seconds / 3600;
    $lat = $total + $degrees;

    // N or S, S with - sign

    if ($latRef == "S")
        $lat *= -1;

    ///////////////// GPS LONGITUDE ///////////////////

    $lonRef = $exif_data['GPS']['GPSLongitudeRef'];

    $degrees = $exif_data['GPS']['GPSLongitude'][0];
    $parts = explode('/', $degrees);
    $degrees = $parts[0] / $parts[1];

    $minutes = $exif_data['GPS']['GPSLongitude'][1];
    $parts = explode('/', $minutes);
    $minutes = $parts[0] / $parts[1];

    $seconds = $exif_data['GPS']['GPSLongitude'][2];
    $parts = explode('/', $seconds);
    $seconds = $parts[0] / $parts[1];

    echo "<p><b>LONGITUDE (dužina / hosszúság)</b>:  $degrees degrees $minutes minutes $seconds seconds</p>";

    $min_sec = $minutes * 60;
    $seconds += $min_sec;
    $total = $seconds / 3600;
    $long = $total + $degrees;

    // E or W, W with - sign

    if ($lonRef == "W")
        $long *= -1;
}
/*
CONVERTING ALGORITHM

33° 25' 17" to decimal.

The steps involved will be :

1. First convert the minutes to seconds. For this multiply the minutes with 60. So in our example we will have 25 * 60 = 1500.

2. Then add the seconds to the value obtained from above step. Then we will have 17 + 1500 = 1517. This will be the total number of seconds.
    
3. Now divide the total number of seconds by 3600. So we will have 1517 / 3600 = 0.421388889.

4. Now add this value to the degrees to obtain the final decimal value. 0.421388889 + 33 = 33.421388889.

5. Check LatitudeRef (North or South) or LongitudeRef (East or West). 

If south add - sign
If west add - sign

http://curiositybeyondcontrol.blogspot.in/2012/07/convert-latitude-and-longitude-from.html
http://www.opanda.com/en/pe/help/gps.html

*/

echo "<p><img src=\"$picture\" alt=\"picture\" width=\"50%\" height=\"50%\"></p>";

if ($lat != 0 and $long != 0) {
    echo "<p><b>GPS: $lat, $long</b></p>";
    echo "<a href=\"https://maps.google.com/maps?q=$lat,$long\">show on google maps</a>";
}
?>
</body>
</html>