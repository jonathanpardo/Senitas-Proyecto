<?php 
	error_reporting(E_ALL ^ E_DEPRECATED);
	$Conexion = Conexion::Conectar();
	$resultado = $Conexion->prepare("SELECT * FROM mensaje WHERE para=:Usuario and leido IS NULL");
	$resultado->execute(array("Usuario"=>$_SESSION['Usuario']));
	$tot = $resultado->rowCount();

	function Mensajessinleer()
	{
		global $tot;
		return $tot;
	}
?>