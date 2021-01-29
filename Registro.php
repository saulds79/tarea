<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menu</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<header>
		<nav class="navegacion">
			<ul class="menu">
				<li><a href="Registro.php">Registro</a></li>
				<li><a href="Nosotros.php">Nosotros</a></li>
                <li><a href="Hamburguesas.php">Hamburguesas</a></li>
				<li><a href="Pizza.php">Pizza</a></li>
                <li><a href="Postre.php">Postres</a></li>
                <li><a href="Bebidas.php">Bebidas</a></li>
                <li><a href="Combos.php">Combos</a></li>
				<li><a href="Cree su Orden.php">Cree su Orden</a></li>
			</ul>
		</nav>
    </header>
    
<center>
<form action="formpost.php" method="post">
    <br>
    Nombre: <input type="text" name="nombre">
    </br>
    <br>
    Apellidos: <input type="text" name="apellidos">
    </br>
    <br>
    DNI: <input type="text" name="dni">
    </br>
    <br>
    Telefono: <input type="text" name="telefono">
    </br>
    <br>
    Direccion: <input type="text" name="direccion">
    </br>
    <br>
    Email: <input type="text" name="email">
    </br>
    <br>
    <input type="submit" value="Enviar">
    </br>
</form>
</center>


</body>
</html>