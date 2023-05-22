<!--BARRA LATERAL-->
		<aside id="sidebar">

			<div id="buscador" class="block-side">
				<h3>Buscar</h3>
				<form action="buscar.php" method="POST">
					<input type="text" name="busqueda" />
					<input type="submit" value="Buscar">
				</form>
			</div>

			<?php if(isset($_SESSION['usuario'])): ?>
				<div id="usuario-logueado" class="block-side">
					<h3>Bienvenido, <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']?></h3>
					<!--botones-->
					<a href="crear-entrada.php" class="boton boton-green">Crear entradas</a>
					<a href="crear-categoria.php" class="boton">Crear categoria</a>
					<a href="mis-datos.php" class="boton boton-orange">Mis datos</a>
					<a href="action/cerrar.php" class="boton boton-red">Cerrar sesión</a>
				</div>
			<?php endif; ?>
			<?php if (!isset($_SESSION['usuario'])): ?>
				<div id="login" class="block-side">
				<h3>Identificate</h3>
				<?php if (isset($_SESSION['error_login'])): ?>
					<div class="warning warning-error">
						<?=$_SESSION['error_login'] ?>
					</div>
				<?php endif; ?>
				<form action="action/login.php" method="POST">
					<label for="email">Email</label>
					<input type="email" name="email" />
					<label for="password">Contraseña</label>
					<input type="password" name="password" />
					<input type="submit" value="Entrar">
				</form>
			</div>
		
			<div id="register" class="block-side">
				<h3>Registrate</h3>

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
				<form action="action/registro.php" method="POST">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" />
					<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'nombre'):''; ?>
					<label for="apellidos">Apellidos</label>
					<input type="text" name="apellidos" />
					<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'apellidos'):''; ?>
					<label for="email">Email</label>
					<input type="email" name="email" />
					<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'email'):''; ?>
					<label for="password">Contraseña</label>
					<input type="password" name="password" />
					<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'password'):''; ?>
					<input type="submit" name="submit" value="Registrar">
				</form>
				<?php borrarErrores(); ?>
			</div>
		    <?php endif;  ?>
		</aside>