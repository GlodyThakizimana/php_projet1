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
    <?php require('global_css_files.php'); ?>
    <link rel="stylesheet" href="CSS/users.css">

    <title>Utilisateurs</title>
</head>

<body>


    <?php require'Templates/header.html'?>

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
require('Templates/footer.html');
?>

</html>