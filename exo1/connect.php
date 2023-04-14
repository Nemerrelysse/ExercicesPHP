<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <nav>
        <?php
            require 'menu.php';
        ?>
    </nav>

    <?php

    $checkMail="abc@gmail.com";
    $checkPassword="123";

    if($_POST["mail"]===$checkMail && $_POST["password"]===$checkPassword){
        echo "<p>Connecté !</p>";
    }
    else{
        echo "<p>Erreur d'identifiants</p>";
    }
    ?>

</body>
</html>