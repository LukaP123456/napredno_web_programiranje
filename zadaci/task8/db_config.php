<?php

function connectDatabase(string $dsn, array $pdoOptions): PDO
{
    try {
        $pdo = new PDO($dsn, PARAMS['USER'], PARAMS['PASS'], $pdoOptions);
    } catch (\PDOException $e) {
        //exit("Error: " . $e->getMessage());
        var_dump($e->getCode());
        throw new \PDOException($e->getMessage());
    }
    return $pdo;
}