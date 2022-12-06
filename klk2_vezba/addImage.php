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


//03/73.php

if ($_FILES['file']["error"] > 0) {
    echo "Something went wrong during file upload!";
} else {
    if (isset($_FILES["file"]) and is_uploaded_file($_FILES['file']['tmp_name'])) {

        $file_name = $_FILES['file']["name"];
        $file_temp = $_FILES["file"]["tmp_name"];
        $file_size = $_FILES["file"]["size"];
        $file_type = $_FILES["file"]["type"];
        $file_error = $_FILES['file']["error"];
        $full_path = $_FILES['file']["full_path"]; // The full path as submitted by the browser.
        // This value does not always contain a real directory structure, and cannot be trusted. Available as of PHP 8.1.0.


        // http://en.wikipedia.org/wiki/Exchangeable_image_file_format
        // http://www.php.net/manual/en/book.exif.php


        echo exif_imagetype($file_temp) . "<br>";

        if (!exif_imagetype($file_temp))
            exit("File is not a picture!");


        echo "Ime poslate datoteke / A feltöltött fájl neve: $file_name <br />";
        echo "Privremena lokacija datoteke / Az ideiglenes fájl eljárási útja: $file_temp <br />";
        echo "Veličina poslate datoteke u bajtovima / A feltöltött fájl mérete bájtban: $file_size <br />";
        echo "Tip poslate datoteke / A feltöltött fájl típusa: $file_type <br />";
        echo "Kod greške / Hibakód: $file_error <br />";

        $ext_temp = explode(".", $file_name); //
        $extension = end($ext_temp);

        if (isset($_POST['alias'])) {
            $alias = $_POST['alias'];
        } else {
            $alias = "";
        }

        $new_file_name = Date("YmdHis") . "-$alias.$extension";
        // 20171110084338.jpg
        // 20191112134305-vts.jpg
        $directory = "gallery";

        $upload = "$directory/$new_file_name"; // gallery/20191112134305-vts.jpg

        /*

    201711289282.extension

    */

        if (!is_dir($directory)) //is_dir("images")
            mkdir($directory);

        if (!file_exists($upload)) //images/back.png
        {
            if (move_uploaded_file($file_temp, $upload)) {

                $size = getimagesize($upload);
                var_dump($size);
                foreach ($size as $key => $value)
                    echo "$key = $value<br>";

                echo "<img src=\"$upload\" $size[3] border=\"0\" alt=\"$file_name\">";

            } else
                echo "<p><b>Error!</b></p>";
        } else
            echo "<p><b>File with this name already exists!</b></p>";
    }
}





