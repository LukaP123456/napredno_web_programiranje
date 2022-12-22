<?php

require_once 'config.php';
require_once 'db_config.php';

$pdo = connectDatabase($dsn, $pdoOptions);

$sql = "SELECT * FROM users WHERE username=:username AND email=:email";
//$sql = "SELECT * FROM user WHERE username=? AND email=?";

$query = $pdo->prepare($sql);
$query->bindParam(':username', $username, PDO::PARAM_STR);
$query->bindParam(':email', $email, PDO::PARAM_STR);

//$query->bindParam(1, $username, PDO::PARAM_STR);
//$query->bindParam(2, $email, PDO::PARAM_STR);


/*
• PDO::PARAM_STR is used for strings.
• PDO::PARAM_INT is used for integers.
• PDO::PARAM_BOOL allows only boolean (true/false) values.
• PDO::PARAM_NULL allows only NULL datatype.
*/

$username = "vts";
$email = "vts@gmail.com";

$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ); // PDO::FETCH_ASSOC

var_dump($results);

if ($query->rowCount() > 0) {
    foreach ($results as $result) {
        echo $result->username . ", ";
        echo $result->email . ", ";

        /*echo $result['username'];
        echo $result['email'];*/
    }
}
