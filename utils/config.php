<?php
$host = 'localhost';
$db   = 'restaurant';
$user = 'root';
$pass = '';
$port = '';
$charset = 'utf8';

$connexion = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($connexion, $user, $pass, $options);
     // echo  "Connexion successful";
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>