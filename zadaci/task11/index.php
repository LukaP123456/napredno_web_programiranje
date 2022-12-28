<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require_once 'config.php';
require_once 'db_config.php';
$pdo = connectDatabase($dsn, $pdoOptions);

$letter = $_GET['letter'] ?? '';
var_dump($letter);
$users = getUsers($pdo,$letter);
foreach ($users as $user) {
    echo $user['name'] . ' ' . $user['email'] . '<br>';
    echo '<img width="100" src="'.$user['image'].'"><br>';
}
function getUsers( $pdo,string $letter): array
{
    $stmt = $pdo->prepare("SELECT * FROM users WHERE name LIKE :letter");
    $stmt->bindValue(':letter', $letter . '%');
    $stmt->execute();
    return $stmt->fetchAll();
}
?>
</body>
</html>


