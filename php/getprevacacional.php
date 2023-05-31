<?php
include("../include/conexion.php");
	$Nombre=$_POST["Nombre"];
	// $Apellido=$_POST["Apellido"];
	$FechaSalida=$_POST["FechaSalida"];
	$FechaReintegro=$_POST["FechaReintegro"];
	$Ficha=$_POST["Ficha"];
	$Cedula=$_POST["Cedula"];
	$cita_pre=$_POST["cita_pre"];
	$cita_post=$_POST["cita_post"];

if($_POST["Function"] == "1")
{
	$qr="UPDATE pre_vacacional SET  nombre='$Nombre', fecha_salida='$FechaSalida', 	fecha_reintegro='$FechaReintegro', numerof='$Ficha', cita_pre='$cita_pre', cita_post='$cita_post'   where  cedula='$Cedula'";
}
else
{
	$qr="INSERT INTO pre_vacacional VALUES ('', '$Ficha', '$Cedula', '$Nombre', '$FechaSalida', '$FechaReintegro', '$cita_pre', '$cita_post')";
}


$qry=mysqli_query($mysqli,$qr) or die ("error en consulta:".mysqli_error($cx));
echo $qry;
?>