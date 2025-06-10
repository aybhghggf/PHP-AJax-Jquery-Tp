<?php 
    require_once 'config.php'; // Configuration file
class Personne{
    private $email ;
    private $nom ;
    private $prenom ;
    private $titre;
    private $password;

    public function __construct($email, $nom, $prenom, $titre, $password){
        $this->email = $email ;
        $this->nom = $nom ;
        $this->prenom = $prenom ;
        $this->titre = $titre ;
        $this->password = $password ;
    }
    public function getNom(){
        return $this->nom ;
    }
    public function getPrenom(){
        return $this->prenom ;
    }
    public function getTitre(){
        return $this->titre;
    }
    public function getEmail(){
        return $this->email;

    }
    public function getPassword(){
        return $this->password ;
    }
    public function setNom($nom){
        $this->nom = $nom ;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom ;
    }
    public function setTitre($titre){
        $this->titre = $titre ;
    }
    public function setEmail($email){
        $this->email = $email ;
    }
    public function setPassword($password){
        $this->password = $password ;
    }
    public function __toString(){
        return $this->prenom . ' ' . $this->nom . ' | ' . $this->email;
    }
    public function BienVenu($nom,$prenom){
        echo "Bienvenue $nom $prenom";
    }
    public function authentifier($email, $password) {
    global $pdo;
    var_dump( $pdo);
    $req = $pdo->prepare("SELECT * FROM personne WHERE email = ? AND password = ?");
    $req->execute([$email, $password]);
    $personneAuth = $req->fetch();

    if ($personneAuth) {
        $utilisateur = new Personne(
            $personneAuth['email'],
            $personneAuth['nom'],
            $personneAuth['prenom'],
            $personneAuth['titre'],
            $personneAuth['password']
        );
        $_SESSION['utilisateur'] = $utilisateur;
        return $utilisateur;
        header('location:welcome.php');
    } else {
        echo "Identifiant ou mot de passe incorrect.";
        return null;
    }
}
    public function get_session(){
        session_start();
        return $_SESSION['utilisateur'];
    }
    public function  findAll(){
        global $pdo;
        $req = $pdo->query("SELECT * FROM personne");
        $users= $req-> fetchAll();
        return $users;
    }
}

?>