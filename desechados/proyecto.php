<!DOCTYPE html>
<html>
<link rel="stylesheet" href="estilos.css">  
<body>

<center>

<?php 
    require_once 'cargar.php';
    $conexion = new mysqli($hn, $un, $pw, $db, $port);

    if ($conexion->connect_error) die ("Fatal error");
    if (isset($_POST['delete']) && isset($_POST['fecha']))
    {   
        $fecha = get_post($conexion, 'fecha');
        $query = "DELETE FROM registro WHERE fecha='$fecha'";
        $result = $conexion->query($query);
        if (!$result) echo "BORRAR falló"; 
    }
  
    if (isset($_POST['fecha']) &&
        isset($_POST['hamburguesas']) &&
        isset($_POST['pizza']) &&
        isset($_POST['postres']) &&
        isset($_POST['bebidas']) )
    {
        $fecha  = get_post($conexion, 'fecha');
        $hamburguesas = get_post($conexion, 'hamburguesas');
        $pizza = get_post($conexion, 'pizza');
        $postres = get_post($conexion, 'postres');
        $bebidas = get_post($conexion, 'bebidas');
        $query = "INSERT INTO registro VALUE" .
            "('$fecha','$hamburguesas', '$pizza', '$postres' , '$bebidas')";
        $result = $conexion->query($query);
        if (!$result) echo "INSERT falló <br><br>";
    }

    echo <<<_END
    <form action="mysqltest.php" method="post"><pre>
     <br> FECHA <input type="date" name= "fecha"> </br>  
     <br> HAMBURGUESAS <input type="text" name="hamburguesas"> </br>
     <br> PIZZA <input type="text" name="pizza"> </br> 
     <br> POSTRES <input type="text" name="postres"> </br>
     <br> BEBIDAS <input type="text" name="bebidas"> </br>
        
    <input type="submit" value="ESCRIBIR">
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