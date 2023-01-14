<?php

$PORT = 5433;
$HOST = "localhost";
$USER = "postgres";
$PASS = "92406695";
$DB = "own";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    $pdo = new PDO("pgsql:host=$HOST;port=$PORT;dbname=$DB", $USER, $PASS, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
