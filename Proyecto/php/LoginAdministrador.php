<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include('Administrador.php');
	$Ingreso = new Usuario($_POST['Usuario'],$_POST['Contrasena']);
	$Ingreso->Ingresar(false,"Administrador");	
	?>
</body>
</html>