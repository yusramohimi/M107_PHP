<?php
    require ('../PDO/database.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $identifiant = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        $statement = $pdo ->prepare('INSERT INTO articles(id, title, content) VALUES (:id, :title, :content)');


        $statement -> execute([
            ':id' => $identifiant,
            ':title' => $title,
            ':content' => $content,
        ]);
    }


    header("Location: affichage.php");
    exit();


// $statement = $pdo ->prepare('SELECT * FROM articles');


// // executer la requete
// $statement -> execute();


// // Fetch data
// $results = $statement -> fetchAll(PDO::FETCH_ASSOC);


// echo'<pre>';

// var_dump($results);

// echo'</pre>';

?>