<?php
	$Conexion = Conexion::Conectar();
	$resultado = $Conexion->prepare("SELECT * FROM reporte WHERE para=:Usuario and leido IS NULL");
	$resultado->execute(array("Usuario"=>$_SESSION['Usuario']));
	$tot = $resultado->rowCount();

	function Mensajessinleer()
	{
		global $tot;
		return $tot;
	}
?>
