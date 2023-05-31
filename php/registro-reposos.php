<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Registro Reposos</title>

<style type="text/css">
/*letra del pie de pagina*/
footer .contenedor {
color: #333333;
font-size: 12px;
margin-top: 120px; 
}

.hidden{
    display: none;
}

</style>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

<script>
$(document).ready(function()
{

	$(".btnAction").on("click", function()
	{
	var Action = 1;
	if($(this).attr("id") == "btnGuardar")
	{
		Action = 0;
	}
		if($("#Cedula").val() == '' || $("#Nombre").val() == '' || $("#Apellido").val() == '' || $("#InicioReposo").val() == '' || $("#TerminoReposo").val() == '' || $("#Diagnostico").val() == '' || $("#Observacion").val() == '')
		{
		 alert("Todos Los campos Son Requeridos");
		}
		else
		{
		 $.ajax({
		 type: "post",
		 url: "post_reposos.php",
		 data : "&Cedula="+$("#Cedula").val()+"&Nombre="+$("#Nombre").val()+
		 "&Apellido="+$("#Apellido").val()+"&InicioReposo="+$("#InicioReposo").val()+"&TerminoReposo="+$("#TerminoReposo").val()+
		 "&Diagnostico="+$("#Diagnostico").val()+"&Observacion="+$("#Observacion").val()+"&Function="+Action,
		 
		 dataType: "html",
		 success: function(data)
		 {
		 console.log(data);
		  if(data == "1")
		  {
			alert("Informacion Guardada");
		  }
		  else
		  {
			alert("Error al Guardar informacion");
		  }
		 }
		 });
		}
	});
	$("#btnBuscar").on("click", function()
	{
	console.log("aqui");
		if($("#txtCedula").val() == '')
		{
		 alert("debe ingresar un numero de cedula");
		 $("#txtCedula").focus();
		}
		else
		{
		 $.ajax({
		 type: "get",
		 url: "getReposos.php",
		 data : "&Cedula="+$("#txtCedula").val(),
		 dataType: "json",
		 success: function(data)
		 {
		 if(data  == '')
		 {
		 alert("No existen registros asociados a cedula ingresada");
		 }else
		 {
			$("#Nombre").val(data[0].nombre);
		 $("#Apellido").val(data[0].apellido);
		 $("#Cedula").val(data[0].cedula).prop("disabled", true);
		 $("#InicioReposo").val(data[0].desde);
		 $("#TerminoReposo").val(data[0].hasta);
		 $("#Diagnostico").val(data[0].diagnostico);
		 $("#Observacion").val(data[0].observacion);
		 
		 $("#btnModificar").prop("disabled", false);
		 if(data[0].tipo_reposo = "Laboral")
		 {
			$("#Radiolaboral").prop('checked', true);
			$("#DivLaboral").removeClass("hidden");
			$("#DivNoLaboral, #DivMaternidad").addClass("hidden");
			$("#RadioNolaboral, #RadioMaternidad").prop('checked', false).prop('disabled', true);
			$("#cbreposolaboral").val(data[0].clase_reposo);
			console.log(data[0].clase_reposo);
		 }else if(data[0].tipo_reposo = "NoLaboral")
		 {
			$("#RadioNolaboral").prop('checked', true);
			$("#DivNoLaboral").removeClass("hidden");
			$("#DivLaboral, #DivMaternidad").addClass("hidden");
			$("#Radiolaboral, #RadioMaternidad").prop('checked', false).prop('disabled', true);
			$("#cbreposonolaboral").val(data[0].clase_reposo);
			
		 }else
		 {
			$("#RadioMaternidad").prop('checked', true);
			$("#DivNoLaboral").removeClass("hidden");
			$("#DivLaboral, #DivMaternidad").addClass("hidden");
			$("#RadioNolaboral, #Radiolaboral").prop('checked', false).prop('disabled', true);
			$("#cbreposomaternidad").val(data[0].clase_reposo);
		 }
		 $("#tipo_reposo").val(data[0].hasta);
		 }
		 
		 }
		 });
		}
	});
});

