<?php 
# Incluimos la configuracion
include_once('../../php/Conexion.php'); 
$Conexion = Conexion::Conectar();

# Buscamos los mensajes privados
$resultado = $Conexion->prepare("SELECT * FROM mensaje WHERE para=:usuario");
$resultado->execute(array(":usuario"=>$_SESSION['Usuario']));
?>