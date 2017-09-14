<?php
	session_start();
	function IniciarSesion($Usuario)
	{
		$_SESSION['Usuario']=$Usuario;
	}
	function CerrarSesion()
	{
		session_destroy();
		header("location:../login-Aprendiz.php");
	}
?>