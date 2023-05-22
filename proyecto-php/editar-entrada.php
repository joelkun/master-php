<?phprequire_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/header.php'; ?>

<?php 
    $entrada_actual = conseguirEntrada($db,$_GET['id']);
    if(!isset($entrada_actual['id'])){
    	header("Location: index.php");

    }
?>

<?php require_once 'includes/sidebar.php'; ?>
        <!--CAJA PRINCIPAL-->
		<div id="main">
			<h1>Editar entrada</h1>
			<p>
				Edita tu entrada <?=$entrada_actual['titulo']?>
			</p>
			<br/>
			<form action="action/guardar-entrada.php?editar=<?=$entrada_actual['id']?>" method="POST">
				<label for="titulo" >Título</label>
				<input type="text" name="titulo" value="<?=$entrada_actual['titulo']?>">
				<?php echo isset($_SESSION['errores-entradas']) ? mostrarError($_SESSION['errores-entradas'],'titulo'):''; ?>

				<label for="descripcion" >Descripcion</label>
				<textarea type="text" name="descripcion"><?=$entrada_actual['descripcion']?></textarea>
				<?php echo isset($_SESSION['errores-entradas']) ? mostrarError($_SESSION['errores-entradas'],'descripcion'):''; ?>

				<label for="categoria">Categoría</label>
				<select name="categoria">
					<?php 
						$categorias = conseguirCategorias($db);
						if(!empty($categorias)):
							while($categoria=mysqli_fetch_assoc($categorias)):
					?>
					<option value="<?=$categoria['id']?>"
						<?=($categoria['id'] == $entrada_actual['categoria_id']) ? 'selected="selected"' :' '  ?>
						>
						<?=$categoria['nombre']?>
					</option>
					<?php 
					    	endwhile;
				    	endif;

					  ?>
				</select>
				<?php echo isset($_SESSION['errores-entradas']) ? mostrarError($_SESSION['errores-entradas'],'categoria'):''; ?>
				

				<input type="submit" value="Editar">
			</form>
			<?php borrarErrores(); ?>


		</div><!--Fin principal-->
		
<?php require_once 'includes/footer.php'; ?>	