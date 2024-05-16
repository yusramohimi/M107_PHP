<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>
<?php
    $logged = false;
    $sign = false;
    if($logged == true){
        echo "You are logged" . " Welcome !!!!!";
    }else{
        echo "Please sign in";
    }

    echo "<br>";
    // switch case method
    $today = date("N");
    switch ($today){
        case 1:
            echo "Lundi";
            break;
        case 2:
            echo "Mardi";
            break;
        case 3:
            echo "Mercredi";
            break;
        case 4:
            echo "Jeudi";
            break;
        case 5:
            echo "Vendredi";
            break;
        case 6:
            echo "Samedi";
            break;
        case 7:
            echo "Dimanche";
            break;
        default;
    }



    //les boucles
    echo"<br>";
    $etudiants = ["MOHIMI" , "EL IDRYSY" , "MABTY" , "HANAFI"];
    for ($i=0; $i<count($etudiants); $i++){
        echo $etudiants[$i] . "<br>";
    }
    echo"<br>";
    //sans indice
    foreach($etudiants as $etudiant){
        echo $etudiant . "<br>";
    }
    echo"<br>"; 

    //avec indice
    foreach($etudiants as $index => $etudiant){
        echo $etudiant . " | " . $index . "<br>";
    }



    $posts = [

        ['id'=> 1, 'titre'=> "My first post", 'contenu'=>"bla bla bla bla", 'tags' => []],
        ['id'=> 2, 'titre'=> "My second post", 'contenu'=>"tatatatatttata", 'tags' => []],
        ['id'=> 3, 'titre'=> "My third post", 'contenu'=>"dadadadaddadada", 'tags' => []],

    ];

        echo "<br>";
        var_dump($posts);

       
        if(isset($_GET['id'])){
            $posts = array_filter($posts , function($item){
                return $item['id'] == $_GET['id'];
            });
        };

?>
<body>
    <main class="container">
        <?php if($logged == true): ?>
        <div class="welcome-part">
            <h1>welcome Dear !!!!!</h1>
            <?php echo $posts[2]['title']?>
        </div>
        <?php elseif($sign == false): ?>
        <div class="login-in-part">
            <h1>Sign up</h1>
        </div>
        <?php endif ?>
    </main>
    <div class="row card-container">
        <?php foreach ($posts as $post): ?>
            <div class="col-md-4">
                <div class="card border-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header text-warning"><?php echo($post['id']) . ") "; echo($post['titre']) ?></div>
                    <div class="card-body text-success">
                        <h5 class="card-title"><?php echo ($post['titre']) ?></h5>
                        <p class="card-text"><?php echo ($post['contenu']) ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        
    </div>
    <?php


 ?>


</body>
</html>