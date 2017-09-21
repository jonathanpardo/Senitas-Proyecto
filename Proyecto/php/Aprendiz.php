<?php 
	include_once("Usuario.php");
	class Aprendiz extends Usuario
	{
		
		function __construct()
		{
			parent::__construct(func_get_arg(0),func_get_arg(1),func_get_arg(2),func_get_arg(3),func_get_arg(4),func_get_arg(5));
		}

		public function Registrarse()
		{
			parent::Registrarse("Aprendiz");
		}

		public function RegistrarseCursos($Curso,$Usuario)
		{
			include("Cursos.php");
			$curso = new Cursos("","","","","","");
			$curso->RegistrarCursos($Curso,$Usuario);
		}
	}
 ?>