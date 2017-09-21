<?php
	function obtenerCursos()
	{
		include_once("Conexion.php");
		$Conexion = Conexion::Conectar();
		$resultado =$Conexion->prepare("SELECT * FROM CURSOS");
		$resultado->execute();
		$Cursos = array();
		while ($filas =$resultado->fetch(PDO::FETCH_ASSOC)) {
			$Cursos[] = $filas;
		}
		return $Cursos;
	}

	function obtenerDatosCursos($idCursos)
	{
		include_once("Conexion.php");
		$Conexion = Conexion::Conectar();
		$resultado = $Conexion->prepare("SELECT * FROM CURSOS WHERE IDCURSOS = :IDCURSOS");
		$resultado->execute(array(":IDCURSOS"=>$idCursos));
		while ($fila = $resultado->fetch(PDO::FETCH_ASSOC))
		{
			switch (func_num_args())
			{
				case 2:
					return $fila[func_get_arg(1)];
					break;
				default:
					break;
			}
		}
	}
?>