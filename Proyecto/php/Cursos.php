<?php 
	class Cursos 
	{	
		private $Nombre;
		private $Descripcion;
		private $Duracion;
		private $Cupos;
		private $instructor;
		private $imagen;

		function __construct($Nombre,$Descripcion,$Duracion,$Cupos,$instructor,$imagen)
		{
			$this->Nombre = $Nombre;	
			$this->Descripcion = $Descripcion;
			$this->Duracion = $Duracion;
			$this->Cupos = $Cupos;
			$this->instructor = $instructor;
			$this->imagen = $imagen;	
		}

		public function CrearCurso()
		{
			include('Conexion.php');
			$Conexion = Conexion::Conectar();
			$consulta = $Conexion->prepare("INSERT INTO CURSOS (NOMBRE,DESCRIPCION,DURACION,CUPOS,INSTRUCTOR,IMAGEN) VALUES (:NOMBRE,:DESCRIPCION,:DURACION,:CUPOS,:INSTRUCTOR,:IMAGEN)");
			$consulta->execute(array(":NOMBRE"=>$this->Nombre,":DESCRIPCION"=>$this->Descripcion,":DURACION"=>$this->Duracion,":CUPOS"=>$this->Cupos,":INSTRUCTOR"=>$this->instructor,":IMAGEN"=>$this->imagen));
			if($consulta->rowCount()>0)
	        {
	        	echo "<script languague='javascript'>alert('Cursos creado correctamente'); location.href='../production/Administrador/Administrador.php';</script>";
	        }
	        else
	        {
	        	print_r($consulta->errorInfo());
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