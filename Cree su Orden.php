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
 

<form action="formpost.php" method="post">
<br>
<p>Fecha: <input type="date" name="fecha">    
<br/>
<br><label for="so1">HAMBURGUESAS</label> <br/>
<br>
<select name="HAMBURGUESAS">
<option selected>Big Mac</option>
<option>Cuarto De Libra Con Queso</option>
<option>Double Cheeseburger</option>
<option>Cheeseburger</option>
<option>Quarter Pounder with Cheese Bacon</option>
<option>McDouble</option>
<option>La Kiwi Burger</option>
<option>La Mcarabia</option>
<option>Ninguna</option>
</select>
</br>



<br><label for="so2">PIZZA</label> <br/>
<br>
<select name="PIZZA">
<option selected>Clasica</option>
  <option>Suprema</option>
  <option>Pepperoni</option>
  <option>Hawaiana</option>
  <option>Americana</option>
  <option>Mozzarella</option>
  <option>Meat Lovers</option>
  <option>Continental</option>
  <option>Vegetariana</option>
  <option>Chicken BBQ</option>
  <option>Ninguna</option>
</select>
</br>




<br><label for="so3">POSTRES</label><br/>
<br>
<select name="POSTRES">
<option selected>Sundae De Manjar Blanco</option>
<option>MCflurry Oreo</option>
<option>Tarta de Freza</option>
<option>Torta de Selva Negra</option>
<option>Volcan de Limon</option>
<option>Helado de Vainilla</option>
<option>Ensalada de Frutas</option>
<option>Hot Caramel Sundae</option>
<option>Ninguna</option>
</select>
</br>

<br><label for="so4">BEBIDAS</label><br/>
<br>
<select name="BEBIDAS">
<option selected>Caramel Frappe</option>
<option>Cafe</option>
<option>Cappuccino</option>
<option>Mocha</option>
<option>Caramel</option>
<option>Mango Piña</option>
<option>Iced Caramel Macchiato</option>
<option>Strawberry Banana</option>
<option>Ninguna</option>
</select>
</br>
<br>
<input type="submit" value="Ordenar"></p>
</br></form>
</center>


</body>
</html>