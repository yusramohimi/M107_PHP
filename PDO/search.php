<?php
//SEARCH
require "database.php";

// prepare method
$statement = $pdo ->prepare('SELECT * FROM posts WHERE id = :id AND titre = :titre');


// executer la requete
$statement -> execute([
    ':id' => 2,
    ':titre' => 'my second post'
]);


// Fetch data
$results = $statement -> fetchAll(PDO::FETCH_ASSOC);


echo'<pre>';

var_dump($results);

echo'</pre>';