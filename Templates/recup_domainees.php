<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Affichage des données issus du formulire</h1>
    <ul>
        <li><?php echo $_POST['user_name']; ?></li>
        <li><?php echo $_POST['tentacles']; ?></li>
        <li><?php echo $_POST['sexe']; ?></li>
        <li><?php echo $_POST['password']; ?></li>
    </ul>
</body>
</html>