<?php 
$pdo= null;
try {
    $pdo = new PDO('mysql:host=localhost;dbname=test_db', 'root', 'ofppt2025');
} catch (PDOException $e) {
    var_dump( $e);
}

?>