<?php
// create
require "database.php";
// prepare method
$statement = $pdo ->prepare('INSERT INTO posts(id, titre, contenu) VALUES (:id, :titre, :contenu)');


// executer la requete
$statement -> execute([
    ':id' => 3,
    ':titre' => 'my third post',
    ':contenu' => 'jevç zufzfo bzido'
]);
