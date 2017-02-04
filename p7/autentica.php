<?php
 
$usuario = $_POST['login'];
$password = $_POST['password'];


// Si se han cambiado los parametros, se tendran que modificar aqui tb
$host = "localhost";
$user = "prueba";
$pass = "password";
$database = "prueba";

// Conectamos a la BD
$conexion = mysql_connect($host, $user, $pass, $database);
mysql_select_db("$database");

// Montamos la consulta
 $consultaSQL = "SELECT login";
 $consultaSQL .= " FROM usuarios";
 $consultaSQL .= " WHERE login ='".mysql_real_escape_string($usuario)."' AND password ='".mysql_real_escape_string($password)."';";
 $resultado_sesion = mysql_query($consultaSQL);
 $numFilas = mysql_num_rows($resultado_sesion);

// Si hay algun resultado que coincide, el login es correcto

			if ( $numFilas > 0 ) {
				$acceso = "OK!!";
			}
			
			else {
				$acceso = "BAD!!";
			}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<br>
El login tiene el status : <? echo $acceso ?>
<br> 
La consulta SQL ha sido <? echo $consultaSQL ?>
<br>
<a href="login.htm">Volver a la página anterior </a>

 

</body>
</html>
