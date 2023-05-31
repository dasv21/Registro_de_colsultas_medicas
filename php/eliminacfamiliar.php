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
            <?php 
	require("../include/conexion.php");
	
	if(isset($_GET["eliminar"])){
$cocco=$_GET["codigo"];		
?>
            <script>
            confirmar = confirm("¿Esta seguro de elimiar el registro?");
            if (confirmar) {
                location.href = "eliminacfamiliar.php?confirmacion=si&codigoelimina=<?php echo $cocco  ?>";
            } else {
                location.href = "reportecfamiliar.php";
            }
            </script>
            <?php
	}
	if(isset($_GET["confirmacion"])){
		$codeli=($_GET["codigoelimina"]);
		$queryDelete = "DELETE FROM registro_familiar WHERE id_registros_familiar = $codeli"  ; 
			$delete =mysqli_query($mysqli,$queryDelete);
		    mysqli_query($mysqli,"ALTER TABLE registro_familiar DROP id_registros_familiar");
            mysqli_query($mysqli,"ALTER TABLE registro_familiar AUTO_INCREMENT = 1");
            mysqli_query($mysqli,"ALTER TABLE registro_familiar ADD id_registros_familiar bigint UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");			if($delete){						
				echo "<script>
						alert('Eliminacion exitosa');
						location.href='reportecfamiliar.php';
				</script>";				
			}else{
				echo "<script>
						alert('Error Al Eliminar');
						location.href='reportecfamiliar.php';
				</script>";	
				}
	}	
?>