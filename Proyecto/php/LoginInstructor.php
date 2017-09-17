<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include('Instructor.php');
	$Ingreso = new Usuario($_POST['Usuario'],$_POST['Contrasena']);
	$Ingreso->Ingresar(false,"Instructor");	
	?>
</body>
</html>