<?php require_once 'includes/header.php'; ?>
	
<?php require_once 'includes/sidebar.php'; ?>

		<!--CAJA PRINCIPAL-->
		<div id="main">
			<h1>Ultimas entradas</h1>

			<?php
				$entradas = conseguirEntradas($db,4);
				if (!empty($entradas)):
				 	while ($entrada=mysqli_fetch_assoc($entradas)):
			 ?>
			 <article class="entry">
				<a href="entrada.php?id=<?=$entrada['id']?>">
					<h2><?=$entrada['titulo']?></h2>
					<span class="date"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
					<p>
						<?=substr($entrada['descripcion'],0,180)."..."?>
					</p>
				</a>
			</article>
			<?php 
		            endwhile;
		        endif;
			 ?>
			
		<div id="see-all">
			<a href="entradas.php">Ver todas las entradas</a>
		</div>

		</div><!--Fin principal-->
		
<?php require_once 'includes/footer.php'; ?>	

