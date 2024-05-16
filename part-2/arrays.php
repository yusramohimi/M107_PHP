<?php
    require("../partials/header.php");
?>
<?php
    
    // first method
    $nombres = [12, 34, 40];


    // secons method
    $stagiaires = array('Yoursa', 'Yassine', 'Ikram');


    echo $nombres[1]   . '<br>';
    // pour modifier la valeur d'un indice
    echo $nombres[1] = "27"  . '<br>';

    // pour avoir la d'un indice specifique
    echo $stagiaires[0]  . '<br>';

    
    // les tableaux associatifs
    $nombresTest = [0 => 12 , 1 => 34 , 2 => 40];
    echo $nombresTest[0]  . '<br>';
    

    $etudiant = ["nom" => "Mohimi" , "prenom" => "Yousra" , "age" => 19];
    echo "le nom de l'etudiant est : " . $etudiant["nom"] . " , son prenom est : " . $etudiant["prenom"]  . '<br>';



    // $etudiants = [
    //     ["nom" => "Mohimi" , "prenom" => "Yousra" , "age" => 19],
    //     ["nom" => "Idrissy" , "prenom" => "Aymen" , "age" => 19],
    //     ["nom" => "Boukri" , "prenom" => "Ikram" , "age" => 19]
    // ];

    // echo "L'age de "  . $etudiants[1]["prenom"] . " est : " . $etudiants[1]["age"];


    // METHOD 2
    $etudiants = [
        "etudiant_1" => ["nom" => "Mohimi" , "prenom" => "Yousra" , "age" => 19],
        "etudiant_2" => ["nom" => "Idrissy" , "prenom" => "Aymen" , "age" => 19],
        "etudiant_3" => ["nom" => "Boukri" , "prenom" => "Ikram" , "age" => 19]
    ];

    echo "L'age de "  . $etudiants["etudiant_2"]["prenom"] . " est : " . $etudiants["etudiant_2"]["age"];

    echo '<br>';
    //  $etudiants[4] = "testttt";
    //  $etudiants[] = "testttttt";

    array_push($etudiants , ["nom" => "Mabty" , "prenom" => "raihane" , "age" => 18]);

    echo '<pre>';
     var_dump($etudiants);
    echo '</pre>';


    
    require("../partials/footer.php");
    