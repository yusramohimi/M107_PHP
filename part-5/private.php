<?php

class Utilisateur {
    private $nom;
    private $prenom;

    public function __construct($nom, $prenom){
        $this ->nom = $nom;
        $this ->prenom = $prenom;
    }
    // Encapsulation
    // getters
    public function getNom(){
        return $this ->nom;
    }
    public function getPrenom(){
        return $this -> prenom;
    }

    // setters
    public function setNom($nom){
        return $this ->nom = $nom;
    }
    public function setPrenom($prenom){
        return $this -> prenom = $prenom;
    }

}

$utilisateur1 = new Utilisateur("mohimi","yousra");
$utilisateur1 ->setNom("mabty");
// $utilisateur1 ->prenom ="YOURSA";

$utilisateur2 = new Utilisateur("el idrysy","aymen");
// $utilisateur2 ->nom ="EL IDRYSY";
// $utilisateur2 ->prenom ="AYMEN"; 

echo "<pre>";
var_dump($utilisateur1);
echo "<pre>";
var_dump($utilisateur2);


class Etudiant extends Utilisateur{
    public $branche ;
    public $groupe;
    
    public function __construct($nom, $prenom,$branche , $groupe){
        parent::__construct($nom, $prenom);
        $this -> branche = $branche;
        $this -> groupe = $groupe;
    }
        
    

    
}