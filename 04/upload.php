<?php

if ($_FILES['file']["error"] > 0) {
    header("Location:index.php?error=1");
    die();
}

if (!is_uploaded_file($_FILES['file']['tmp_name'])) {
    header("Location:index.php?error=2");
    die();
}

if (isset($_FILES["file"]) and is_uploaded_file($_FILES['file']['tmp_name'])) {

    $file_name = $_FILES['file']["name"];
    $file_temp = $_FILES["file"]["tmp_name"];
    $file_size = $_FILES["file"]["size"];
    $file_type = $_FILES["file"]["type"];
    $file_error = $_FILES['file']["error"];
//    $full_path = $_FILES['file']["full_path"];

    // http://en.wikipedia.org/wiki/Exchangeable_image_file_format
    // http://www.php.net/manual/en/book.exif.php

    if (exif_imagetype($file_temp) == 2 or exif_imagetype($file_temp) == 3) {
        $directory = "imgs";
        if ($_FILES['file']['size'] > 204800) {
            $directory .= "/big";
        } else {
            $directory .= "/small";
        }
    } else {
        $directory = "others";
    }

    ['extension' => $extension] = pathinfo($_FILES["file"]["name"]);

    $new_file_name = md5(time() . '-' . mt_rand(100, 200)) . '.' . $extension;

    $upload = $directory . "/" . $new_file_name;

    if (!move_uploaded_file($_FILES['file']['tmp_name'], $upload)) {
        header("Location:index.php?error=3");
        die();
    } else {
        echo "File is $new_file_name is uploaded to $directory";
    }
}
