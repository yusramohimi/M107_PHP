<?php

class Utilisateur {
    public $nom;
    public $prenom;

    public function __construct($nom, $prenom){
        $this ->nom = $nom;
        $this ->prenom = $prenom;
    }
}

$utilisateur1 = new Utilisateur("mohimi","yousra");
// $utilisateur1 ->nom ="MOHIMI";
// $utilisateur1 ->prenom ="YOURSA";

$utilisateur2 = new Utilisateur("el idrysy","aymen");
// $utilisateur2 ->nom ="EL IDRYSY";
// $utilisateur2 ->prenom ="AYMEN"; 

echo "<pre>";
var_dump($utilisateur1);
echo "<pre>";
var_dump($utilisateur2);