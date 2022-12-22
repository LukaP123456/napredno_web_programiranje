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


$users = [
    ['username' => 'vts1', 'firstname' => 'vts1fn', 'lastname' => 'vts1ln', 'email' => 'vts1@vts.com', 'registration_expires' => '2019-01-01 10:00:00', 'active' => 1],
    ['username' => 'vts2', 'firstname' => 'vts2fn', 'lastname' => 'vts2ln', 'email' => 'vts2@vts.com', 'registration_expires' => '2019-01-02 11:00:00', 'active' => 1],
    ['username' => 'vts3', 'firstname' => 'vts3fn', 'lastname' => 'vts3ln', 'email' => 'vts3@vts.com', 'registration_expires' => '2019-01-03 12:00:00', 'active' => 1]
];

foreach ($users as $key => $value) {

    $username = $value['username'];
    $firstname = $value['firstname'];
    $lastname = $value['lastname'];
    $email = $value['email'];
    $registrationExpires = $value['registration_expires'];
    $active = $value['active'];

    $query->execute();

    $lastInsertId = $pdo->lastInsertId();

    if ($lastInsertId > 0) {
        echo "OK";
    } else {
        echo "not OK";
    }
}