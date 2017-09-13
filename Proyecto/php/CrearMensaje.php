<?php 
	function EnviarMensaje()
	{
		if (isset($_POST['enviar']))
		{
			date_default_timezone_set('America/Bogota');
			$fecha = date("j/m/Y, g:i a");
			$para = $_POST['para'];
			$de = $_SESSION['Usuario'];
			$asunto = $_POST['asunto'];
			$texto = $_POST['texto'];
		    $Conexion = Conexion::Conectar();
		    $resultado = $Conexion->prepare("INSERT INTO Mensaje (para,de,fecha,asunto,texto) VALUES (:Destinatario,:Remitente,:Fecha,:asunto,:Mensaje)");
			$resultado->execute(array(":Destinatario"=>$para,":Remitente"=>$de,":Fecha"=>$fecha,":asunto"=>$asunto,":Mensaje"=>$texto));
			return $resultado->rowCount();			
		}
	}
?>