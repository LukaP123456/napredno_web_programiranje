<?php
session_start();

if (isset($_SESSION['id_user'])) {
    echo "Korisnik je prijavljen";
}

if (!isset($_POST['submit']) and !isset($_POST['ime'])) {
    header("Location:index.php?e=1");
    die();
}

if (empty($_FILES['fajl']['tmp_name'])){
    header("Location:newImage.php?e=2");
    die();
}

$allowedTypes = IMAGETYPE_PNG;
$detectedType = exif_imagetype($_FILES['fajl']['tmp_name']);

if ($detectedType != $allowedTypes) {
    header("Location:newImage.php?e=1");
    die();
}

$opis = strip_tags($_POST['opis'], ['<b>', '<i>', '<u>']);

$target_dir = "gallery/";
//$target_file = $target_dir.






