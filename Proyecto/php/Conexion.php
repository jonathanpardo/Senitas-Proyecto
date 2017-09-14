<?php 
	class Conexion
	{
		public static function Conectar()
		{
			try
			{		
		    	$Conexion = new PDO('mysql:host=localhost; dbname=senitas','root','');
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