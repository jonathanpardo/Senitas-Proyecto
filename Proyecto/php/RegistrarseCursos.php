<?php
	include("Aprendiz.php");
	session_start();
	$Aprendiz = new Aprendiz("","","","","","");
	$idCursos = $_POST["idCursos"];
	$Aprendiz->RegistrarseCursos($idCursos,$_SESSION["Usuario"]);
?>