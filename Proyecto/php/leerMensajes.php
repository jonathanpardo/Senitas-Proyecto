<?php 

$id = $_GET['id'];
$Conexion = Conexion::Conectar();
$resultado = $Conexion->prepare("SELECT * FROM mensaje WHERE para=:Usuario and IdMensaje=:id");
$resultado->execute(array(":Usuario"=>$_SESSION['Usuario'],":id"=>$id));
$row = $resultado->fetch(PDO::FETCH_ASSOC);
?>