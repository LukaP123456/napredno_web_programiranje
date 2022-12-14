<?php
require_once 'config.php';
require_once 'db_config.php';
$pdo = connectDatabase($dsn, $pdoOptions);

$sql = "UPDATE users
        SET active=:active,password=:password
        WHERE username = :username";

/*$sql = "UPDATE users
        SET active=:active,password=:password
        WHERE username LIKE concat('%', :username, '%')";
*/

$query = $pdo->prepare($sql);
$query->bindParam(':username', $username, PDO::PARAM_STR);
$query->bindParam(':password', $password, PDO::PARAM_STR);
$query->bindParam(':active', $active, PDO::PARAM_INT);

$username = "vts";
$password = "vts";
$active = 0;

$query->execute();

if ($query->rowCount() > 0) {
    $count = $query->rowCount();
    echo $count . " rows were affected.";
} else {
    echo "No affected rows.";
}