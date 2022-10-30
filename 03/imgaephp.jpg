<?php
// exif_thumbnail - Retrieve the embedded thumbnail of a TIFF or JPEG image
// http://php.net/manual/en/function.exif-thumbnail.php
// https://www.php.net/manual/en/function.base64-decode

$picture = "WP_000099.jpg";

$image = exif_thumbnail($picture, $width, $height, $type);
if ($image !== false) {
    echo "<img  width='$width' height='$height' src='data:image/gif;base64," . base64_encode($image) . "'>";
}

