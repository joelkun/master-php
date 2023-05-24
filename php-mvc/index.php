<h1>Bienvenido a mi web con MVC</h1>
<?php 
require_once 'autoload.php';

if(isset($_GET['controller'])){
$nombre_controlador = $_GET['controller'].'Controller';
//echo $nombre_controlador;
}else{
	//echo $nombre_controlador;
	echo "La paginas que buscas no existe";
	exit();
}


if(class_exists($nombre_controlador)){
	
	$controlador = new $nombre_controlador();

	if(isset($_GET['action']) && method_exists($controlador, $_GET['action']))
	{
		$action = $_GET['action'];
		$controlador->$action();
	}else{
		//var_dump($controlador);
		echo "La paginas que buscas no existe";
	}	
}else{
	//var_dump($controlador);
	echo "La paginas que buscas no existe";
}


//$controlador->mostrarTodos();
//$controlador->crear();





?>