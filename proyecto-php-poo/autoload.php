<?php



function controllers_autoload($classname){
	$env = getenv("ENVIROMENT");

	if($env == "produccion"){
		// Cargar controladores en produccion

		require_once 'controllers/'.ucfirst($classname).'.php';
	}else{
		// Cargar controladores en local
		include 'controllers/'.$classname.'.php';
	}
	
}

spl_autoload_register('controllers_autoload');

 ?>