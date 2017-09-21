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

		public function RegistrarCursos($curso,$usuario)
		{
			include_once("Conexion.php");
			$Conexion = Conexion::Conectar();
			$consulta = $Conexion->prepare("SELECT id_Usuario FROM USUARIO WHERE NOMBREUSUARIO = :NOMBREUSUARIO");
			$consulta->execute(array(":NOMBREUSUARIO"=>$usuario));
			while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
				$id_Usuario = $filas["id_Usuario"];
			}
			$verificarInscripcion = $Conexion->prepare("SELECT * FROM INSCRIPCIONES WHERE FK_USUARIO = :FK_USUARIO AND FK_CURSOS = :FK_CURSOS");
			$verificarInscripcion->execute(array(":FK_USUARIO"=>$id_Usuario,":FK_CURSOS"=>$curso));
			if ($verificarInscripcion->rowCount()>0) {
				echo "<script languague='javascript'>alert('Ya te encuentras registrado en este curso');location.href='../production/aprendiz/seleccionar-Cursos.php'</script>";
			}
			else
			{
				$resultado = $Conexion->prepare("INSERT INTO INSCRIPCIONES (FK_CURSOS,FK_USUARIO) VALUES(:FK_CURSOS,:FK_USUARIO)");
				$resultado->execute(array(":FK_CURSOS"=>$curso,":FK_USUARIO"=>$id_Usuario));
				if($resultado->rowCount()>0)
				{
					echo "<script languague = 'javascript'>alert('Inscripcion realizada exitosamente');location.href='../production/aprendiz/index-Aprendiz.php';</script>";
				}
				else
				{
					echo "Error al registrarse en el curso";
				}
				
			}
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