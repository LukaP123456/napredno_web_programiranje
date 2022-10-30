<?php
// exif_thumbnail - Retrieve the embedded thumbnail of a TIFF or JPEG image
// http://php.net/manual/en/function.exif-thumbnail.php

$picture = "WP_000099.jpg";

$image = exif_thumbnail($picture, $width, $height, $type);


if ($image !== false) {
    header('Content-type: ' . image_type_to_mime_type($type));
    echo $image;
    exit;
}

?>
