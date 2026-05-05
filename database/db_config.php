<?php
// database/db_config.php

$host = 'localhost';
$db = 'vnpeznjc_bharat';
$user = 'vnpeznjc_bharat';
$pass = 'Rahul@0049';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // In a production environment, you might not want to output the exact error to the user
    die("Database connection failed: " . $e->getMessage());
}
?>