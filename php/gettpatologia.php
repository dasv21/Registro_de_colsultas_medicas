<?php
	require ('../include/conexion.php');
	
	$id_patologia = $_POST['id_patologia'];
	
	$querytp = "SELECT id_tipo_patologia, nombre FROM tipo_patologia WHERE id_patologia = '$id_patologia' ORDER BY nombre ASC";
	$resultadotp = $mysqli->query($querytp);
	
	$html= "<option value=''>Seleccionar</option>";
	
	while($rowtp = $resultadotp->fetch_assoc())
	{
		$html.= "<option value='".$rowtp['id_tipo_patologia']."'>".$rowtp['nombre']."</option>";
	}
	
	echo $html;
?>