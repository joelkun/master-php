<?php 
    if(!isset($_POST['busqueda'])){
    	header("Location: index.php");

    }
    
?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/sidebar.php'; ?>

		<!--CAJA PRINCIPAL-->
		<div id="main">
			
			<h1>Busqueda: <?=$_POST['busqueda']?></h1>

			<?php
				//$categoria=$_GET['id'];
				$busquedas = conseguirEntradas($db,null,null,$_POST['busqueda']);
				if (!empty($busquedas) && mysqli_num_rows($busquedas)>=1):
				 	while ($busqueda=mysqli_fetch_assoc($busquedas)):
			 ?>
			 <article class="entry">
				<a href="entrada.php?id=<?=$busqueda['id']?>">
					<h2><?=$busqueda['titulo']?></h2>
					<span class="date"><?=$busqueda['categoria'].' | '.$busqueda['fecha']?></span>
					<p>
						<?=substr($busqueda['descripcion'],0,180)."..."?>
					</p>
				</a>
			</article>
			<?php 
		            endwhile;
		        else:
			 ?>
				<div class="warning">No hay entradas en esta categoría</div>
            <?php endif; ?>
		</div><!--Fin principal-->
		
<?php require_once 'includes/footer.php'; ?>	