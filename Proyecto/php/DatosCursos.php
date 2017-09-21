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

	function obtenerUsuariosregistrados($idCursos)
	{
		include_once("Conexion.php");
		$Conexion = Conexion::Conectar();
		$resultado = $Conexion->prepare("SELECT * FROM INSCRIPCIONES INNER JOIN USUARIO ON FK_USUARIO = ID_USUARIO AND FK_CURSOS = :idCursos");
		$resultado->execute(array(":idCursos"=>$idCursos));
		$AprendizInscrito = array();
		while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
			$AprendizInscrito[] = $fila;
		}	
		if ($resultado->rowCount()==0) {
			echo "aun no se ha registrado nadie en el curso";
		}
		return $AprendizInscrito;
	}
?>