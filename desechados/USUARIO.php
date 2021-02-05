<link rel="stylesheet" href="estilos1.css">
<center>
<?php //logout.php
    session_start();

    if (isset($_SESSION['nombre']))
    {
        $nombre = $_SESSION['nombre'];
        $apellido = $_SESSION['apellido'];
        $telefono = $_SESSION['telefono'];
        $direccion = $_SESSION['direccion'];
        $email = $_SESSION['email'];

        destroy_session_and_data();

        echo "Sesión terminada <a href='signin.php'>Ingresar</a>.<br>";
    }
    else echo "Por favor <a href='signin.php'>Click aqui</a>
                para ingresar";

    function destroy_session_and_data()
    {
        //session_start();
        $_SESSION = array();
        setcookie(session_name(), '', time()-2592000, '/');
        session_destroy();
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