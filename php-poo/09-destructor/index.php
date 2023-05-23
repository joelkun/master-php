<?php 

class Usuario{
	public $nombre;
	public $email;

	public function __construct(){
		$this->nombre="Jonathan Villon";
		$this->email="jonathan@jonathan.com";
		
		echo "Creando el objeto con fin de prueba </br>";
	}

	public function __toString(){
		return "Hola,  {$this->nombre}, estas registardo con {$this->email}<br/>";

	}

	public function __destruct(){
		echo "Destruyendo el objeto";
	}
}

$usuario= new Usuario();

/*for ($i=0; $i <=200 ; $i++) { 
	echo $i."<br/>";
}*/

echo $usuario;



 ?>