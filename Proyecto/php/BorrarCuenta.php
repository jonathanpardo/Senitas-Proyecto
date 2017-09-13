<?php 
	include("Usuario.php");
	session_start();
	$UsuarioBorrar = new Usuario($_SESSION['Usuario'],$_POST['Contrasena']);
	$UsuarioBorrar->borrarCuenta();
 ?>