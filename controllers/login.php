<?php
session_start(); // pour demarer une sesseion il faut le mettre dans  chaques pages de notre application 
$users = [ // je declaire un tableau de tableau de mes utiliseur qui ont droit de se connecter sur mon site 
    [
        'name' => 'asma',    // utilisateur 1 avec son nom et son mot de passe 
        'password' => '1234'
    ],
    [
        'name' => 'glody',        // utilisateur 2 avec son nom et son mot de passe 
        'password' => 'azerty'
    ],
    [
        'name' => 'ian',
        'password' => '12345'       // utilisateur 3 avec son nom et son mot de passe 
    ],
];
$pseudo_formulaire = $_POST['user_name']; // je recupere le nom d'utilisateur entrée dans le formulaire grace a $_POST
$password_formulaire = $_POST['password']; // je recupere le mont de passe entre dan sle formuliare grace a $_POST
foreach ($users as $user) {    // je fait ici un boucle pour parcourir le tableau de mes utilisateus
    if ($pseudo_formulaire === $user['name'] && $password_formulaire == $user['password']) { // si il touve un utilisateur avec un nom et un mot de passe respondent a mon tableau d'utiisateur il le connecte
        $_SESSION['pseudo'] = $pseudo_formulaire;
        $_SESSION['isConnected'] = true;
        header('Location: /');
        exit;
    } 
}

header('Location: /connection.php'); // si il le trouve pas l'utilisateur est revoiyer vert la page de connection
exit;




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