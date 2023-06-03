<?php  
require_once 'models/categoria.php';
require_once 'models/producto.php';

class categoriaController{

	public function index(){
		Utils::isAdmin();
		$categoria = new Categoria();
		$categorias = $categoria->getAll();
		require_once 'views/categoria/index.php';
	}

	public function crear(){
		Utils::isAdmin();
		require_once 'views/categoria/crear.php';
	}

	public function save(){
		Utils::isAdmin();

		if(isset($_POST)){
			$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;

			// Array de errores
			$errores=array();

			// Validar los datos antes de guardarlos en la base de datos
    		// Validar nombre
    		if(!empty($nombre))
			{
				$nombre_validado=true;
			}else{
				$nombre_validado=false;
				$errores['nombre']="El nombre no es válido";
			}

			if(count($errores)==0){
				$categoria = new Categoria();
				$categoria->setNombre($nombre);
				$save = $categoria->save();
				if($save){
					$_SESSION['register']="create";
				}else{
					$_SESSION['register']="failed";

				}
			}else{
				$_SESSION['register']="failed";
				$_SESSION['errores']=$errores;
			    header("Location:".base_url.'categoria/crear');
			}
		}else{
			$_SESSION['register']="failed";
		}
		header("Location:".base_url."categoria/index");
	}

	public function delete(){
		Utils::isAdmin();
		if(isset($_GET['id'])){
			$id=$_GET['id'];
			$categoria = new Categoria();
			$categoria->setId($id);
			$delete = $categoria->delete();
			if($delete){
				$_SESSION['register']="delete";
			}else{
				$_SESSION['register']="failed";
			}

		}
		header("Location:".base_url."categoria/index");
	}

	public function ver(){
		if (isset($_GET['id'])) {
			$id=$_GET['id'];

			// Conseguir categoria
			$categoria = new Categoria();
			$categoria->setId($id);
			$categoria=$categoria->getOne();

			// Conseguir productos
			$producto = new Producto();
			$producto->setCategoria_id($id);
			$productos=$producto->getAllCategory();
		}
		require_once 'views/categoria/ver.php';
	}

	public function editar(){
		Utils::isAdmin();
		if (isset($_GET['id'])) {
			$id=$_GET['id'];
			// Conseguir categoria
			$categoria = new Categoria();
			$categoria->setId($id);
			$categoria=$categoria->getOne();
		}
		require_once 'views/categoria/editar.php';
	}

	public function update(){
		Utils::isAdmin();
		if(isset($_POST)){
			$id=isset($_POST['id']) ? $_POST['id'] : false;
			$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;

			// Array de errores
			$errores=array();

			// Validar los datos antes de guardarlos en la base de datos
    		// Validar nombre

    		if(!empty($nombre) && !empty($id))
			{
				$nombre_validado=true;
			}else{
				$nombre_validado=false;
				$errores['nombre']="El nombre no es válido";
			}

			if(count($errores)==0){
				$categoria = new Categoria();
				$categoria->setId($id);
				$categoria->setNombre($nombre);
				$update = $categoria->update();

				if($update){
					$_SESSION['register']="update";
				}else{
					$_SESSION['register']="failed";

				}
			}else{
				$_SESSION['register']="failed";
				$_SESSION['errores']=$errores;
			    header("Location:".base_url.'categoria/editar&id='.$id);
			}
		}else{
			$_SESSION['register']="failed";
		}
		header("Location:".base_url."categoria/index");

	}


} //fin clase

?>