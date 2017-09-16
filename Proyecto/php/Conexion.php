<?php 
	class Conexion
	{
		public static function Conectar()
		{
			try
			{		
		    	$Conexion = new PDO('mysql:host=localhost; dbname=id2759632_senitas','id2759632_senitas','123456');
		    	$Conexion->exec("SET CHARSET SET utf8");
			}			
			catch (Exception $e)
			{
				die("Error : " . $e.message());
			}
			return $Conexion;
		}
	}
?>
