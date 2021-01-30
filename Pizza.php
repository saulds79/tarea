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
	
	<style>
    html {
      font-family: sans-serif;
    }

	table {
	border-collapse: collapse;
	border: 2px solid rgb(200,200,200);
	letter-spacing: 1px;
	font-size: 0.8rem;
  }

  td, th {
	border: 1px solid rgb(190,190,190);
	padding: 10px 20px;
  }

  td {
	text-align: center;
  }
    caption {
      padding: 10px;
    }
    </style>


<center>
	<br><h1>Pizza</h1></br>
</center>
    <table style="margin: 0 auto;">
      <colgroup>
        <col span="2">
        <col style="background-color:#97DB9A;">
        <col style="width:42px;">
        <col style="background-color:#97DB9A;">
        <col style="background-color:#DCC48E; border:4px solid #C1437A;">
        <col span="2" style="width:42px;">
      </colgroup>
  
      <tr>
        <td>Clasica</td>
        <td>Suprema</td>
        <td>Pepperoni</td>
        <td>Hawaiana</td>
        <td>Americana</td>
      </tr>
      <tr>
		<td><img src="img/Clasica.jpg" WIDTH=178 HEIGHT=180></td>
		<td><img src="img/Suprema.jpg" WIDTH=178 HEIGHT=180></td>
		<td><img src="img/Pepperoni.jpg" WIDTH=178 HEIGHT=180></td>
		<td><img src="img/Hawaiana.jpg" WIDTH=178 HEIGHT=180></td>
    <td><img src="img/Americana.jpg" WIDTH=178 HEIGHT=180></td>
  </tr>
	  <tr> 
        <td>Mozzarella</td>
        <td>Meat Lovers</td>
        <td>Continental</td>
        <td>Vegetariana</td>
        <td>Chicken BBQ</td>
      </tr>
      <tr>
		
		<td><img src="img/Mozzarella.jpg" WIDTH=178 HEIGHT=180></td>
		<td><img src="img/MeatLovers.jpg" WIDTH=178 HEIGHT=180></td>
    <td><img src="img/Continental.jpg" WIDTH=178 HEIGHT=180></td>
    <td><img src="img/Vegetariana.jpg" WIDTH=178 HEIGHT=180></td>
    <td><img src="img/ChickenBBQ.jpg" WIDTH=178 HEIGHT=180></td>
    
    </tr>
    </table>
</body>
</html>