<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('global_css_files.php'); ?>
    <link rel="stylesheet" href="CSS/formolaire.css">
    <title>Dessert</title>
</head>


<body>
    <?php require 'Templates/header.php' ?>
    <form action="controllers/login.php" method="POST">
        <div id="container">
            <div class="row mb-2">
                <div class="col"></div>
                <legend class="col ">Connection !</legend>
                <div class="col"></div>
            </div>
            <div class="nom row  mb-3">
                <div class="col"></div>
                <label for="nam" class="col-1">Nom</label>
                <input type="text" class="col-3" id="name" name="user_name" placeholder="Nom">
                <div class="col"></div>
            </div>
            <div class="password row  mb-2">
                <div class="col"></div>
                <label for="pass" class="col-2">Entrée votre mot de passe </label>
                <input class="col-3" type="password" id="pass" name="password"  placeholder="mot de passe" required>
                <div class="col"></div>
            </div>
            
            <div class="row  mb-3">
            <div class="col"></div>
            <button type="submit" class="col-2 btn btn-primary">Se connecter</button>
            <div class="col"></div>
        </div>
        </div>
    </form>
    </div>
    <?php
    require('Templates/footer.html');
    ?>
</body>

</html>