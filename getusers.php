<?php
require_once 'config.php';

$req = $pdo->query( "SELECT * FROM personne" );
$donnees = $req->fetchAll();
echo json_encode($donnees);

?>