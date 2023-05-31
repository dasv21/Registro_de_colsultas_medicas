<?php
require('../include/conexion.php');
	if ($_REQUEST[enviar]!=0){//insertar registros en base de datos
	 $cedula=$_POST[cedula];
		$sql="select * from empleados where numerof='".$cedula."'" ; 
 					$resultado=mysql_query($sql, conectar()); 
 	 				$numero = mysql_num_rows($resultado); // obtenemos el n�mero de filas
						if ($numero!=0){
						
						$conexion = conectar();}
		else{
			echo "<script>";
		echo "alert ('Ficha del Trabajador no Registrada')";
		echo "</script>";
		echo"<script language='javascript'>window.location='Pre-vacacional.php'</script>";
}
	}if ($_POST[redireccionar]==5) {
	 header("Location: index.php");}
?>



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro Pre-Vacacional</title>
<link rel="stylesheet" href="../css/estilos.css">
<link rel="stylesheet" href="../css/fonts.css">
<style type="text/css">
	footer .contenedor {
color: #333333;
font-size: 12px;
margin-top: 120px; 
}
</style>
<script src="../js/jquery-3.2.1.min.js"></script>

<script>
$(document).ready(function()
{

	$(".btnAction").on("click", function()
	{
	var Action = 1;
	if($(this).attr("id") == "Guardar")
	{
		Action = 0;
	}
		if($("#IdCedula").val() == '' || $("#Nombre").val() == '' || $("#Ficha").val() == '' || $("#Apellido").val() == '' || $("#FechaSalida").val() == '' || $("#FechaReintegro").val() == '' || $(":radio[name='seleccion_si1']").is(":checked") == false || $(":radio[name='seleccion_s1']").is(":checked") == false )
		{
		 alert("Todos Los campos Son Requeridos");
		}
		else
		{
		 $.ajax({
		 type: "post",
		 url: "getprevacacional.php",
		 data : "&Cedula="+$("#IdCedula").val()+"&Nombre="+$("#Nombre").val()+
		 "&Ficha="+$("#Ficha").val()+"&FechaSalida="+$("#FechaSalida").val()+"&FechaReintegro="+$("#FechaReintegro").val()+"&Function="+Action+"&cita_pre="+$(":radio[name='seleccion_si1'] :checked").val()+"&cita_post="+$(":radio[name='seleccion_s1'] :checked").val(),
		 
		 dataType: "html",
		 success: function(data)
		 {
		 console.log(data);
		  if(data == "1")
		  {
			  $("#IdCedula, #Nombre, #Ficha, #FechaSalida, #FechaReintegro, #FechaSalida").val('');
			  // $("input [type='text']").val('');
			  $(":radio[name='seleccion_si1']").prop("checked", false);
			  $(":radio[name='seleccion_s1']").prop("checked", false);
			  $("#IdCedula").prop("disabled", false);
			alert("Informacion Guardada");
			  location.href="Pre-vacacional.php";
		  }
		  else
		  {
			alert("Error al Guardar informacion");
		  }
		 }
		 });
		}
	});
	
	$("#Resetear").click(function()
	{
		$("#Cedula").val('');
		$("#Guardar, #IdCedula, #Modificar").attr("disabled", false);
	})
});
</script>
</head>

<body>
<p><img src="../imagenes/cintillocemento.jpg" width="1085" height="53" alt=""/></p>

<?php include"../include/menu.php";?>

  <h1>Registro Pre-Vacacional</h1>
<br>
<form action="Pre-vacacional.php" method="post" name="form" id="form2" onSubmit="javascript: return validar(this);">
<table align="center">
  <tr>
   
    <td width="280"  align="RIGHT" valign="middle">Ingrese numero de Ficha del Trabajador:</td>
    <td width="144"  align="left" valign="middle"><input type='text' name="cedula" id="cedula" class="cedula" value=""></td>
    <td width="83"  align="left" valign="top"><button type="submit" name="enviar" id="enviar" title="buscar" class="color" value="1" ><img src="../imagenes/bucar.png"width="61" height="51" id="guardar" /></button></td>
    <td width="83"  align="left" valign="top"><button id="redireccionar" name="redireccionar" class="color" value="5"><img src="../imagenes/regresar.png"width="61" height="51" id="guardar" /></button></td>
  </tr>
</table>
<?php
if ($numero!=0){
	  $count=mysql_num_rows($resultado);
while($rows=mysql_fetch_array($resultado)){
		?>
		<br>
		<br>
		<br>
<form action="" method="post" name="form1" id="form">
 
 
  <table width="58%" border="0" align="center" cellpadding="7" cellspacing="0">


   <tr>
     <td width="136">&nbsp;</td>
    <td width="136" height="37"><div>Cedula:</div></td>
    <td width="120"><input id="IdCedula" name="Idcedula" type="text" size="20" maxlength="30" value="<? echo $rows['cedula'];?>" readonly /></td>
    <td colspan="2">&nbsp;</td>
    </tr>
  
   <tr>
     <td>&nbsp;</td>
     <td height="36"><div>Ficha:</div></td>
     <td height="36" colspan="3"><input id="Ficha" name="Ficha" type="number" size="20" maxlength="30" value="<? echo $rows['numerof']; ?>" readonly /></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
    <td height="36"><div>Nombre y Apellido:</div></td>
    <td height="36" colspan="3"><input id="Nombre" name="nombres" type="text" size="20" maxlength="30" value="<? echo $rows['nombre']; ?>" readonly/></td>
	  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="36"><div>Fecha De Salida:</div></td>
    <td height="36" colspan="3"><input id="FechaSalida" name="fecha de salida" type="date" size="20" maxlength="30" ></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="36"><div>Fecha De Reintegro:</div></td>
    <td height="36" colspan="3"><input id="FechaReintegro" name="fecha de reintegro" type="date" size="20" maxlength="30"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="36"><div>Cita Pre-Vacacional:</div></td>
	  <td><label> Si <input type="radio" name="seleccion_si1" value="1" id="CitaPrevacional1" />
                  No <input type="radio" name="seleccion_si1" value="2" id="CitaPrevacional2"/> </label> 
	  <label></label><td width="145"><div>Cita Pos-Vacacional:</div> </td>
	  <td width="196"> &nbsp; Si <input type="radio" name="seleccion_s1" value="1" id="CitaPostvacional1" />
	              No <input type="radio" name="seleccion_s1" value="2" id="CitaPostvacional2" /> </td>
	            </label>
  <tr>
    <td colspan="7"><div align="center">
      <input type="button" class="btnAction" name="boton" value="Guardar" id="Guardar" />
      
    </div></td>
    </tr>
  </table>
</form>
<?php
	}
}
	?>
<p>&nbsp;</p>
<p>&nbsp;</p>

<footer>
<div class="contenedor">
  <p class="copy"><strong></strong>  
  <strong>
  <p><em>Cemento Andino S.A <br>Gerencia de Tecnologia &copy; 2017<br>Desarrollado Por:<br>David Santiago</em></p>

</strong></p>
</div>
</footer>
		</from>
</body>
</html>
