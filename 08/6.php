<?php
require_once 'config.php';
require_once 'db_config.php';
$pdo = connectDatabase($dsn, $pdoOptions);

$sql = "DELETE FROM users WHERE username =:username";

$query = $pdo->prepare($sql);
$query->bindParam(':username', $username, PDO::PARAM_STR);

$username = "vts3";

$query->execute();

if ($query->rowCount() > 0) {
    $count = $query->rowCount();
    echo $count . " rows were affected.";
} else {
    echo "No affected rows.";
}