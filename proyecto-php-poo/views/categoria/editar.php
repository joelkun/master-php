<?php if(isset($categoria)): ?>
<h1>Editar categoria <?=$categoria->nombre?></h1>
<?php endif; ?>

<form action="<?=base_url?>categoria/update" method="post">
	<input type="hidden" name="id" value="<?=$categoria->id?>">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" required value="<?=$categoria->nombre?>" />
	<?php echo isset($_SESSION['errores']) ? Utils::mostrarError($_SESSION['errores'],'nombre'):''; ?>

	<input type="submit" value="Actualizar" />
</form>
<?php Utils::borrarErrores(); ?>