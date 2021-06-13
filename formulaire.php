<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('global_css_files.php'); ?>
    <link rel="stylesheet" href="CSS/formolaire.css">
    <title>Formulaire d'inscription</title>
</head>


<body>
    <?php require 'Templates/header.html' ?>
    <form action="Templates/recup_domainees.php" method="post">
        <div id="container">
            <div class="row mb-2">
                <div class="col"></div>
                <legend class="col ">Inscription</legend>
                <div class="col"></div>
            </div>
            <div class="nom row  mb-2">
                <div class="col"></div>
                <label for="nam" class="col-2">Votre prénom</label>
                <input type="text" class="col-3" id="name" name="user_name">
                <div class="col"></div>
            </div>
            <div class="nom row  mb-2">
                <div class="col"></div>
                <label for="nam" class="col-2">Votre prénom</label>
                <input type="text" class="col-3" id="name" name="user_last">
                <div class="col"></div>
            </div>
            <div class="age row  mb-2">
                <div class="col"></div>
                <label for="tentacles" class="col-2">Age</label>
                <input type="number" class="col-3" id="tentacles" name="age" min="18" max="100">
                <div class="col"></div>
            </div>
            <div class="row  mb-2">
                <div class="col"></div>
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
                <div class="col"></div>
            </div>
            <div class="password row  mb-2">
                <div class="col"></div>
                <label for="pass" class="col-2">Entrée votre mot de passe (8 caractaire minimume):</label>
                <input class="col-3" type="password" id="pass" name="password" minlength="8" required>
                <div class="col"></div>
            </div>
        </div>
        <div class="row  mb-2">
            <div class="col"></div>
            <button type="submit" class="col-3 btn btn-primary">Valider</button>
            <div class="col"></div>
        </div>
    </form>

    </div>
    <?php
    require('Templates/footer.html');
    ?>
</body>

</html>