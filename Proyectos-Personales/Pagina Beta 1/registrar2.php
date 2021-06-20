<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Registro de Usuario</title>	
	
</head>	

<body>
<?php

$ci=$_POST["ci"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"]; 
$numero=$_POST["numero"];
$usuario=$_POST["usuario"];
$clave=$_POST["clave"]; 

  
// Rutina para meter los datos en la base de datos
	
	$con = mysql_connect("localhost","root","");
    if ($con)
    {   if (!mysql_select_db("quimica"))
           die ("Error en la selección de la Base de Datos");
    }
   
   $sql = "select * from quimica.usuario where ci = ".$ci."" ;
   if ($res = mysql_query($sql))
		if (!$fila = mysql_fetch_array($res))
		{ 
		$sql2 = "insert into quimica.usuario values('".$ci."','".$nombre."','".$apellido."','".$numero."','".$usuario."','".$clave."')";
                echo $sql2; //Muestra los datos enviados a la bd
				if (mysql_query($sql2))
				echo "<h3><center>Ingresó con éxito</center><BR></h3><br><br>";
		}else
			echo ("<center>YA EXISTE<br><BR></center>");
	?>
</BODY>
</HTML>