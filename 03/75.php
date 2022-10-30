<?php

$exif_data= exif_read_data( 'WP_000099.jpg' );
echo '<pre>';
print_r($exif_data);
echo '</pre>';
// exif_read_data - Reads the EXIF headers from JPEG or TIFF
// http://php.net/manual/en/function.exif-read-data.php
echo $exif_data["Model"];
?>