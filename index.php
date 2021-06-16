<?php session_start(); ?>
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

    <?php require 'Templates/header.php' ?>
    <section class="banner d-flex justify-content-center align-items-center pt-5">
        <div class="container my-5 py-5">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 banner-desc lh-lg">
                    <h1 class="text-capitalize py-3 redressed">
                        Le cercle <br />
                        Le plasir est dans l'assiette
                    </h1>
                    <p>
                        <button class="btn btn-order btn-lg me-5 rounded-0 merriweather">Commander maintenant</button>
                        <button class="btn btn-outline-info btn-lg rounded-0 merriweather">Reserver</button>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="available merriweather py-5">
			<div class="container">
				<div class="row">
					<div class="card mb-3 border-0 rounded-0">
						<div class="row">
							<div class="col-md-6">
								<img src="images/menu1.png" class="img-fluid" alt="..." />
							</div>
							<div class="col-md-6">
								<div class="card-body px-0">
									<h3 class="card-title">Card title</h3>
									<p class="card-text">
										Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus nihil error, expedita quasi
										deserunt, maxime ducimus, nostrum quos nisi tenetur temporibus harum debitis odio magni aliquid
										voluptas cum doloremque ab?
									</p>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="card my-5 border-0 rounded-0">
						<div class="row">
							<div class="col-md-6">
								<div class="card-body px-0">
									<h3 class="card-title">Card title</h3>
									<p class="card-text">
										Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel aliquid maiores asperiores sint
										doloribus eligendi odio nostrum quod, aperiam placeat eaque dolor libero provident beatae neque
										obcaecati quidem tempore debitis.
									</p>
									
								</div>
							</div>
							<div class="col-md-6">
								<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img src="images/salade.png" class="d-block w-100" alt="..." />
										</div>
										<div class="carousel-item">
											<img src="images/salade1.png" class="d-block w-100" alt="..." />
										</div>
										<div class="carousel-item">
											<img src="images/salade.png" class="d-block w-100" alt="..." />
										</div>
									</div>
									<button
										class="carousel-control-prev"
										type="button"
										data-bs-target="#carouselExampleControls"
										data-bs-slide="prev"
									>
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Previous</span>
									</button>
									<button
										class="carousel-control-next"
										type="button"
										data-bs-target="#carouselExampleControls"
										data-bs-slide="next"
									>
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Next</span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="card mb-3 border-0 rounded-0">
						<div class="row">
							<div class="col-md-6">
								<img src="images/menu1.png" class="img-fluid" alt="..." />
							</div>
							<div class="col-md-6">
								<div class="card-body px-0">
									<h3 class="card-title">Card title</h3>
									<p class="card-text">
										Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel aliquid maiores asperiores sint
										doloribus eligendi odio nostrum quod, aperiam placeat eaque dolor libero provident beatae neque
										obcaecati quidem tempore debitis.
									</p>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="cc-menu merriweather py-5">
			<div class="container">
				<div class="row">
					
					<div class="card bg-transparent text-center mb-4">
						<div class=" redressed fs-4">
							<ul class="nav nav-tabs justify-content-center card-header-tabs">
								<li class="nav-item">
									<p class="nav-link active" >Tous Les Menus</p>
								</li>
								
								
			
							</ul>
						</div>
						
					</div>
				</div>
				<div class="row row-cols-1 row-cols-md-2 g-4">
					<div class="col">
						<div class="card">
							<img src="images/pizza_menu.jpg" class="card-img-top" alt="..." />
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
							<img src="images/pizza_menu.jpg" class="card-img-top" alt="..." />
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
							<img src="images/pizza.jpg" class="card-img-top" alt="..." />
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
							<img src="images/pizza.jpg" class="card-img-top" alt="..." />
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
		
    
    
        </div>
    </section>









































































































    <?php
    require('Templates/footer.html');
    ?>
</body>

</html>