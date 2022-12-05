<?php
session_start();

if (isset($_SESSION['id_user'])){
    echo "Korisnik je prijavljen";
}

if (!isset($_POST['submit']) and !isset($_POST['ime'])) {
    header("Location:index.php?e=1");
    die();
}

$allowedTypes = array(IMAGETYPE_PNG);
$detectedType = exif_imagetype($_FILES['fajl']['tmp_name']);
$error = !in_array($detectedType, $allowedTypes);

if (!empty($error)){
    header("Location:newImage.php?e=1");
    die();
}

$opis = strip_tags( $_POST['opis'],['<b>','<i>','<u>']);





