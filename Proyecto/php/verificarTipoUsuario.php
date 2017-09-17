<?php
    function numeroUsuarios($tipoUsuario){
        switch ($tipoUsuario) {
            case 'aprendiz':
                $Conexion = Conexion::Conectar();
                $resultado = $Conexion->prepare("SELECT * FROM usuario WHERE NombreUsuario = :NombreUsuario AND FK_UsuarioAprendiz IS NOT NULL");
                $resultado->execute(array(":NombreUsuario"=>$_SESSION['Usuario']));
                $registros = $resultado->rowCount();
                return $registros;     
                break;            
            default:
                break;
        }
         
    }

    function VerificarUsuario(){
        $Conexion = Conexion::Conectar();
        $resultado = $Conexion->prepare("SELECT * FROM usuario WHERE NombreUsuario = :NombreUsuario");
        $resultado->execute(array(":NombreUsuario"=>$_SESSION['Usuario']));
        while ($registros = $resultado->fetch(PDO::FETCH_ASSOC)) {
            $usuarios = array('aprendiz'=>$registros['FK_UsuarioAprendiz'] , "instructor"=>$registros['FK_UsuarioInstructor'], "Administrador"=>$registros['FK_UsuarioAdministrador']);
        }
        return $usuarios;        
    }

    function Redireccionar($usuarios){
        if($usuarios["aprendiz"] == null && $usuarios["instructor"]!=null){
            header("location:../instructor/instructor.html");
        }
        else if($usuarios["aprendiz"] == null && $usuarios["Administrador"] != null)
        {
            header("location:../Administrador/Administrador.html");
        }
    }
?>
