<?php
// Configuration file
try {
    $pdo = new PDO('mysql:host=localhost;dbname=test_db', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}