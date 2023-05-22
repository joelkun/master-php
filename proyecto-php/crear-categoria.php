<?php 
require_once 'includes/redireccion.php';
require_once 'includes/header.php';
require_once 'includes/sidebar.php';


 ?>
 <!--CAJA PRINCIPAL-->
		<div id="main">
			<h1>Crear categoria</h1>
			<p>
				Añade nuevas categorías al blog para que los usuarios puedan usarlas al crear sus entradas.
			</p>
			<br/>
			<form action="action/guardar-categoria.php" method="POST">
				<label for="nombre" >Nombre de la categoría</label>
				<input type="text" name="nombre">

				<input type="submit" value="Guardar">
			</form>
		</div><!--Fin principal-->

<?php require_once 'includes/footer.php'; ?>