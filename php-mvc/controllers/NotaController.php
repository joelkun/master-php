<?php 

class NotaController{

	public function listar(){
		// Modelo
		require_once 'models/nota.php';

		// Logica accion del controlador
		$nota = new Nota();
		$nota->setTitulo("Hola");
		$nota->setDescripcion("Hola Mundo PHP MVC");

		$notas=$nota->conseguirTodos('notas');

		// Vista
		require_once 'views/nota/listar.php';

	}

	public function crear(){
		require_once 'models/nota.php';

		$nota = new Nota();
		$nota->setUsuario_id(1);
		$nota->setTitulo("Nota desde PHP MVC");
		$nota->setDescripcion("Descricpcion de mi nota");
		$guardar = $nota->guardar();

		header("Location: index.php?action=listar&controller=Nota");

	}

	public function borrar(){
		
	}



}


?>