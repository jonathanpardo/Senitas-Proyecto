<?php
    function VerificarUsuario($tipoUsuario)
    {
        switch ($tipoUsuario) {
            case "aprendiz":
                $Conexion = Conexion::Conectar();
                $resultado = $Conexion->prepare("SELECT * FROM usuario WHERE NombreUsuario = :NombreUsuario");
                $resultado->execute(array(":NombreUsuario"=>$_SESSION['Usuario']));
                $registros = $resultado->rowCount();
                if ($registros == 0) {
                    

                    $usuario
                }
                return $registros;
                break;
            default:
                break;
        }
    }
?>
