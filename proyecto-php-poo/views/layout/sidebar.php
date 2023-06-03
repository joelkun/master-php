<!-- SIDERBAR -->
<aside id="lateral">
	<div id="carrito" class="block_aside">
		<h3>Mi carrito</h3>
		<ul>
			<?php $stats = Utils::statsCarrito(); ?>
			<li><a href="<?=base_url?>carrito/index">
				 <img src="<?=base_url?>assets/icon/caja.png" class="icon"/>
				Productos(<?=$stats['count']?>)</a></li>
			<li><a href="<?=base_url?>carrito/index">
				<img src="<?=base_url?>assets/icon/dolar.png" class="icon"/>
				Total: $<?=$stats['total']?></a></li>
			<li><a href="<?=base_url?>carrito/index">
				<img src="<?=base_url?>assets/icon/carrito-de-compras.png" class="icon"/>
			Ver el carrito</a></li>
		</ul>
	</div>
	<div id="login" class="block_aside">
		<?php if(!isset($_SESSION['identity'])): ?>
			<h3>Entrar a la WEB</h3>
			<form action="<?=base_url?>usuario/login" method="post">
				<label for="email">Email</label>
				<input type="email" name="email" />
				<label for="password">Contraseña</label>
				<input type="password" name="password">
				<input type="submit" value="Enviar">
			</form>

		<?php else: ?>
			<h3><?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellido?></h3>

		<?php endif; ?>

		<ul>
		<?php if(isset($_SESSION['admin'])): ?>	
			<li><a href="<?=base_url?>categoria/index"> <img src="<?=base_url?>assets/icon/hamburguesa.png" class="icon"/>Gestionar categorias</a></li>
			<li><a href="<?=base_url?>producto/gestion"> <img src="<?=base_url?>assets/icon/hamburguesa.png" class="icon"/>Gestionar productos</a></li>
			<li><a href="<?=base_url?>pedido/gestion"> <img src="<?=base_url?>assets/icon/hamburguesa.png" class="icon"/>Gestionar pedidos</a></li>
		<?php endif; ?>

		<?php if(isset($_SESSION['identity'])): ?>
			<li><a href="<?=base_url?>pedido/mis_pedidos"><img src="<?=base_url?>assets/icon/hamburguesa.png" class="icon"/>Mis pedidos</a></li>
			<li><a href="<?=base_url?>usuario/logout"> <img src="<?=base_url?>assets/icon/cerrar-sesion.png" class="icon"/>Cerrar sesión</a></li>
		<?php else: ?>
			<li><a href="<?=base_url?>usuario/registro">
				<img src="<?=base_url?>assets/icon/usuario.png" class="icon"/>
			    Registrate aquí</a></li>
		<?php endif;  ?>

			</ul>
	</div>
			
</aside>
<!-- CONTENIDO CENTRAL -->
<div id="central">