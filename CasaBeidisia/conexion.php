<?php
	$servidor="localhost";
	$usuario="lngynhhm";
	$password="B34d5s67734%";
	$base="lngynhhm_casas";

	$conexion=mysqli_connect("$servidor","$usuario","$password")or die(mysqli_error());
	mysqli_query($conexion, "SET NAMES 'utf8'");
	$base=mysqli_select_db($conexion,$base) or die (mysqli_error());
?>
