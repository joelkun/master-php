<?php 
require_once 'includes/redireccion.php';
require_once 'includes/header.php';
require_once 'includes/sidebar.php';

 ?>
  <!--CAJA PRINCIPAL-->
		<div id="main">
			<h1>Mis datos</h1>
			<!-- Mostrar errores -->
				<?php if(isset($_SESSION['completado'])):?>
					<div class="warning warning-success">
						<?=$_SESSION['completado']?>
					</div>
				<?php elseif(isset($_SESSION['errores']['general'])): ?>
					<div class="warning warning-error">
					<?=$_SESSION['errores']['general']?>
					</div>
				<?php endif; ?>
			<form action="action/actualizar-usuario.php" method="POST">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" value="<?=$_SESSION['usuario']['nombre']?>" />
				<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'nombre'):''; ?>
				<label for="apellidos">Apellidos</label>
				<input type="text" name="apellidos" value="<?=$_SESSION['usuario']['apellidos']?>" />
					<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'apellidos'):''; ?>
				<label for="email">Email</label>
				<input type="email" name="email" value="<?=$_SESSION['usuario']['email']?>"/>
					<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'email'):''; ?>
				<input type="submit" name="submit" value="Actualizar">
				</form>
				<?php borrarErrores(); ?>
		</div><!--Fin principal-->
		

<?php require_once 'includes/footer.php'; ?>
