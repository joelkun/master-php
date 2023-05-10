<?php 
$error='ok';

if(!empty($_POST['nombre'])) && (!empty($_POST['apellido'])) && (!empty($_POST['edad'])) && (!empty($_POST['email'])) && (!empty($_POST['pass'])){
   $error=false;
   $nombre=$_POST['nombre'];
   $apellido=$_POST['apellido'];
   $edad=(int)$_POST['edad'];
   $email=$_POST['email'];
   $pass=$_POST['pass'];

   //validar el nombre
   if(!is_string($nombre) || preg_match("/[0-9]+/", $nombre)){
   	$error='nombre';

   }

   //valida el apellido
    if(!is_string($apellido) || preg_match("/[0-9]+/", $apellido)){
   	$error='apellido';

   }

   //valida la edad
    if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
   	$error='edad';

   }

   //Valida el email
    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
   	$error='email';

   	//Valida pass
   	 if(empty($pass) || strlen($pass)<5){
   	$error='pass';




} else{
   $error='Faltan datos';
   header("Location:index.php?error=$error");
}


if($error != 'ok'){
	header("Location:index.php?error=$error");
}




?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validacion de formularios PHP</title>
</head>
<body>
	<?php if($error=='ok'): ?>
		<h1>Datos validados correctamente</h1>
		<p><?=$nombre?></p>
		<p><?=$apellido?></p>
		<p><?=$edad?></p>
		<p><?=$email?></p>
		<p><?=$pass?></p>
    <?php  endif; ?>

	 ?>
</body>
</html>