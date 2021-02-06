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
        <ul class="menu1" ><li><a href="mysqltest1.php"><center>Ver el Diseño fallido</center></a></li></ul>
        </nav>


	</header>
<center>
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

    echo <<<_END
    <form action="mysqltest.php" method="post"><pre>
         
          
        <br>Fecha <input type="date" name="fecha"></br>
        <br>HAMBURGUESAS <input type="select" name= "HAMBURGUESAS"></br>
        <br>PIZZA <input type="select" name= "PIZZA"></br>
        <br>POSTRES <input type="select" name= "POSTRES"></br>
        <br>BEBIDAS <input type="select" name= "BEBIDAS"></br>


    <input type="submit" value="Ordenar">
    </pre></form>
    _END;

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



    function mysql_entities_fix_string($conexion, $string)
    {
        return htmlentities(mysql_fix_string($conexion, $string));
      }
    function mysql_fix_string($conexion, $string)
    {
        if (get_magic_quotes_gpc()) $string = stripslashes($string);
        return $conexion->real_escape_string($string);
      }  

?>
</center>

</body>
</html>