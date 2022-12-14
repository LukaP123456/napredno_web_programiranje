<?php

require_once 'config.php';
require_once 'db_config.php';

$pdo = connectDatabase($dsn, $pdoOptions);

$sql = "SELECT email FROM users WHERE username=:username";
$sql2 = "SELECT id_user, email FROM users WHERE username=:username";
$sql3 = "SELECT * FROM users";

$username = "vts2";


$query = $pdo->prepare($sql);
$query->bindParam(':username', $username, PDO::PARAM_STR);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_COLUMN);

$query = $pdo->prepare($sql2);
$query->bindParam(':username', $username, PDO::PARAM_STR);
$query->execute();
$results2 = $query->fetchAll(PDO::FETCH_KEY_PAIR);

$data = $pdo->query($sql3)->fetchAll(PDO::FETCH_UNIQUE);

var_dump($results,$results2, $data);

