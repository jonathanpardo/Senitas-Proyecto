<?php 
	function EnviarMensaje()
	{
		if (isset($_POST['enviar']))
		{
			date_default_timezone_set('America/Bogota');
			$fecha = date("j/m/Y, g:i a");
			$para = $_POST['para'];
			$de = $_SESSION['Usuario'];
			$tipo = $_POST['tipo'];
			$texto = $_POST['texto'];
		    $Conexion = Conexion::Conectar();
		    $resultado = $Conexion->prepare("INSERT INTO reporte (para,de,fecha,tipoError,texto) VALUES (:Destinatario,:Remitente,:Fecha,:tipo,:Mensaje)");
			$resultado->execute(array(":Destinatario"=>$para,":Remitente"=>$de,":Fecha"=>$fecha,":tipo"=>$tipo,":Mensaje"=>$texto));
			return $resultado->rowCount();			
		}
	}
?>