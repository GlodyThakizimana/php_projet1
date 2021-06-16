



<header>
    <nav class="row">
        <ul class="d-flex justify-content-around navbar navbar-light bg-light col-12 ">
            <li class="nav-item active"><a class=" cc-a-header btn btn-primary" href="index.php">Accueil</a></li>
            <div class='caher'>
                <li class="nav-item"><a class=" cc-a-header btn btn-primary" href="dessert.php">Nos desserts</a></li>
            </div>            
            <li class="nav-item"><a class=" cc-a-header btn btn-primary" href="users.php">Utilisateur</a></li>
            <?php if (isset($_SESSION['isConnected'])) { ?>
                <li class="nav-item"><a class=" cc-a-header btn btn-primary" href="controllers/logout.php">Déconnection</a></li>
                <?php echo 'Bonjour ' . ucfirst($_SESSION["pseudo"]) ?>
            <?php } else { ?>
                <li class="nav-item"><a class=" cc-a-header btn btn-primary" href="formulaire.php">Inscription</a></li>
                <li class="nav-item"><a class=" cc-a-header btn btn-primary" href="connection.php">Connexion</a></li>
            <?php } ?>
        </ul>
    </nav>
</header>