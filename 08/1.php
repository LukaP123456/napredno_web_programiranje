<?php


/*
PDO (PHP Data Objects) is a PHP extension through which we can access and work with databases.
Though PDO is similar in many aspects to mySQLi, it is better to work with for the following
reasons:
• It is better protected against hackers.
• It is consistent across databases, so it can work with MySQL as well as other types of databases
(SQLite, Oracle, PostgreSQL, etc.)
• It is object oriented at its core.


https://phpdelusions.net/pdo


*/

require_once 'config.php';
require_once 'db_config.php';

$pdo = connectDatabase($dsn, $pdoOptions);

$stmt = $pdo->query('SELECT username FROM users');
while ($row = $stmt->fetch()) {
    echo $row['username'] . "<br>\n";
}