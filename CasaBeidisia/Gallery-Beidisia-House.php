<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet">
	<link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/menu.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/slideshow.css" />
	<link rel="icon" type="image/png" href="imagenes/icono.png" />
	
	<title>Casa Beidisia</title>

</head>
<body>

<main>

	<header>
		<div class="logo"></div>
		<nav>
			<div class="navigation menu" id="hamburger-menu">
				<a href="javascript:void(0);" class="icon" onclick="hamburguerToggle()">&#9776;</a>
				<a href="index.html">HOME</a></li>
				<a href="features.html">FEATURES</a></li>
				<a href="Gallery-Beidisia-House.php"  class="active">GALLERY</a></li>
				<a href="location.html">LOCATION</a></li>
				<a href="contact.html">CONTACT</a></li>
			</div> 
		</nav>
	</header>

	<div id="content" class="gallery-content">

		<h2>GALLERY</h2>
		<div id="sliderid">
			<div class="slideshow-container">

				<!--div class="mySlides fade">
					<img src='./imagenes/beidisia-view.jpg' />
					<div class='numbertext'>1/38</div>
				</div>
				
				<div class="mySlides fade">
					<img src='./imagenes/pool-beidisia.jpg' />
					<div class='numbertext'>2/38</div>
				</div>
				
				<div class="mySlides fade">
					<img src='./imagenes/water-fountain.jpg'/>
					<div class='numbertext'>3/38</div>
				</div-->

				<?php
					
					require_once("conexion.php");
					$consulta=mysqli_query($conexion, "SELECT * FROM galeria");
					
					while ($fila=mysqli_fetch_array($consulta)) {
						printf("
								<div class=\"mySlides fade\">
									<img src='imagenes/%s.jpg' />
									<div class='numbertext'>%s/38</div>
								</div>", $fila["imagen"], $fila["numero"]
						);
					}

				?>

				
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
		</div>
		
		<script>
			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
				showSlides(slideIndex += n);
			}

			function currentSlide(n) {
				showSlides(slideIndex = n);
			}

			function showSlides(n) {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				if (n > slides.length) {slideIndex = 1}
				if (n < 1) {slideIndex = slides.length}
				for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
				}

				slides[slideIndex-1].style.display = "block";

			}
		</script>

	</div>

</main>

<footer>
	<div id="pie">	
		<p>Punta de Mita, Nayarit, Mexico &copy; 2017</p>
	</div>
</footer>

<script src="./js/scripts.js" type="text/javascript"></script> 

</body>
</html>