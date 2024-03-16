<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Reporte Consulta Familiar</title>
</head>
<link rel="stylesheet" href="../css/estiloform.css">

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
$nombrev=$_POST["nombref"];	
if(isset($_POST["Guardar"])){
$boton=$_POST["Guardar"];
if($boton=="Guardar" ){

include("../include/conexion.php");
include("../include/javaestilo.php");
//recibir los datos del form
$fechacon=$_POST["fechacon"];
$Fechaconmysql = implode( '-', array_reverse( explode( '-', $fechacon ) ) ) ;	
$numerof=$_POST["numerof"];
$nombref=$nombrev;
$apellidof=$_POST["apellidof"];
$cedulaf=$_POST["cedulaf"];
$parentesco=$_POST["parentesco"];
$fechan=$_POST["fechan"];
$edadf=$_POST["edadf"];
$tconsulta=$_POST["tconsulta"];
$diagnostico=$_POST["diagnostico"];
$observacion=$_POST["observacion"];
$patologia=$_POST['patologia'];
$tpatologia=$_POST["tipo_patologia"];
$sexof=$_POST["sexof"];
	
$intro="fechacon, numerof, nombref, apellidof, cedulaf, parentesco, fechan, edadf, tconsulta, diagnostico, observacion, patologia, tpatologia, sexof";
	
 $values="'".$Fechaconmysql."','".$numerof."','".$nombref."','".$apellidof."','".$cedulaf."','".$parentesco."','".$fechan."','".$edadf."','".$tconsulta."', '".$diagnostico."','".$observacion."','".$patologia."','".$tpatologia."','".$sexof."'";
	
$sql="insert into registro_familiar ($intro) values ($values)"or die(mysql_error());

$result=mysqli_query($mysqli,$sql);

?>

            <script language="javascript">
            alert(" La Consulta a sido Registrada con exito");
            window.location.href = '../php/registrocfamiliar.php';
            </script>

            <?php
}else{
?>
            <script language="javascript">
            alert("Error al Guardar los Datos");
            history.back();
            </script>

            <?php
}

}

?>
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