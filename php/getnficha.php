<?php
	require ('../include/conexion.php');
	
	$numerof = $_POST['numerof'];
	
	$queryn = "SELECT * FROM cargafamiliar WHERE numerof = '$numerof' ORDER BY nombrec ASC";
	$resultadon = $mysqli->query($queryn);
	
	$htmln= "<option value=''>Seleccionar</option>";
	
	while($rown = $resultadon->fetch_assoc())
	{
		$htmln.= "<option value='".$rown['cantidad']."'>".$rown['nombrec']."</option>";
	}
	
	echo $htmln;
?>