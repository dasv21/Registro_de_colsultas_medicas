<?php
//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	$mysqli = new mysqli("localhost","root","12345678","sistemacemento"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
function conectar()
{
$conexion = mysql_connect("localhost","root","12345678") or die("Error en Conexion");
mysql_select_db("sistemacemento",$conexion) or die("Error con la base de datos");
return $conexion;
}
?>