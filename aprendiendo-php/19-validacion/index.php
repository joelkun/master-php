<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validaciones</title>
</head>
<body>
	<h1>Validar formularios en PHP</h1>
	<?php if(isset($_GET['error'])){
		$error=$_GET['error'];
		if($error=='Faltan datos'){
			echo '<strong style="color:red">Introduce todos los datos en todos los campos del formulario</strong>';
		}
		if($error=='nombre'){
			echo '<strong style="color:red">Introduce bien el nombre</strong>';
		}
        if($error=='apellido'){
			echo '<strong style="color:red">Los apellidos no son correctos</strong>';
		}
		if($error=='edad'){
			echo '<strong style="color:red">Introduce una edad correcta</strong>';
		}
		if($error=='email'){
			echo '<strong style="color:red">El correo es erroneo</strong>';
		}
		if($error=='pass'){
			echo '<strong style="color:red">Introduce una contraseña de màs de 5 caracteres</strong>';
		}


		}
	 ?>

	<form method="POST" action="procesar_formulario.php">
		<label for="nombre">Nombre:</label><br/>
		<input type="text" name="nombre" required="required" pattern="[A-Za-z]+"><br/>

		<label for="apellido">ApelldioNombre:</label><br/>
		<input type="text" name="apellido" required="required" pattern="[A-Za-z]+"><br/>

		<label for="edad">Edad:</label><br/>
		<input type="number" name="edad" required="required" pattern="[0-9]+"><br/>

		<label for="email">Correo:</label><br/>
		<input type="email" name="email" required="required"><br/>

		<label for="pass">Contraseña:</label><br/>
		<input type="pass" name="pass" required="required" minlength="5"><br/>

		<input type="submit" name="Enviar" value="Enviar">


	</form>
	
</body>
</html>