<h1>Gestionar categorias</h1>


<a href="<?=base_url?>categoria/crear" class="button button-small">Crear categoria</a>
<?php
if(isset($_SESSION['register']) && $_SESSION['register']=='create'):?>
	<strong class="alert_green">Registro completado correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register']=='update'): ?>
	<strong class="alert_green">Registro actualizado correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register']=='delete'): ?>
	<strong class="alert_green">Registro eliminado correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register']=='failed'): ?>
	<strong class="alert_red">No se completo el proceso</strong>
<?php endif;?>
<?php Utils::deleteSession('register'); ?>


<table class="table">
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>ACCIONES</th>
	</tr>
<?php while($cat = $categorias->fetch_object()):?>
	<tr>
		<td><?=$cat->id?></td>
		<td><?=$cat->nombre?></td>
		<td>
			<a href="<?=base_url?>categoria/editar&id=<?=$cat->id?>" class="button1 button-categoria">Editar</a>
			<a href="<?=base_url?>categoria/delete&id=<?=$cat->id?>" class="button1 button-categoria button-red">Eliminar</a></td>
	</tr>

<?php endwhile; ?>
</table>
