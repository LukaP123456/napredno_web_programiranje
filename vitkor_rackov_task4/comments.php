<?php
include_once 'config.php';
include_once 'functions.php';

$array = ['name', 'email', 'comment', 'day', 'year', 'month'];
$errorString = './index.php?';
$counter = 0;
foreach ($array as $item) {
    if (empty($_POST[$item])) {
        $counter++;
        $errorString .= 'error' . $counter . '=' . $item . '&';
    }
}
if ($counter) {
    header('Location: ' . $errorString . 'counter=' . $counter);
}

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$day = $_POST['day'];
$year = $_POST['year'];
$month = $_POST['month'];
$date = $day . '-' . $month . '-' . $year;

$data = getFilteredCommentData($comment, $badWords);
insertData($data, $name, $email, $comment);
