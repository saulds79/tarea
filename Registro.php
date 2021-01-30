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
				<li><a href="Nosotros.php">Nosotros</a></li>
                <li><a href="Hamburguesas.php">Hamburguesas</a></li>
				<li><a href="Pizza.php">Pizza</a></li>
                <li><a href="Postre.php">Postres</a></li>
                <li><a href="Bebidas.php">Bebidas</a></li>
				<li><a href="Cree su Orden.php">Cree su Orden</a></li>
			</ul>
		</nav>
    </header>
    
<center>




<div id="content">
		<h1>Registro de Usuarios</h1>
		<form action="Registro.php" method="POST">
	        <table border="1">
		        <tr>
		            <td><label>Nombres</label></td>
		            <td><input type="text" name="nombreuser" placeholder="Nombres" required/></td>
		        </tr>
		        <tr>
		            <td><label>Apellidos</label></td>
		            <td><input type="text" name="apellidosuser" placeholder="Apellidos" required/></td>
                </tr>
                <tr>
		            <td><label>Telefono</label></td>
		            <td><input type="text" name="telefono"></td>
                </tr>
                <tr>
		            <td><label>Direccion</label></td>
		            <td><input type="text" name="direccion"></td>
		        </tr>
		        <tr>
		            <td><label>Correo electronico</label></td>
		            <td><input type="text" name="emailuser" required/></td>
		        </tr>
		        <tr>
		            <td><label>Contrase&ntilde;a</label></td>
		            <td><input type="password" name="pass" placeholder="**********************" required/></td>
		        </tr>
		       
		        <tr>
		            <td><label><input type="submit" value="Registrarme"></input></label></td>
		            <td><label><input type="reset" value="Reestablecer"></input></label></td>
		        </tr>
		</form>
    </div>
    
</center>

</body>
</html>