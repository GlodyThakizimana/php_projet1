<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('global_css_files.php'); ?>
    <title>Formulaire d'inscription</title>
</head>


<body>
    <?php require 'Templates/header.html' ?>

    <legend>Inscription</legend>

    <form action="Templates/recup_domainees.php" method="post" >
        <div id="container" >
            <div class="nom row">
                <label for="nam" class="col-2">Nom et prénom</label>
                <input type="text" class="col-3" id="name" name="user_name">
            </div>
            <div class="age row">
                <label for="tentacles" class="col-2">Age</label>
                <input type="number" class="col-3" id="tentacles" name="tentacles" min="18" max="100">
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="form-check col-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Homme
                    </label>
                </div>
                <div class="form-check col-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Femme
                    </label>
                </div>
            </div>
            <div class="password row ">
                <label for="pass" class="col-2">Entrée votre mot de passe (8 caractaire minimume):</label>
                <input class="col-3" type="password" id="pass" name="password" minlength="8" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
    </div>
    <?php
    require('Templates/footer.html');
    ?>
</body>

</html>