<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    require_once 'config.php';
    require_once 'personne.class.php';

    $personne = new Personne('', '', '', '', '');

    $utilisateur = $personne->authentifier($email, $password);

    if ($utilisateur) {
        session_start();
        $_SESSION['user'] = $email;
        header('Location: welcome.php');
        exit();
    } else {
        echo "Email or password incorrect";
    }
}



?>