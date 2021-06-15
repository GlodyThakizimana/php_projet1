<?php
session_start(); // pour demarer une sesseion il faut le mettre dans  chaques pages de notre application 
$users = [
    [
        'name' => 'Asma',
        'password' => '1234'
    ],
    [
        'name' => 'Glody',
        'password' => ' azerty'
    ],
    [
        'name' => 'Ian',
        'password' => '12345'
    ],
];
$pseudo_formulaire = $_POST;
$password_formulaire = $_POST;
foreach ($users as $user) {
    if ($pseudo_formulaire === $user['name'] && $password_formulaire == $user['password']) {
        $_SESSION['pseudo'] = $pseudo_formulaire;
        header('Location: /');
        exit;
    } else {
        header('Location: /connection.php');
        exit;
        echo "erreur sur le mot de passe ou le nom d'utilisateur";
    }
}


/*pour un utilisateur avec un pseudo et un mdp innique
    $pseudo_formulaire = $_POST['user_name'];
    $password_formulaire = $_POST['password'];



if ($pseudo_formulaire === 'glody' && $password_formulaire == 'azerty') {
    $_SESSION['pseudo'] = $pseudo_formulaire;
    header('Location: /');
    exit;
} elseif ($pseudo_formulaire === 'glody') {
    header('Location: /connection.php');
    exit;
    echo "Erreur sur le pseudo";
    
} elseif ($password_formulaire === 'azerty') {
    header('Location: /connection.php');
    exit;
    echo "Erreur sur le mot de passe";
    
} else {
    header('Location: /connection.php');
    exit;
    echo "erreur sur le mot de passe et le nom d'utilisateur";
    
}
*/


// $_SESSION['pseudo'] = $_POST['user_name']; // logique : l'utilisateur est connecté !
// header('Location: /');

// exit();