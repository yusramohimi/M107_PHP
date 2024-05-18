<?php
require('../PDO/database.php');
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['save'])) {
    $statement = $pdo->prepare('UPDATE articles SET title = :title, content = :content WHERE id = :id');
    $statement->execute([
        ':title' => $_POST['title'],
        ':content' => $_POST['content'],
        ':id' => $_POST['id']
        
    ]);
    
    header('Location:affichage.php');


}