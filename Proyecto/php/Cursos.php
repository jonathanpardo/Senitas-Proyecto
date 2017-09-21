<?php 
	class Cursos 
	{	
		private $Nombre;
		private $Descripcion;
		private $Duracion;
		private $Cupos;
		private $instructor;
		private $imagen;

		function __construct($Nombre)
		{
			$this->Nombre = $Nombre;		
		}

		public function CrearCurso()
		{
			include('Conexion.php');
			$Conexion = Conexion::Conectar();
			$consulta = $Conexion->prepare("INSERT INTO CURSOS (NOMBRE) VALUES (:NOMBRE)");
			$consulta->execute(array(":NOMBRE"=>$this->Nombre));
			if($consulta->rowCount()>0)
	        {
	        	echo "<script languague='javascript'>alert('Cursos creado correctamente');</script>";
	        }
	        else
	        {
	        	echo "<script languague='javascript'>alert('Error al crear el curso, intente nuevamente');</script>";
	        }
	        $consulta = null;
	        $Conexion = null;	  
		}

		public function ActualizarCursos()
		{
			include('Conexion.php');
			$consulta = $Conexion->prepare("UPDATE CURSOS SET NOMBRE = :NOMBRECURSO");
			$consulta->execute(array(":NOMBRECURSO"=>$this->Nombre));
			if($consulta->rowCount()>0)
	        {
	        	echo "<script languague='javascript'>alert('Registro realizado exitosamente');</script>";
	        }
	        else
	        {
	        	echo "<script languague='javascript'>alert('Error al registrar los datos, por favor intente nuevamente');</script>";
	        }
	        $consulta = null;
	        $Conexion = null;	
		}

		public function BorrarCursos()
		{
			include('Conexion.php');
			$consulta = $Conexion->prepare("DELETE FROM CURSOS WHERE NOMBRECURSO = :NOMBRECURSO");
			$consulta->execute(array(":NOMBRECURSO"=>$this->Nombre));
			if($consulta->rowCount()>0)
	        {
	        	echo "<script languague='javascript'>alert('Registro realizado exitosamente');</script>";
	        }
	        else
	        {
	        	echo "<script languague='javascript'>alert('Error al registrar los datos, por favor intente nuevamente');</script>";
	        }
	        $consulta = null;
	        $Conexion = null;
		}
	}
 ?>