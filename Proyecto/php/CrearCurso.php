<?php 
	include("Administrador.php");
	$Administrador = new Administrador("","","","","","");
	$Administrador->CrearCursos($_POST["Nombre"]);
?>