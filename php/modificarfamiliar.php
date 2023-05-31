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
require "../include/conexion.php";

			$id_registros_familiar=$_POST["id_registros_familiar"];
	        $fechacon=$_POST["fecham"];
			$tconsulta=$_POST["tconsulta"];
			$diagnostico=$_POST["diagnostico"];
			$observacion=$_POST["observacion"];
			$edadf=$_POST["edadf"];
			$patologia=$_POST["patologia"];
	        $tpatologia=$_POST["tipo_patologia"];			
	
			$queryUpdate = "update registro_familiar set fechacon = '".$fechacon."', tconsulta = '".$tconsulta."', diagnostico = '".$diagnostico."', observacion = '".$observacion."', edadf = '".$edadf."', patologia = '".$patologia."', tpatologia = '".$tpatologia."' where id_registros_familiar = ".$id_registros_familiar;

			$update =mysqli_query($mysqli, $queryUpdate);
			if($update){?>

            <script language="javascript">
            alert("La Consulta a sido Modificada con Exito");
            window.location.href = 'reportecfamiliar.php';
            </script>

            <?php
			}else{?>
            <script language="javascript">
            alert("Error al Modificar los Datos");
            history.back();
            </script>

            <?php
				}