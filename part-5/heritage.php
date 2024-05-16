<?php

class Utilisateur {
    //attribut statique (fixe)
    public static $annee = 2024;
    protected $nom;
    protected $prenom;

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


    function presentez_vous(){
        return 'I am' . $this->nom . ' ' . $this->prenom;
    }
}

$utilisateur1 = new Utilisateur("mohimi","yousra");
$utilisateur1 ->setNom(" mabty");
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
        
    public function presentez_vous(){
        return parent::presentez_vous() . ' and I am a student';
    }
}
$etudiant1  = new Etudiant(" mohimi","yousra","DD","105");
echo "<pre>";
var_dump($etudiant1);
var_dump($utilisateur1 ->presentez_vous());
var_dump($etudiant1 -> presentez_vous());
var_dump(Utilisateur::$annee);



echo "</pre>";