<?php 
	include("Administrador.php");
	$Administrador = new Administrador("","","","","","");
	$instructor = explode(" ", $_POST["Instructor"]);
	$NombreImagen = $_POST["Nombre"];	
	$TipoArchivo = $_FILES['Archivo']['type'];
	$TamañoArchivo = $_FILES['Archivo']['size'];
	$CarpetaContenedora = $_SERVER['DOCUMENT_ROOT']."/Senitas-Proyecto/Proyecto/ImagenesCursos/";
	$Dees = "../../ImagenesCursos/" . $NombreImagen . ".jpg";
	if ($TipoArchivo == "image/jpeg" || $TipoArchivo == "image/jpg" || $TipoArchivo == "image/png" || $TipoArchivo == "image/gif")
	{
		if ($TamañoArchivo>5000000)
		{
			echo "<script languague='javascript'>alert('el tamaño de la imagen es demasiado grande'); location.href='../production/aprendiz/ActualizarFoto.php'</script>";
		}
		else
		{
			$Destino = $CarpetaContenedora. basename($NombreImagen).".jpg";
			move_uploaded_file($_FILES['Archivo']['tmp_name'], $Destino);		
		}
	}
	else
	{
		echo "<script languague= 'javascript'>alert('El tipo de Archivo que se ingresó no es una imagen, intente nuevamente');</script>";
	}
	$Administrador->CrearCursos(ucfirst($_POST["Nombre"]),$_POST["Descripcion"],$_POST["Duracion"],$_POST["Cupos"],$instructor[0],$Dees);
?>