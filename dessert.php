<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('global_css_files.php'); ?>
    <link rel="stylesheet" href="CSS/formolaire.css">
    <title>Dessert</title>
</head>


<body>
    <?php require 'Templates/header.php' ?>
    <?php
    if (!(isset($_SESSION['isConnected']) && $_SESSION['isConnected'])) {
        echo "<p>vous devez vous connecter pour voir cette page</p>";
        exit;
    }
    ?>
    <section>

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/tiramisu.jpg" class="d-block w-70" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/eclair.jpg" class="d-block w-70" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/orange.jpg" class="d-block w-70" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>
    <section class='py-5'>
        <div class="container">
            <div class="row">
                <div class="bg-transparent text-center mb-4">
                    <div class="card-header redressed fs-4">
                        <div class="nav nav-tabs justify-content-center card-header-tabs">
                            <div class="nav-item">
                                <h3>Nos dessert</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="images/tiramisu.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a natural lead-in to additional content. This
                                    content is a little bit longer.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="images/tiramisumenu.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a natural lead-in to additional content. This
                                    content is a little bit longer.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-sm-none d-md-block">
                        <div class="card">
                            <img src="images/tiramisu.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a natural lead-in to additional content.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-sm-none d-md-block">
                        <div class="card">
                            <img src="images/tiramisumenu.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    This is a longer card with supporting text below as a natural lead-in to additional content. This
                                    content is a little bit longer.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>







    <?php
    require('Templates/footer.html');
    ?>
</body>

</html>