<?php

if (empty($_POST['word'])) {
    header('Location:index.php');
}

$word = $_POST['word'];


