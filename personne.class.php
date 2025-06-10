<?php 
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
}

?>