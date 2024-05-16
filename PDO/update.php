<?php
//UPDATE
require "database.php";

// prepare method
$statement = $pdo ->prepare('UPDATE posts SET titre=:titre , contenu=:contenu WHERE id=:id' );


// executer la requete
$statement -> execute([
    ':id' => 2,
    ':titre' => 'my second post updated',
    ':contenu' => "contenu modifié"
]);
