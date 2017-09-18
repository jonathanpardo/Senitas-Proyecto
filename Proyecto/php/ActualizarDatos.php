<?php 
	include("Usuario.php");
	include_once("DatosUsuario.php");
	session_start();
	$ActualizarDatos = new Usuario($_POST['Nombres'],$_POST['Apellidos'],$_SESSION['Usuario'],$_POST['Email'],"","Foto");
	$ActualizarDatos->ActualizarDatos();
?>