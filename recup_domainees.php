

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("global_css_files.php") ?>
    <title>Document</title>
</head>

<body>
    <?php include("Templates/header.php") ?>
    <h1>Affichage des données issus du formulaire</h1>
    <ul>
        <li>Bonjous, <?= $_POST['user_name']; ?> </li>
        <li> <?= $_POST['age']; ?> </li>
        <li><?= $_POST['femme']; ?> </li>
        <li><?= $_POST['password']; ?> </li>
    </ul>
    <?php include("Templates/footer.html") ?>
</body>

</html>