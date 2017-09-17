<?php 
	include_once("Sesion.php");
	$NombreImagen = $_SESSION['Usuario'];
	$TipoArchivo = $_FILES['Archivo']['type'];
	$TamañoArchivo = $_FILES['Archivo']['size'];
	$CarpetaContenedora = $_SERVER['DOCUMENT_ROOT']."/Senitas-Proyecto/Proyecto/FotosPerfil/";
	$Dees = "../../FotosPerfil/" . $NombreImagen . ".jpg";
	if ($TipoArchivo == "image/jpeg" || $TipoArchivo == "image/jpg" || $TipoArchivo == "image/png" || $TipoArchivo == "image/gif")
	{
		if ($TamañoArchivo>1000000)
		{
			echo "<script languague='javascript'>alert('el tamaño de la imagen es demasiado grande'); location.href='../production/aprendiz/ActualizarFoto.php'</script>";
		}
		else
		{
			include_once("Aprendiz.php");
			include_once("DatosUsuario.php");
			$Destino = $CarpetaContenedora. basename($NombreImagen).".jpg";
			$usuario = new Aprendiz(ObtenerDatos($_SESSION['Usuario'],"Nombres"),ObtenerDatos($_SESSION['Usuario'],"Apellidos"),ObtenerDatos($_SESSION['Usuario'],"NombreUsuario"),ObtenerDatos($_SESSION['Usuario'],"Email"),"",$Dees);
			$usuario->ActualizarDatos();
			header("location: ../production/aprendiz/index-Aprendiz.php");
			move_uploaded_file($_FILES['Archivo']['tmp_name'], $Destino);		
		}
	}
	else
	{
		echo "<script languague= 'javascript'>alert('El tipo de Archivo que se ingresó no es una imagen, intente nuevamente');</script>";
	}
 ?>