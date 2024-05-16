<?php
// DELETE
require "database.php";

// prepare method
$statement = $pdo ->prepare('DELETE FROM posts WHERE id=:id');


// executer la requete
$statement -> execute([
    ':id' => 1,

]);
