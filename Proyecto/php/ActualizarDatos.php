<?php 
	include("Usuario.php");
	include("DatosUsuario.php");
	session_start();
	session_start();
	$ActualizarDatos = new Usuario($_POST['Nombres'],$_POST['Apellidos'],$_POST['Email'],$_SESSION['Usuario'],obtenerDatos($_SESSION['Usuario'],"Foto"));
	$ActualizarDatos->ActualizarDatos();
?>