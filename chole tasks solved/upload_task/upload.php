<?php

if ($_FILES['file']["error"] > 0) {
    header("Location:index.php?error=1");
    exit();
}

if (!is_uploaded_file($_FILES['file']['tmp_name'])) {
    header("Location:index.php?error=2");
    exit();
}

if(exif_imagetype($_FILES['file']['tmp_name']) == 2 OR exif_imagetype($_FILES['file']['tmp_name']) == 3) {
    $directory = "images";
    if($_FILES['file']['size']> 204800)
        $directory.= "/big";
    else
        $directory.= "/small";
}
else {
    $directory = "others";
}

[ 'extension' => $extension] =  pathinfo($_FILES["file"]["name"]);

$newFileName = md5(time().'-'.mt_rand(100,200)).'.'.$extension;
$upload = $directory."/".$newFileName;

if(!move_uploaded_file($_FILES['file']['tmp_name'],$upload)) {
    header("Location:index.php?error=3");
    exit();
}else {
    echo "File with $newFileName name is uploaded in $directory directory!";
}
