<?php
	function VerificarUsuario($tipoUsuario)
	{
		switch ($tipoUsuario)
		{
			case 'aprendiz':
				$Conexion = Conexion::Conectar();
		        $resultado = $Conexion->prepare("SELECT FK_UsuarioAprendiz FROM usuario WHERE NombreUsuario = :NombreUsuario");
		        $resultado->execute(array(":NombreUsuario"=>$_SESSION['Usuario']));
		        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC))
		        {
		          $tipoUsuario = $registro['FK_UsuarioAprendiz'];
		        }
		        echo "<script languague='javascript'>alert('sads')</script>";
		        return $tipoUsuario;
				break;			
			default:
				break;
		}
	}
?>