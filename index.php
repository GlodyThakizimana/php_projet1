<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('global_css_files.php'); ?>
    <title>Accueil</title>
</head>

<body>

<?php require'Templates/header.html'?>
    <div>
        <h1 class="accueil">Accueil</h1>
    </div>

    <div class="container">
        <div class="bloc1">
            <div class="miniBloc"></div>
            <div class="miniBloc"></div>
            <div class="miniBloc"></div>
            <div class="miniBloc"></div>
        </div>
        <div class="bloc2">
            <div class="miniBloc"></div>
            <div class="miniBloc"></div>
            <div class="miniBloc"></div>
            <div class="miniBloc"></div>
        </div>
    </div>
    <?php
    require('Templates/footer.html');
    ?>
</body>

</html>