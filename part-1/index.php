<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SESSION 1 PHP</title>
</head>
<body>
    <header class="title">
        <div>M107 : Développer des sites web dynamiques</div>
    </header>
    <div>
        <?php echo "<h1 class='second-title'>This is PHP text</h1>" ; 
            $prenom = 'YOUSRA';
            $nom = 'MOHIMI';
            $age = 19;
            $isStudent = true;
            $note = 16.5;
        ?>
    </div>
    <main class="content">
        <h4>Lorem ipsum dolor, sit amet <?php echo 'my name is '. $prenom . ' '. $nom ; ?> <br/>
        <?php echo "I am {$nom} {$prenom}" ; ?> consectetur adipisicing elit. Et voluptate <?=  $prenom ?> enim voluptatum quas a! Fuga totam dolorum quia esse nobis iusto earum eveniet saepe voluptate optio. Nam nesciunt rerum qui.</h4>
    </main>
    <div class="footer">
        <h1>Contact</h1>
    </div>

</body>
</html>