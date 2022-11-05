<?php
require 'config.php';
require 'functions.php';

if (isset($_POST["name"]) && isset($_POST["email"])
    && isset($_POST["days"]) && isset($_POST["months"])
    && isset($_POST["years"]) && isset($_POST["comment"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $day = $_POST["days"];
    $month = $_POST["months"];
    $year = $_POST["years"];
    $comment = $_POST["comment"];

} else {
    header("Location:index.php");
}


