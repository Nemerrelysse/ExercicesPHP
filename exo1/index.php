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
<form method="POST" action="connect.php">
    <label for="mail">Email</label>
    <input type="text" name="mail" id="mail">
    <label for="password">Mot de passe</label>
    <input type="text" name="password" id="password">
    <button type="submit">Connexion</button>
</form>

</body>
</html>


