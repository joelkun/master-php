<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario PHP y HTML</title>
</head>
<body>
	<h1>Formulario</h1>
	<form method="POST" action="" enctype="multipart/from-data">
        <label for="nombre">Nombre:</label>
        <p><input type="text" name="nombre" /></p>
		<label for="apellido">Apellido:</label>
		<p><input type="text" name="apellido" maxlength="100" pattern="[A-Z]+" required="required" placeholder="Escribe el apellido" /></p>
		 <label for="boton">Botón:</label>
        <p><input type="button" name="boton" value="Click" /></p>
         <label for="sexo">Sexo:</label>
           <p><input type="checkbox" name="sexo" value="hombre" /></p>
           <p><input type="checkbox" name="sexo" value="mujer"/></p>
         <label for="color">Color:</label>
        <p><input type="color" name="color" /></p>
         <label for="fecha">Fecha:</label>
        <p><input type="date" name="fecha" /></p>
         <label for="correo">Email:</label>
        <p><input type="email" name="correo" /></p>
         <label for="archivo">Archivo:</label>
        <p><input type="file" name="archivo" multiple="multiple"/></p>
         <label for="numero">Numero:</label>
        <p><input type="number" name="numero" /></p>
         <label for="pass">Contraseña:</label>
        <p><input type="password" name="pass" /></p>
         <label for="continente">Continente:</label>
        <p>Sudamerica<input type="radio" name="continente" value="Sudamerica"/>
           Europa<input type="radio" name="continente" value="Europa"/>
           Asia<input type="radio" name="continente" value="Asia"/></p>
        <label for="web">Pagina web:</label>
        <p><input type="urk" name="web" /></p>

        <textarea name="" id="" cols="30" rows="10"></textarea><br/>
        Peliculas:<select name="peliculas" id="">
        	<option value="1">Spiderman</option>
        	<option value="2">Batman</option>
        	<option value="3">La jungla de cristal</option>
        	<option value="4">Gran torino</option>
        </select>
        <br/>








		<input type="submit" value="Enviar">
	</form>
</body>
</html>