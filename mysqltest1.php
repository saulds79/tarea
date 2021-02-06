<!DOCTYPE html>
<html>
<link rel="stylesheet" href="estilos.css">
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
        

        <nav class="navegacion1">
        <ul class="menu1" ><li><a href="mysqltest.php"><center>Regresar a el registro del menu</center></a></li></ul>
        </nav>


	</header>
<center>
<form action="Cree su Orden.php" method="post">
<br>
<p>Fecha: <input type="date" name="fecha">    
<br/>

<br><label for="so1">HAMBURGUESAS</label> <br/>
<br>
<select name="HAMBURGUESAS">
<option value="Big Mac" selected>Big Mac</option>
<option value="Cuarto De Libra Con Queso">Cuarto De Libra Con Queso</option>
<option value="Double Cheeseburger">Double Cheeseburger</option>
<option value="Cheeseburger">Cheeseburger</option>
<option value="Quarter Pounder with Cheese Bacon">Quarter Pounder with Cheese Bacon</option>
<option value="McDouble">McDouble</option>
<option value="La Kiwi Burger">La Kiwi Burger</option>
<option value="La Mcarabia">La Mcarabia</option>
<option value="nada">Ninguna</option>
</select>
</br>





<br><label for="so2">PIZZA</label> <br/>
<br>
<select name="PIZZA">
<option value="Clasica" selected>Clasica</option>
  <option value="Suprema">Suprema</option>
  <option value="Pepperoni">Pepperoni</option>
  <option value="Hawaiana">Hawaiana</option>
  <option value="Americana">Americana</option>
  <option value="Mozzarella">Mozzarella</option>
  <option value="Meat Lovers">Meat Lovers</option>
  <option value="Continental">Continental</option>
  <option value="Vegetariana">Vegetariana</option>
  <option value="Chicken BBQ"></option>
  <option value="nada">Ninguna</option>
</select>
</br>




<br><label for="so3">POSTRES</label><br/>
<br>
<select name="POSTRES">
<option value="Sundae De Manjar Blanco" selected>Sundae De Manjar Blanco</option>
<option value="MCflurry Oreo">MCflurry Oreo</option>
<option value="Tarta de Freza">Tarta de Freza</option>
<option value="Torta de Selva Negra">Torta de Selva Negra</option>
<option value="Volcan de Limon">Volcan de Limon</option>
<option value="Helado de Vainilla">Helado de Vainilla</option>
<option value="Ensalada de Frutas">Ensalada de Frutas</option>
<option value="Hot Caramel Sundae">Hot Caramel Sundae</option>
<option value="nada">Ninguna</option>
</select>
</br>

<br><label for="so4">BEBIDAS</label><br/>
<br>
<select name="BEBIDAS">
<option value="Caramel Frappe" selected>Caramel Frappe</option>
<option value="Cafe">Cafe</option>
<option value="Cappuccino">Cappuccino</option>
<option value="Mocha">Mocha</option>
<option value="Caramel">Caramel</option>
<option value="Mango Piña">Mango Piña</option>
<option value="Iced Caramel Macchiato">Iced Caramel Macchiato</option>
<option value="Strawberry Banana">Strawberry Banana</option>
<option value="nada">Ninguna</option>
</select>
</br>
<br>
<input type="submit" value="Ordenar"></p>
</br></form>


<?php 
    require_once 'cargar.php';
    $conexion = new mysqli($hn, $un, $pw, $db);

    if ($conexion->connect_error) die ("Fatal error");

    if (isset($_POST['delete']) && isset($_POST['fecha']))
    {   
        $fecha = get_post($conexion, 'fecha');
        $query = "DELETE FROM registro WHERE fecha='$fecha'";
        $result = $conexion->query($query);
        if (!$result) echo "BORRAR falló"; 
    }

    if (isset($_POST['fecha']) &&
        isset($_POST['HAMBURGUESAS']) &&
        isset($_POST['PIZZA']) &&
        isset($_POST['POSTRES']) &&
        isset($_POST['BEBIDAS']) )
    {
        $fecha = get_post($conexion, 'fecha');
        $HAMBURGUESAS = get_post($conexion, 'HAMBURGUESAS');
        $PIZZA = get_post($conexion, 'PIZZA');
        $POSTRES = get_post($conexion, 'POSTRES');
        $BEBIDAS = get_post($conexion, 'BEBIDAS');
        $query = "INSERT INTO registro VALUE" .
            "('$fecha','$HAMBURGUESAS' ,'$PIZZA','$POSTRES','$BEBIDAS')";
        $result = $conexion->query($query);
        if (!$result) echo "INSERT falló <br><br>";
    }

    //echo <<<_END

    //<input type="submit" value="Ordenar">
    //</pre></form>
    //_END;

    $query = "SELECT * FROM registro";
    $result = $conexion->query($query);
    if (!$result) die ("Falló el acceso a la base de datos");

    $rows = $result->num_rows;

    for ($j = 0; $j < $rows; $j++)
    {
        $row = $result->fetch_array(MYSQLI_NUM);

        $r0 = htmlspecialchars($row[0]);
        $r1 = htmlspecialchars($row[1]);
        $r2 = htmlspecialchars($row[2]);
        $r3 = htmlspecialchars($row[3]);
        $r4 = htmlspecialchars($row[4]);

        echo <<<_END

        <pre>
        FECHA: $r0
        HAMBURGUESAS: $r1
        PIZZA: $r2  
        POSTRES: $r3
        BEBIDAS: $r4  
        
        </pre>
        
    
        <form action='mysqltest.php' method='post'>
        <input type='hidden' name='delete' value='yes'>
        <input type='hidden' name='fecha' value='$r0'>
        <input type='submit' value='BORRAR REGISTRO'></form>
        _END;
    }

    $result->close();
    $conexion->close();

    function get_post($con, $var)
    {
        return $con->real_escape_string($_POST[$var]);
    }
?>
</center>

</body>
</html>