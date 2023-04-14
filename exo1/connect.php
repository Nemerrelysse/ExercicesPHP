

    <?php

    $checkMail="abc@gmail.com";
    $checkPassword="123";
    if(isset(($_POST['submit'])))
    if($_POST["mail"]===$checkMail && $_POST["password"]===$checkPassword){
        header('Location: page1.php');
        exit;
    }
    else{
        echo "Erreur d'identifiants";
    }
    ?>

