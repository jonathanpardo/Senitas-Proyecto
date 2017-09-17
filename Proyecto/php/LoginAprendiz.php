<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include('Usuario.php');
	if (isset($_POST['Recordar']))
	{			
		$recordar = true;
	}
	else
	{		
		$recordar = false;
	}
	$Ingreso = new Usuario($_POST['Usuario'],$_POST['Contrasena']);
	$Ingreso->Ingresar($recordar,"aprendiz");	
	?>
</body>
</html>