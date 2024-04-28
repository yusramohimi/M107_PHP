<?php
    //Local and Global scope
    
    $nom = 'yousra';
    function sayHello(){
        global $nom;
        echo "Hello " . $nom;
    }


    // function somme($nombre_1 , $nombre_2){
    //     return $nombre_1 + $nombre_2 ;
    // }

    // $sommeDeuxNombre = somme(2,4);
    // echo $sommeDeuxNombre . '<br>';


    sayHello();