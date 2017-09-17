<?php 
include_once("Usuario.php");
class Administrador extends Usuario
{
	
	function __construct()
	{
		parent::__construct(func_get_arg(0),func_get_arg(1),func_get_arg(2),func_get_arg(3),func_get_arg(4),func_get_arg(5));
	}

	public function Registrarse()
	{
		parent::Registrarse("Administrador");
	}
}
 ?>