<!DOCTYPE html>
<html lang="en">

<head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="icon" href="https://img.icons8.com/color/512/user.png" type="image/gif">
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); ?>
	<div class="homebase">
		<center>
			<h1 class="uts">Halo, Muhammad Indra Septiawan Here!<br> Merendah Untuk Meroket #STAYLOW
			</h1>
		</center>
	</div>
	<!--
	<div id="carouselExampleDark" class="carousel carousel-dark slide">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active" data-bs-interval="10000">
				<img src="https://img.freepik.com/premium-photo/ramadan-background-paper-art-style_578467-264.jpg?w=700" class="d-block w-100" alt="marhaban">
			</div>
			<div class="carousel-item" data-bs-interval="2000">
				<img src="https://img.freepik.com/premium-photo/ramadan-kareem-islamic-background_80983-1886.jpg?w=996" class="d-block w-100" alt="ya">
			</div>
			<div class="carousel-item">
				<img src="https://img.freepik.com/premium-photo/dome-mosque-dark-blue-twilight-skyislamic-style-banner-product-display-beautiful-muslim-invitation-eid-mubarak-religion-background-generative-ai_76964-7966.jpg?w=1060" class="d-block w-100" alt="ramadhan">
				<div class="carousel-caption d-none d-md-block">
					<h5>Third slide label</h5>
					<p>Some representative placeholder content for the third slide.</p>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div> -->
	<style>
		.homebase {
			display: flex;
			flex-direction: column;
			justify-content: center;
			min-height: 83vh;
			align-items: center;
			background-position: center;
			background: url(https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2) no-repeat;
			background-size: cover;
			background-color: aqua;
		}

		h1 {
			margin: auto;
			padding-top: 10px;
		}

		.uts {
			padding-top: 10px;
			width: 600px;
			height: 400px;
			background: transparent;
			border: 2px solid rgb(245, 223, 227);
			border-radius: 20px;
			backdrop-filter: blur(10px);
			box-shadow: rgba(0, 0, 0, .5);
			display: flex;
			justify-content: center;
			align-items: center;
			color: greenyellow;
		}

		.tales {
			width: 100%;
		}

		.carousel-inner {
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 350px;
			max-height: 100% !important;
		}
	</style>
	<?php $this->load->view('_partials/footer.php'); ?>

</body>

</html>