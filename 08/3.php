<?php
require_once 'config.php';
require_once 'db_config.php';
$pdo = connectDatabase($dsn, $pdoOptions);


$sql = "INSERT INTO users
        (username, firstname, lastname, email, registration_expires, active)
         VALUES
        (:username,:firstname,:lastname,:email,:registration_expires,:active)";


$query = $pdo->prepare($sql);
$query->bindParam(':username', $username, PDO::PARAM_STR);
$query->bindParam(':firstname', $firstname, PDO::PARAM_STR);
$query->bindParam(':lastname', $lastname, PDO::PARAM_STR);
$query->bindParam(':email', $email, PDO::PARAM_STR);
$query->bindParam(':registration_expires', $registrationExpires, PDO::PARAM_STR);
$query->bindParam(':active', $active, PDO::PARAM_INT);

$username = "vts2";
$firstname = "vts";
$lastname = "vtsss";
$email = "vts@vtsss.com";
$registrationExpires = date('Y-m-d H:i:s');
$active = 1;

$query->execute();

$lastInsertId = $pdo->lastInsertId();

echo $lastInsertId;
