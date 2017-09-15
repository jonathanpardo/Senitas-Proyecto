<?php
	class Anuncio
	{
		//propiedades
		$Foto;
		$NombreAnuncio;
		$Descripcion;
		$enlace;

		public function __construct($Foto,$NombreAnuncio,$Descripcion,$link)
		{
			$this->Foto = $Foto;
			$this->NombreAnuncio = $NombreAnuncio;
			$this->Descripcion = $Descripcion;
			$this->enlace = $enlace;
		}
		//metodos

		public function CrearAnuncio()
		{
			include("Conexion.php");
			$Conexion = Conexion::Conectar();
			$resultado = $Conexion->prepare("INSERT INTO Anuncio (Foto,NombreAnuncio,Descripcion,link) VALUES (:Foto,:NombreAnuncio,:Descripcion,:link)");
			$resultado->execute(array(":Foto"=>$this->Foto,":NombreAnuncio"=>$this->NombreAnuncio,":Descripcion"=>$this->Descripcion,":enlace"=>$this->enlace));
			if ($resultado->rowCount()>0) {
				echo "anuncio registrado correctamente";
			}
			else{
				echo "Error al crear el anuncio";
			}
		}	 

		public function ActualizarAnuncion()
		{
			include("Conexion.php");
			$Conexion = Conexion::Conectar();
			$resultado = $Conexion->prepare("UPDATE Anuncio SET Foto = :Foto, NombreAnuncio = :NombreAnuncio, Descripcion = :Descripcion, enlace = :enlace");
			if($resultado->execute(array(":Foto"=>$this->Foto,":NombreAnuncio"=>$this->NombreAnuncio,":Descripcion"=>$this->Descripcion,":enlace"=>$this->enlace))){
				echo "Anuncio actualizado correctamente";
			}
			else
			{
				echo "Error al actualizar el anuncio";
			}
		}
	}
?>