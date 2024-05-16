<?php 
$liste =['mohimi'];
    echo $liste[0] ?? ' '; //?? si $liste[1] n existe pas , il affiche un vide au lieu d un error
    var_dump(($_SERVER));