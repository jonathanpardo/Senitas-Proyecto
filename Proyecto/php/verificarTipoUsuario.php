<?php
    function VerificarUsuario($tipoUsuario)
    {
        switch ($tipoUsuario) {
            case "aprendiz":
                $Conexion = Conexion::Conectar();
                $resultado = $Conexion->prepare("SELECT * FROM usuario WHERE NombreUsuario = :NombreUsuario AND FK_usuarioAprendiz IS NOT NULL");
                $resultado->execute(array(":NombreUsuario"=>$_SESSION['Usuario']));
                $registros = $resultado->rowCount();
                return $registros;
                break;
            default:
						echo ":)))))))))";
                break;
        }
    }
