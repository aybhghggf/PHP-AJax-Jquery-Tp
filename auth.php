<?php
if( isset($_POST['email'])&& isset($_POST['password']) ){
    $email = $_POST['email'];
    $password = $_POST['password'];
    require_once 'config.php';
    require_once 'personne.class.php';
    $personne= new personne('','','','','');
    $utilisateur = $personne->authentifier( $email, $password );
    if( $utilisateur ){
        save_session();
        header('location:welcome.php');
    }
}


?>