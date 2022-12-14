<?php

require_once 'config.php';
require_once 'db_config.php';

$pdo = connectDatabase($dsn, $pdoOptions);


try {
    $sql = "SELECT * FROM users WHERE username=:username";
    $query = $pdo->prepare($sql);
    $query->bindParam(':username', $username, PDO::PARAM_STR);
    $username = "vts2";
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    if ($query->rowCount() > 0) {
        foreach ($results as $result) {
            echo $result['id_user'] . " " . $result['username'] . "<br> ";
        }
    }
} catch (PDOException $e) {
    error_log("PDO Error while getting data: " . $e->getMessage());
}


