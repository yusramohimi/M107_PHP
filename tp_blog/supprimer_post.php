<?php
// supprimer
if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['_method'] ==='delete'){

    require ('../PDO/database.php');

    $statement = $pdo->prepare('DELETE FROM articles WHERE id = :id');
    $statement->execute([':id' => $_POST['id']]);

    header('Location:affichage.php');
}