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
            case 'Instructor':
                $Conexion = Conexion::Conectar();
                $resultado = $Conexion->prepare("SELECT * FROM usuario WHERE NombreUsuario = :NombreUsuario AND FK_UsuarioInstructor IS NOT NULL");
                $resultado->execute(array(":NombreUsuario"=>$_SESSION['Usuario']));
                $registros = $resultado->rowCount();
                return $registros; 
                break;
            case 'Administrador':
                $Conexion = Conexion::Conectar();
                $resultado = $Conexion->prepare("SELECT * FROM usuario WHERE NombreUsuario = :NombreUsuario AND FK_UsuarioAdministrador IS NOT NULL");
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
            header("location:../instructor/instructor.php");
        }
        else if($usuarios["aprendiz"] == null && $usuarios["Administrador"] != null)
        {
            header("location:../Administrador/Administrador.php");
        }
        else if($usuarios["instructor"] == null && $usuarios["aprendiz"] != null)
        {
            header("location:../aprendiz/index-Aprendiz.php");
        }
        else if ($usuarios["instructor"] == null && $usuarios["Administrador"] != null) {
            header("location:../Administrador/Administrador.php");
        }
    }
?>
