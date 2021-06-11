<?php

$users = [
    [
        'name' => 'Elodie',
        'color' => 'green',
        'age' => 25
    ],
    [
        'name' => 'Martine',
        'color' => 'yellow',
        'age' => 55
    ],
    [
        'name' => 'Brice',
        'color' => 'red',
        'age' => 35
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="users.css" />
    <title>Utilisateurs</title>
</head>

<body>


    <header>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="/users.php">Utilisateur</a></li>
            </ul>
        </nav>
    </header>
    <h1>La liste des utilisateurs</h1>
    <table class="tableau">
        <tr class="entete">
            <th>Name</th>
            <th>Color</th>
            <th> Age</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td class="name"><?= $user['name'] ?></td>
                <td><?= $user['color'] ?></td>
                <td><?= $user['age'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>


</body>
<?php
include('footer.php');
?>

</html>