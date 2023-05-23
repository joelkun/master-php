<?php 
require_once 'autoload.php';

/*$usuario = new Usuario();
echo $usuario->nombre;
echo "<br>";
echo $usuario->email;

$categoria = new Categoria();
echo "<br/>".$categoria->nombre;
*/

// ESPACIO DE NOMBRES Y PAQUETES

use Misclases\Usuario, Misclases\Categoria, Misclases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal{
	public $usuario;
	public $categoria;
	public $entrada;

	public function __construct(){
		$this->usuario = new Usuario();
		$this->categoria = new Categoria();
		$this->entrada = new Entrada();
		

	}

	public function getUsuario()
	{ 
		return $this->usuario;
	} 
	
	public function setUsuario($usuario) 
	{ 
		$this->usuario = $usuario; 
		return $this; 
	}

	public function getCategoria()
	{ 
	 	return $this->categoria;
	} 
	 
	public function setCategoria($categoria) 
	{
		$this->categoria = $categoria; 
	 	return $this; 
	}

	public function getEntrada()
	{ 
		return $this->entrada;
	} 
	
	public function setEntrada($entrada) 
	{ 
		$this->entrada = $entrada; 
		return $this; 
	}

	function informacion(){
		echo __METHOD__;
		echo __FILE__;
		echo __NAMESPACE__;

	} 

}

//Objeto principal
$principal = new Principal();
$principal->informacion();
//var_dump($principal->usuario);
//var_dump(get_class_methods($principal));
$metodos=get_class_methods($principal);
$busqueda= array_search('setEntrada', $metodos);
var_dump($busqueda);


//Objeto otro paquete
//$usuario = new UsuarioAdmin();
//var_dump($usuario);

// Comprobar si existe una clase
$clase=@class_exists('Misclases\Usuario2');
if ($clase) {
	echo "<h1>La clase SI existe</h1>";
}else{
	echo "<h1>La clase NO existe</h1>";
}

?>