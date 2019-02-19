
<?php
$destino = "casa.beidisia@gmail.com";
$desde = 'From: ' .$_POST[Correo];
$comentario = "
\n
Name: $_POST[Nombre] \n
Email: $_POST[Correo] \n
Message: $_POST[mensaje] \n
\n
";
mail($destino, $desde, $comentario);
?>
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
					<a href="Gallery-Beidisia-House.php">GALLERY</a></li>
					<a href="location.html">LOCATION</a></li>
					<a href="contact.html"  class="active">CONTACT</a></li>
				</div> 
			</nav>
		</header>



	<div id="content">
		
		<center><h1>MESSAGE SENT</h1></center>
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