</script>

</head>


<body>
<p><img src="imagenes/logo2.jpg" width="1085" height="53" alt=""/></p>

<?php include"men.php";?>

<!--empieza el formulario-->

<h1>
<p>Registro Reposos</p>
</h1>

<table align="center">
  <tr>
   
    <td width="109"  align="RIGHT" valign="middle">Ingresar Datos:</td>
    <td width="163"  align="left" valign="middle"><input type='text' name="cedula" id="cedula" class="cedula" value=""></td>
    <td width="91"  align="left" valign="top"><button type="submit" name="enviar" id="enviar" title="buscar" class="color" value="1" ><img src="imagenes/bucar.png"width="61" height="51" id="guardar" /></button></td>
    <td width="197"  align="left" valign="top"><button id="redireccionar" name="redireccionar" class="color" value="5"><img src="imagenes/regresar.png"width="61" height="51" id="guardar" /></button></td>
  </tr>
</table>


<br>
<table width="500" height="100" border="0">
 
  <tbody>
<tr>
	<td width="60" height="45">Nombres:</td>
	<td width="150"><INPUT type="text" id="Nombre" name="nombres"></td>
	<td width="20"></td>
	<td width="60"><p> Apellido:</p></td>
	<td width="150"><INPUT type="text" id="Apellido" name="nombres"></td>
</tr>
<tr>
<td>Cedula:</td>
	<td><input type="number" name="cedula" id="Cedula"></td>
	<td></td>
	<td>Ficha:</td>
	<td><INPUT type="text" name="nombre"></td>
</tr>
<tr>
	<td colspan="3">Fecha Del Reposo</td>
</tr>
<tr>
	<td width="60">Desde:</td>
	<td width="150"><input type="date-time" name="date" id="InicioReposo"></td>
	<td width="60">Hasta:</td>
	<td width="150"><input type="date-time" name="date" id="TerminoReposo"></td>
</tr>
</tbody>
</table>
<br>
<br>

<label><input type="radio" name="Reposo" id="Radiolaboral" value="Laboral">Reposo Laboral</label>
<label><input type="radio" name="Reposo" id="RadioNolaboral" value="NoLaboral">Reposo No Laboral</label>
<label><input type="radio" name="Reposo" id="RadioMaternidad" value="Maternidad">Maternidad</label>
<div id="DivLaboral">
	<select name="reposolaboral" id="cbreposolaboral">
		<option value="">Seleccione</option>
		<option value="accidente">Accidente</option>
	</select>
</div>



<div id="DivNoLaboral">
	<select name="cbreposonolaboral" id="cbreposonolaboral">
		<option value="accidentecomun">Accidente Comun</option>
		<option value="ivss">I.V.S.S</option>
		<option value="empresa">Empresa</option>
		<option value="medico">Medico Ocupacional</option>
	</select>
</div>

<div id="DivMaternidad">
	<select name="maternidad" id="cbreposomaternidad">
		<option value="ivss">I.V.S.S</option>
		<option value="prenatal">Pre-Natal</option>
		<option value="posnatal">Post-Natal</option>
	</select>
</div>
	
	<p>&nbsp;</p>
	Diagnostico<textarea id="Diagnostico" name="textarea" id="textarea" cols="63" rows="5"></textarea>
Observaciones:<textarea id="Observacion" name="textarea2" id="textarea2" cols="63" rows="5"></textarea>
<p>&nbsp;</p>
<br>
      <input type="button" name="boton" class="btnAction" value="Guardar" id="btnGuardar" />

      <input type="button" name="boton" class="btnAction" value="Modificar" id="btnModificar" disabled="true"/>
      <input type="reset" name="boton" class="btnAction" value="Eliminar" />

<footer>
<div class="contenedor">
	<p class="copy"> 
		<strong>
			
	<em>Cemento Andino S.A<br>Gerencia de Tecnologia &copy; 2017<br>Desarrollado Por:<br>David Santiago</em>
			
		</strong>
	</p>
</div>
</footer>

</body>
</html>
