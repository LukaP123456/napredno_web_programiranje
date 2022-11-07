<?php
require 'functions.php';

$values_array = ['name', 'email', 'days', 'months', 'years', 'comment', 'status'];
$error_string = './index.php?';

foreach ($values_array as $item) {
    if (empty($_POST[$item])) {
        header("Location:" . $error_string . 'm=1');
        die();
    }

    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($connection, trim(strip_tags($value)));
    }
}

if (!empty($_FILES['image']['tmp_name'])) {
    if (!exif_imagetype($_FILES['image']['tmp_name']) and $_FILES['image']['size'] < 1000000) {
        header("Location:" . $error_string . 'm=2');
        die();
    }
    $directory = "./comment_images/";
    $extension = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
    $newFileName = time() . '-' . mt_rand(100, 1000) . '-' . date('j') . '.' . $extension;

    if (!move_uploaded_file($_FILES['image']['tmp_name'], $directory . $newFileName)) {
        header("Location:" . $error_string . 'm=3');
        die();
    }
    getFilteredCommentData(email: $email, name: $name, comment: $comment, badWords: $badWords, connection: $connection, file_name: $newFileName, status: $status);
} else {
    $newFileName = "no file";
    getFilteredCommentData(email: $email, name: $name, comment: $comment, badWords: $badWords, connection: $connection, file_name: $newFileName, status: $status);
}


















