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
			
			<h1><?=$entrada_actual['titulo']?></h1>
			<a href="categoria.php?id=<?=$entrada_actual['categoria_id']?>">
			<h2><?=$entrada_actual['categoria']?></h2>
			</a>
			<h4><?=$entrada_actual['fecha']?> | <?=$entrada_actual['usuario']?> </h4>
			<p>
				<?=$entrada_actual['descripcion']?>
			</p>
			<br/>

			<?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']): ?>
				<a href="editar-entrada.php?id=<?=$entrada_actual['id']?>" class="boton">Editar Entrada</a>
				<a href="borrar-entrada.php?id=<?=$entrada_actual['id']?>" class="boton boton-red">Eliminar Entrada</a>

		    <?php endif; ?>

			
		</div><!--Fin principal-->
		
<?php require_once 'includes/footer.php'; ?>	