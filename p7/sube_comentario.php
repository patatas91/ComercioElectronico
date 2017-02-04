<?php

$producto = htmlentities($_POST['producto']);
$comentario = htmlentities($_POST['comentario']);

// Si se han cambiado los parametros, se tendran que modificar aqui tb
$host = "localhost";
$user = "prueba";
$pass = "password";
$database = "prueba";

// Conectamos a la BD
$conexion = mysql_connect($host, $user, $pass, $database);
mysql_select_db("$database");

// Montamos la consulta
 $consultaSQL = "UPDATE productos SET ";
 $consultaSQL .= " comentario='$comentario'";
 $consultaSQL .= " where nombre ='$producto';";
 $resultado = mysql_query($consultaSQL);

// Recogemos los datos de nuevo
 $consultaSQL2 = "SELECT *";
 $consultaSQL2 .= " FROM productos";
 $consultaSQL2 .= " WHERE nombre ='$producto';";
 $resultado2 = mysql_query($consultaSQL2);
 $numFilas = mysql_num_rows($resultado2);

$nombre = mysql_result($resultado2, $i, 1);
$precio = mysql_result($resultado2, $i, 2);
$comentario = mysql_result($resultado2, $i, 3);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<br>
 


 El comentario se ha subido correctamente. Este es el aspecto de la entrada en la BD:

Nombre : <?php echo "   $nombre  "; ?>
<br><br>
Precio : <?php echo "   $precio  "; ?>
<br><br>
Comentario : <?php echo "   $comentario  "; ?>
<br><br>
<a href="comenta.htm">Volver a la página anterior </a>
<br><br>
</body>
</html>			
				 

 


