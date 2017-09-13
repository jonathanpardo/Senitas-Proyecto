<?php 
	include_once('Conexion.php');

	function ObtenerDatos($NombreUsuario)
	{
		$Conexion = Conexion::Conectar();
		$resultado = $Conexion->prepare("SELECT * FROM USUARIO WHERE NombreUsuario=:NombreUsuario");
		$resultado->execute(array(":NombreUsuario"=>$NombreUsuario));
		while ($fila = $resultado->fetch(PDO::FETCH_ASSOC))
		{
			switch (func_num_args())
			{
				case 2:
					return $fila[func_get_arg(1)];
					break;
				case 3:				
					if (func_get_arg(1)=="Nombres" && func_get_arg(2)=="Apellidos")
					{						
						return ucwords($fila[func_get_arg(1)] . " " .  $fila[func_get_arg(2)]);
					}
					break;
				default:
					break;
			}			
		}
	}
 ?>