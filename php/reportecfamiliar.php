<?php
	require "../include/conexion.php";
    include("../include/javaestilo.php"); 
	?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Reporte Consulta Familiar</title>
</head>
<link rel="stylesheet" href="../css/estiloform.css">
<link rel="stylesheet" href="../js/jquery-ui-1.12.1.custom/jquery-ui.css" />
<script language="javascript" src="../js/jquery-3.2.1.min.js"></script>
<script language="javascript" src="../js/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>

<body>
    <div align="center">
        <table width="813">
            <div align="center">
                <tr>
                    <td><img src="../imagenes/cintillocemento.png" width="1000" height="44" alt="" /></td>
                </tr>
                <tr>
                    <td><?php include('../include/menu.php');?></td>
                </tr>
            </div>
        </table>
        <form action="reportecfamiliar.php" method="post" name="form" id="formeda">

            <table class="tabla">
                <tr>
                    <td align="center"><strong>Buscar</strong></td>
                    <td></td>
                    <td> <input class="textbox" size="11" placeholder="DESDE..." name="fechad" id="fechad" value="">
                    </td>
                    <td><input class="textbox" size="11" placeholder="HASTA..." name="fechah" id="fechah" value=""></td>
                    <td><button type="submit" name="filtrar" id="filtrar" title="Filtrar" value="filtrar"><img
                                src="../imagenes/bucar.png" width="30" height="30" id="filtrar" /></button></td>
                </tr>

            </table>
            <table>
                <tr>
                    <td><a href="reportecfamiliar.php" class="ui-button" title="Mostrar Todo">Mostrar Todo</a></td>
                    <td><a href="formexcelrcf.php" class="ui-button" title="Generar Archivo Excel">Generar Reportes</a>
                    </td>
                </tr>
            </table>
        </form>
        <table width="98%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td class="tabla"><strong>Reporte Consultas Familiares</strong></td>
            </tr>
        </table>
        <table width='98%' class='textbox' border='0' cellspacing='0' cellpadding='0'>

            <tr class='textbox'>
                <td><strong>F.Consulta </strong></td>
                <td align='center'><strong>Nºficha </strong></td>
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
	$desd=$_POST["fechad"];
	$desde = implode( '-', array_reverse( explode( '-', $desd ) ) ) ;
	$hast=$_POST["fechah"];
	$hasta = implode( '-', array_reverse( explode( '-', $hast ) ) ) ;
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
			echo "<td align='center'><textarea class='tablarepor' readonly>".$row["diagnostico"]."</textarea></td>";
			echo "<td align='center'><textarea class='tablarepor' readonly>".$row["observacion"]."</textarea></td>";
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
				 
	echo '<td align="center">
		<a href="formmodificar.php?si&codigomodi='.$row["id_registros_familiar"].'" ><img src="../imagenes/editar.png" width="25" height="20" border="0"></a></td>';

	echo "<td><center><a href='eliminacfamiliar.php?eliminar=si&codigo=".$row["id_registros_familiar"]."'><img src='../imagenes/borrar.png' width='25' height='20' border='0'></a></center></td></tr>";
			}			
			}
			echo "</table>";
	   }else{
       $sql="SELECT * FROM registro_familiar "; 
		 			
			$rs=mysqli_query($mysqli, $sql);
			if(mysqli_num_rows($rs)<1){
			echo "</table>";
			echo "<table width='98%' class='textbox' border='0' cellspacing='0' cellpadding='0'>";	
			echo "<tr class='textbox'><td><center><strong>No hay Consultas Registradas<strong></center></td></tr>";
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
			echo "<td align='center'><textarea class='tablarepor' readonly>".$row["diagnostico"]."</textarea></td>";
			echo "<td align='center'><textarea class='tablarepor' readonly>".$row["observacion"]."</textarea></td>";
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
				 
	echo '<td align="center">
		<a href="formmodificar.php?si&codigomodi='.$row["id_registros_familiar"].'" ><img src="../imagenes/editar.png" width="25" height="20" border="0"></a></td>';

	echo "<td><center><a href='eliminacfamiliar.php?eliminar=si&codigo=".$row["id_registros_familiar"]."'><img src='../imagenes/borrar.png' width='25' height='20' border='0'></a></center></td></tr>";
			
			}			
			}
			echo "</table>";
	}?>
            <footer>
                <div class="contenedor">
                    <p class="copy">
                        <strong>
                            <p><em>Cemento Andino S.A <br>Gerencia de Tecnologia &copy; 2017<br>DESARROLLADO
                                    POR:<br>David Santiago
                                </em></p>
                        </strong>
                    </p>
                </div>
            </footer>
</body>

</html>