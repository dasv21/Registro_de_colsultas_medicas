<?php
$d=$_POST["fechad"];
	$desd=$_POST["fechad"];
	$desde = implode( '-', array_reverse( explode( '-', $desd ) ) ) ;
	$hast=$_POST["fechah"];
	$hasta = implode( '-', array_reverse( explode( '-', $hast ) ) ) ;
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=consultas'".$desd."'hasta'".$hast."'.xls");
?>
<html>
<head>
<title>Reporte Excel</title>
</head>
<body>
<table width='98%' border='0' cellspacing='0' cellpadding='0'>
<tr>

<td align='center'><strong>F Consulta </strong></td>
<td align='center'><strong>ficha </strong></td>
<td align='center'><strong>Nombre </strong></td>
<td align='center'><strong>Apellido </strong></td>
<td align='center'><strong>Edad </strong></td>
<td align='center'><strong>Cedula </strong></td>
<td align='center'><strong>F.Nacimiento </strong></td>
<td align='center'><strong>Parentesco </strong></td>
<td align='center'><strong>Sexo</strong> </td>
<td align='center'><strong>Diagnostico </strong></td>
<td align='center'><strong>Observacion </strong></td>
<td align='center'><strong>T.Consulta </strong></td>
<td align='center'><strong>Patologia </strong></td>
<td align='center'><strong>Tipo Patologia </strong></td>
</tr>
<?php	
require "../include/conexion.php";
   	
	if(isset($_POST["filtrar"])){
    $boton=$_POST["filtrar"];}
if($boton=="filtrar"){
	
	$sql="SELECT * FROM registro_familiar WHERE fechacon BETWEEN '".$desde."' AND '".$hasta."' ORDER BY fechacon ASC";
	
	$rs=mysqli_query($mysqli, $sql);
			if(mysqli_num_rows($rs)<1){
			echo "</table>";
			echo "<table width='98%' class='textbox' border='0' cellspacing='0' cellpadding='0'>";	
			echo "<tr class='textbox'><td><center><strong>No hay Consultas Registradas en las Fechas Indicadas<strong></center></td></tr>";
			echo "</table>";
			}else{
			while ($row = mysqli_fetch_array($rs)){
			$fechacon=$row["fechacon"];
			$Fechaconmysql = implode( '-', array_reverse( explode( '-', $fechacon ) ) ) ;		
			echo "<tr class='textbox1'>"; 
			echo "<td align='center'>".$Fechaconmysql."</td>";
			echo "<td align='center'>".$row["numerof"]."</td>";	
			echo "<td align='center'>".$row["nombref"]."</td>";
			echo "<td align='center'>".$row["apellidof"]."</td>";			
			echo "<td align='center'>".$row["edadf"]."</td>";
			echo "<td align='center'>".$row["cedulaf"]."</td>";
			echo "<td align='center'>".$row["fechan"]."</td>";
			echo "<td align='center'>".$row["parentesco"]."</td>";
			echo "<td align='center'>".$row["sexof"]."</td>";
			echo "<td align='center'>".$row["diagnostico"]."</td>";
			echo "<td align='center'>".$row["observacion"]."</td>";
			$patologia=$row["patologia"];
			$querypp = "SELECT * FROM patologia WHERE id_patologia = '$patologia'";
            $resultadopp = $mysqli->query($querypp);
            while($rowpp = $resultadopp->fetch_assoc())
			{
				$patologiapp= $rowpp['nombre_patologia'];
			}		 
			echo "<td align='center'>".$row["tconsulta"]."</td>";
			echo "<td align='center'>".$patologiapp."</td>";
			$tpatologia=$row["tpatologia"];
			$querytp = "SELECT * FROM tipo_patologia WHERE id_tipo_patologia = '$tpatologia'";
			$resultadotp = $mysqli->query($querytp);
			while($rowtp = $resultadotp->fetch_assoc())
			{
				$patologiatp= $rowtp['nombre'];
			}	
 
			echo "<td align='center'>".$patologiatp."</td>";
	 
	
			}			
			}
			echo "</table>";
	   
			 }?>
	</body>
</html>