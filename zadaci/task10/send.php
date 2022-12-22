<?php
require "functions.php";
require "Mail.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Form has been submitted
    $subject = $_POST['subject'];
    $to = $_POST['to'];
    $cc = $_POST['cc'];
    $bcc = $_POST['bcc'];
    $text = $_POST['text'];
    $is_html = isset($_POST['is_html']) ? $text : strip_tags($text);
    $file = $_FILES['file'] ?? "No file";
    // Validate the form data
    if (empty($subject) || empty($to) || empty($text)) {
        // Form fields are empty
        header('Location:index.php?error=empty');
        exit;
    }
    if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
        // Invalid email address
        header('Location:index.php?error=invalid-to');
        exit;
    }

    Mail::sendMail('Hello',$to);
    getCountryCode();

    if (!empty($_FILES['file']['tmp_name'])) {
        $directory = "files/";
        $extension = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
        $newFileName = time() . '-' . mt_rand(100, 1000) . '-' . date('j') . '.' . $extension;

        if (!move_uploaded_file($_FILES['file']['tmp_name'], $directory . $newFileName)) {
            header('Location:index.php?error=failed-to-move');
            die();
        }


    } else {
        // Form has not been submitted
        echo 0;
    }
}