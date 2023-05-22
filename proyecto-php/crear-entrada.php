<?php 
require_once 'includes/redireccion.php';
require_once 'includes/header.php';
require_once 'includes/sidebar.php';


 ?>
 <!--CAJA PRINCIPAL-->
		<div id="main">
			<h1>Crear entrada</h1>
			<p>
				Añade nuevas entradas al blog para que los usuarios puedan leerlas y disfrutar de nuestro contenido.
			</p>
			<br/>
			<form action="action/guardar-entrada.php" method="POST">
				<label for="titulo" >Título</label>
				<input type="text" name="titulo">
				<?php echo isset($_SESSION['errores-entradas']) ? mostrarError($_SESSION['errores-entradas'],'titulo'):''; ?>

				<label for="descripcion" >Descripcion</label>
				<textarea type="text" name="descripcion"></textarea>
				<?php echo isset($_SESSION['errores-entradas']) ? mostrarError($_SESSION['errores-entradas'],'descripcion'):''; ?>

				<label for="categoria">Categoría</label>
				<select name="categoria">
					<?php 
						$categorias = conseguirCategorias($db);
						if(!empty($categorias)):
							while($categoria=mysqli_fetch_assoc($categorias)):
					?>
					<option value="<?=$categoria['id']?>">
						<?=$categoria['nombre']?>
					</option>
					<?php 
					    	endwhile;
				    	endif;

					  ?>
				</select>
				<?php echo isset($_SESSION['errores-entradas']) ? mostrarError($_SESSION['errores-entradas'],'categoria'):''; ?>
				

				<input type="submit" value="Guardar">
			</form>
			<?php borrarErrores(); ?>
		</div><!--Fin principal-->

<?php require_once 'includes/footer.php'; ?>