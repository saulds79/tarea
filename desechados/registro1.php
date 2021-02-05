<?php
	//conexion con la base de datos y el servidor
	//$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	//$db = comidarapida("formulario",$link) or die("<h2>Error de Conexion</h2>");
    $hn = 'localhost';
    $db = 'diariopersonal';
    $un = 'root';
    $pw = '';
    $port = 3306;
	//obtenemos los valores del formulario
	$nombres = $_POST['nombreuser'];
	$apellidos = $_POST['apellidosuser'];
	$telefono = $_POST['telefonouser'];
	$direccion = $_POST['direccionuser'];

	$email = $_POST['emailuser'];
	$pass = $_POST['pass'];
	

	//Obtiene la longitus de un string
	$req = (strlen($nombres)*strlen($apellidos)*strlen($telefono)*strlen($direccion)*strlen($email)*strlen($pass)) or die("No se han llenado todos los campos");


	//se encripta la contraseña
	$contraseñaUser = md5($pass);

	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO datos VALUES('','$nombres','$apellidos','$telefono','$direccion','$email','$contraseñaUser')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="Registro.php";
		</script>
	'


?>