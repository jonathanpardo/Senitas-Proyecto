 <?php
	class Usuario
	{
		//Atributos
		private $Nombres;
		private $Apellidos;
		private $NombreUsuario;
		private $Email;
		private $Contrasena; 
		private $Foto;

		function __construct()
		{
			switch (func_num_args())
			{
				case 2:
					$this->NombreUsuario = func_get_arg(0);
					$this->Contrasena = func_get_arg(1);
					break;
				case 4:
					$this->Nombres = func_get_arg(0);
					$this->Apellidos = func_get_arg(1);
					$this->Email = func_get_arg(2);
					$this->NombreUsuario = func_get_arg(3);
					break;
				case 5:
					$this->Nombres = func_get_arg(0);
					$this->Apellidos = func_get_arg(1);
					$this->NombreUsuario = func_get_arg(2);
					$this->Email = func_get_arg(3);
					$this->Contrasena = func_get_arg(4);
					break;
				case 6:
					$this->Nombres = func_get_arg(0);
					$this->Apellidos = func_get_arg(1);
					$this->NombreUsuario = func_get_arg(2);
					$this->Email = func_get_arg(3);
					$this->Contrasena = func_get_arg(4);
					$this->Foto = func_get_arg(5);
					break;
				default:					
					break;
			}			
		}


		//Metodos
		public function Registrarse()
		{
			//Conexion e ingreso de datos a la db
			include("Conexion.php");
			$Conexion = Conexion::Conectar();
			$consulta = $Conexion->prepare("SELECT * FROM usuario WHERE NombreUsuario = :NombreUsuario");
			$consulta->execute(array(":NombreUsuario"=>$this->NombreUsuario));
			if (($fila = $consulta->fetch(PDO::FETCH_ASSOC))!=NULL)
			{
				echo "<script languague='javascript'>alert('El nombre de usuario ya se encuentra registrado. Por favor seleccione otro e intente nuevamente');location.href='../login-Aprendiz.php#signup'</script>";
			}
			else
			{
				switch (func_get_arg(0))
				{
					case 'Aprendiz':
						$encriptar = password_hash($this->Contrasena,PASSWORD_DEFAULT,array("cost"=>15));
						$insertarAprendiz = $Conexion->prepare("INSERT INTO aprendiz (NombreUsuario) VALUES (:NombreUsuario)");
						$insertarAprendiz->execute(array(":NombreUsuario"=>$this->NombreUsuario));
						if ($insertarAprendiz->rowCount()>0)
						{
							$consultaAprendiz = $Conexion->prepare("SELECT idAprendiz FROM aprendiz WHERE NombreUsuario = :NombreUsuario");
							$consultaAprendiz->execute(array(":NombreUsuario"=>$this->NombreUsuario));
							while ($fila = $consultaAprendiz->fetch(PDO::FETCH_ASSOC))
							{
								$idAprendiz = $fila["idAprendiz"];
							}
							$resultado = $Conexion->prepare("INSERT INTO usuario (Nombres,Apellidos,NombreUsuario,Email,Contrasena,Foto,FK_UsuarioAprendiz) VALUES (:Nom,:Ape,:NU,:Correo,:pwrd,:Foto,:FK_UsuarioAprendiz)");
					        $resultado->execute(array(":Nom"=>$this->Nombres,":Ape"=>$this->Apellidos,":NU"=>$this->NombreUsuario,":Correo"=>$this->Email,":pwrd"=>$encriptar,":Foto"=>$this->Foto,":FK_UsuarioAprendiz"=>$idAprendiz));
					        if($resultado->rowCount()>0)
					        {
					        	echo $idAprendiz;
					        	echo "<script languague='javascript'>alert('Registro realizado exitosamente'); location.href='../login-Aprendiz.php'</script>";
					        }
					        else
					        {
					        	print_r($resultado->errorInfo());
					        	echo "<script languague='javascript'>alert('Error al registrar los datos, por favor intente nuevamente'); location.href='../login-Aprendiz.php#signup'</script>";
					        }		
						}
						break;
					case 'Instructor':
						$tipoUsuario = func_get_arg(0);
						$tipoUsuario = 2;
						$encriptar = password_hash($this->Contrasena,PASSWORD_DEFAULT,array("cost"=>15));
						$insertarInstructor = $Conexion->prepare("INSERT INTO instructor (NombreUsuario) VALUES (:NombreUsuario)");
						$insertarInstructor->execute(array(":NombreUsuario"=>$this->NombreUsuario));
						if ($insertarInstructor->rowCount()>0)
						{
							$consultaInstructor = $Conexion->prepare("SELECT idInstructor FROM instructor WHERE NombreUsuario = :NombreUsuario");
							$consultaInstructor->execute(array(":NombreUsuario"=>$this->NombreUsuario));
							while ($fila = $consultaInstructor->fetch(PDO::FETCH_ASSOC))
							{
								$idInstructor = $fila["idInstructor"];
							}
							$resultado = $Conexion->prepare("INSERT INTO usuario (Nombres,Apellidos,NombreUsuario,Email,Contrasena,Foto,FK_UsuarioInstructor) VALUES (:Nom,:Ape,:NU,:Correo,:pwrd,:Foto,:FK_UsuarioInstructor)");
					        $resultado->execute(array(":Nom"=>$this->Nombres,":Ape"=>$this->Apellidos,":NU"=>$this->NombreUsuario,":Correo"=>$this->Email,":pwrd"=>$encriptar,":Foto"=>$this->Foto,":FK_UsuarioInstructor"=>$tipoUsuario));
					        if($resultado->rowCount()>0)
					        {
					        	echo "<script languague='javascript'>alert('Registro realizado exitosamente'); location.href='../login-Aprendiz.php'</script>";
					        }
					        else
					        {
					        	print_r($resultado->errorInfo());
					        	echo "<script languague='javascript'>alert('Error al registrar los datos, por favor intente nuevamente'); location.href='../login-Aprendiz.php#signup'</script>";
					        }
						}
						break;
					case 'Administrador':
						$tipoUsuario = func_get_arg(0);
						$tipoUsuario = 3;
						$encriptar = password_hash($this->Contrasena,PASSWORD_DEFAULT,array("cost"=>15));
						$resultado = $Conexion->prepare("INSERT INTO usuario (Nombres,Apellidos,NombreUsuario,Email,Contrasena,Foto,FK_UsuarioAdministrador) VALUES (:Nom,:Ape,:NU,:Correo,:pwrd,:Foto,:FK_UsuarioAdministrador)");
				        $resultado->execute(array(":Nom"=>$this->Nombres,":Ape"=>$this->Apellidos,":NU"=>$this->NombreUsuario,":Correo"=>$this->Email,":pwrd"=>$encriptar,":Foto"=>$this->Foto,":FK_UsuarioAdministrador"=>$tipoUsuario));
				        if($resultado->rowCount()>0)
				        {
				        	echo "<script languague='javascript'>alert('Registro realizado exitosamente'); location.href='../login-Aprendiz.php'</script>";
				        }
				        else
				        {
				        	print_r($resultado->errorInfo());
				        	echo "<script languague='javascript'>alert('Error al registrar los datos, por favor intente nuevamente'); location.href='../login-Aprendiz.php#signup'</script>";
				        }
						break;	
					default:
						break;
				}
		        $resultado->closeCursor();
		        $resultado = null;
		        $Conexion = null;	        
		    }
		}

		public function Ingresar($Pagina,$Recordar)
		{
			include('Conexion.php');
			$Conexion= Conexion::Conectar();
			$resultado = $Conexion->prepare("SELECT * FROM usuario where NombreUsuario = :NU");
			$resultado->execute(array(":NU"=>$this->NombreUsuario));
			if ($registro = $resultado->fetch(PDO::FETCH_ASSOC))
			{
				if (password_verify($this->Contrasena,$registro['Contrasena']))
				{
					include("Sesion.php");
					iniciarSesion($this->NombreUsuario);
					if ($Recordar == true)
					{					
						setcookie("RecordarUsuario",$this->NombreUsuario,time()+2592000,"/");
					}
					else
					{
						setcookie("RecordarUsuario","",time()-1,"/");
					}
					header('Location: ../production/aprendiz/index-Aprendiz.php');	
				}
				else
				{
					echo "<script languague='javascript'>alert('Los datos ingresados son erroneos, verifique e intente nuevamente');location.href='$Pagina#signin'</script>";	
				}
			}
			else
			{
				echo "<script languague='javascript'>alert('El nombre de usuario no se encuentra registrado, verifique e intente nuevamente');location.href='../login-Aprendiz.php'</script>";
			}
			$Conexion = null;
		}

		public function ActualizarDatos()
		{
			include_once("Conexion.php");
			$Conexion = Conexion::Conectar();
			$resultado = $Conexion->prepare("UPDATE usuario SET Nombres = :Nombres, Apellidos = :Apellidos, Email=:Email, Foto=:Foto WHERE NombreUsuario = :NombreUsuario");
			if($resultado->execute(array(":Nombres"=>ucwords($this->Nombres),":Apellidos"=>ucwords($this->Apellidos),":Email"=>$this->Email,":Foto"=>$this->Foto,":NombreUsuario"=>$this->NombreUsuario)))				
			{
				echo "<script languague='javascript'>alert('Datos actualizados correctamente');location.href='../production/aprendiz/index-Aprendiz.php'</script>";
			}
			else
			{
				echo "<script languague='javascript'>alert('Error al actualizar datos,Por favor intente nuevamente');</script>";
			}
			$Conexion = null;
		}

		public function borrarCuenta()
		{
			include("Conexion.php");
			$Conexion = Conexion::Conectar();
			$consulta = $Conexion->prepare("SELECT * FROM usuario WHERE NombreUsuario = :NombreUsuario");
			$consulta->execute(array(":NombreUsuario"=>$this->NombreUsuario));
			if ($registro = $consulta->fetch(PDO::FETCH_ASSOC))
			{
				if (password_verify($this->Contrasena,$registro['Contrasena']))
				{
					$resultado = $Conexion->prepare("DELETE FROM Usuario WHERE NombreUsuario = :NombreUsuario");
					$resultado->execute(array(":NombreUsuario"=>$this->NombreUsuario));
					if($resultado->rowCount()>0)
					{
						if (isset($_COOKIE['RecordarUsuario']))
						{						
							if ($_SESSION['Usuario'] == $_COOKIE['RecordarUsuario'])
							{
								setcookie("RecordarUsuario","",time()-1,"/");
							}
						}
						session_destroy();
						echo "<script languague='javascript'>alert('La cuenta ha sido borrada exitosamente');location.href='../login-Aprendiz.php'</script>";
					}
					else
					{
						echo "<script languague='javascript'>alert('Error borrar la cuenta, por favor intente nuevamente');location.href='../production/aprendiz/borrarCuenta.php'</script>";
					}
				}
				else
				{
					echo "<script languague='javascript'>alert('La contraseña ingresada no es correcta');location.href='../production/aprendiz/borrarCuenta.php'</script>";
				}
			}			
			$Conexion = null;
		}
	}

?>