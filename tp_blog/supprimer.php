<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id'])) {
       
        require ('../PDO/database.php');

        $statement = $pdo->prepare('DELETE FROM articles WHERE id = :id');
        $statement->execute(['id' => $_GET['id']]);
    } 
} 
?>