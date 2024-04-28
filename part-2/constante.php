<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SESSION 2 PHP</title>
</head>
<body>
    <h1 class="first-title">Les constantes</h1>
    <?php
        //first method
        define("DB_NAME" , "gestion_stock");


        //second method
        const PI = 3.14 ;
        echo DB_NAME; //result : gestion_stock
        echo PI; //result : 3.14
    ?>
</body>
</html>