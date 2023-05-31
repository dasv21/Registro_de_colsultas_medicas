<?php 
require("../include/conexion.php");
include("../include/selectpatologia.php");
include("../include/selectnumerof.php");
include("../include/javaestilo.php");

   if(isset($_GET['opcion'])){
    $cantidad = $_GET['opcion'];
    $queryss = "SELECT * FROM cargafamiliar WHERE cantidad = '$cantidad'";
	$resultadoss = $mysqli->query($queryss);
	
	while($rowss = $resultadoss->fetch_assoc())
	{
		$nombref.= $rowss['nombrec'];
		$apellidof.= $rowss['apellidoc'];
		$cedulaf.= $rowss['cedulac'];
	    $nficha.= $rowss['numerof'];
		$parentesco.= $rowss['parentescoc'];
		$sexo.= $rowss['sexoc'];
		$dia.= $rowss['diac'];
		$mes.= $rowss['mesc'];
		$año.= $rowss['anoc'];
}
}
?>

<html>
<head>
<meta charset="utf-8">
<title>Consulta Familiar</title>

</head>
<!-- script de busqueda-->
<script type="text/javascript">
  function buscar(){
  var opcion = document.getElementById('familiar').value;
  window.location.href = 'http://localhost/sistemas/sistema_servicios_medicos/php/registrocfamiliar.php?opcion='+opcion;
  }
</script>

<link rel="stylesheet" href="../css/estiloform.css">
<body>
<!--empieza el formulario-->
<div align="center">
  <table  width="813">
 <div align="center">
  <tr>
    <td><img  src="../imagenes/cintillocemento.png" width="1000" height="44" alt=""/></td></tr>
  <tr><td><?php include('../include/menu.php');?></td></tr>
   </div>
   </table>
  <form action="guardaregistrof.php" method="post" name="formregistrof"> 
  <table width="813">
  <tr>
  <td><div><h4>Seleccionar Familiar<h4></div></td>
  </tr>
  </table>
  
  <table width="414" class="tabla" border="0" align="center">
  <tbody>
    <tr>
      <td width="75">Nº Ficha</td>
      <td width="136"><select class="textbox" name="numerof" id="numerof" >
        <option value="">Seleccionar</option>
        <?php while($row = $resultadof->fetch_assoc()) { ?>
        <option value="<?php echo $row['numerof']; ?>"><?php echo $row['numerof']; ?></option>
        <?php } ?>
        </select></td>
      <td width="49">Familiar</td>
      <td width="136"><select name="familiar"  class="textbox" id="familiar" onchange="return buscar();">
        <option value='0'>Seleccionar</option>
        </select></td>
    </tr>
    </table>
    <table width="854" class="tabla" border="0">
     <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="157">Nº Ficha del Trabajador</td>
      <td><?php
                
     if(isset($nficha)){?>
        <input type="text" class="textbox" size="3" name="numerof" value="<?php echo $nficha ?>" readonly/>
        <?php
             
     }else{?>
        <input type="text" class="textbox" name="numerof" value="" required readonly />
        <?php
                 
     }
                
     ?></td>
      
      <td>Fecha de Consulta</td>
		<td><input name="fechacon" class="textbox" size="11" id="fechacon" required></td>
      
    </tr>

<tr>
<td>Nombres</td>


<td>
<?php
                
     if(isset($nombref)){?>
     <input type="text" class="textbox" size="25" name="nombref" value="<?php echo $nombref ?>" readonly />
     <?php
             
     }else{?>
     <input type="text" class="textbox" size="25" name="nombref" value="" required readonly/>
     <?php
                 
     }
                
     ?>
 
   
    
</td>

<td>Apellidos</td>
<td><?php
                
     if(isset($apellidof)){?>
     <input type="text" class="textbox" size="25" name="apellidof" value="<?php echo $apellidof ?>" readonly />
     <?php
             
     }else{?>
     <input type="text" class="textbox" size="25" name="apellidof" value="" required readonly />
     <?php
                 
     }
                
     ?>
 </td>
</tr>

<tr>
<td>Nº Cedula</td>
<td><?php
                
     if(isset($cedulaf)){?>
     <input type="text" class="textbox" size="11" name="cedulaf" value="<?php echo $cedulaf ?>" readonly />
     <?php
             
     }else{?>
     <input type="text" class="textbox" size="11" name="cedulaf" value="" required readonly />
     <?php
                 
     }
                
     ?></td>
<td width="94">Parentesco</td>
<td>
	<?php
                
     if(isset($parentesco)){?>
     <input type="text" class="textbox" size="11" name="parentesco" value="<?php echo $parentesco ?>"readonly/>
     <?php
             
     }else{?>
     <input type="text" class="textbox" size="11" name="parentesco" value="" required readonly/>
     <?php
                 
     }
                
     ?>
</td>
</tr>

<tr>


<td>Fecha de Nacimiento</td>
<td><?php
                
     if(isset($dia)){?>
     <input type="text" class="textbox" size="11" name="fechan" value="<?php echo $dia; echo -$mes; echo -$año; ?>" readonly />
     <?php
             
     }else{?>
     <input type="text" class="textbox" size="11" name="fechan" value="" required readonly />
     <?php
                 
     }
                
     ?></td>


<td>Sexo</td>
<td><?php
                
     if(isset($sexo)){?>
     <input class="textbox" type="text" size="1" name="sexof" value="<?php echo $sexo ?>" readonly />
     <?php
             
     }else{?>
     <input type="text" class="textbox" size="1" name="sexof" value="" required readonly />
     <?php
                 
     }
                
     ?></td>
</tr>

<tr>
<td height="31">Tipo de Consulta</td>
<td><p>
<select class="textbox" name="tconsulta" id="tconsulta" required>
 <option VALUE="">Seleccionar</option>
 <option VALUE="Primera Vez">Primera Vez</option>
 <option VALUE="Consecutiva">Consecutiva</option>
</select>
<br></p></td>
<td>Edad</td>
<td><INPUT type="number" class="textbox" name="edadf" min=0 max="120" required></td>
</tr> 
  
 <tr>
 <td height="31">Patologia</td>
 <td>
  
  <select class="textbox" name="patologia" id="patologia" required>
  <option value="">Seleccionar</option>
  
 <?php while($row = $resultado->fetch_assoc()) { ?>
	<option  value="<?php echo $row['id_patologia']; ?>"><?php echo $row['nombre_patologia']; ?></option>
	<?php } ?>
 </select></td>
   
      <td>Tipo Patologia</td>
    <td><select class="textbox" name="tipo_patologia" id="tipo_patologia" required>
    	<option value='0'>Seleccionar</option>
    </select></td>
	
</tr>

<tr>
<td height="103">Diagnostico:</td>
<td><textarea name="diagnostico" class="textbox" id="diagnostico" cols="45" rows="5" maxlength="300" required></textarea></td>
<td>Observaciones:</td>
<td><textarea name="observacion" class="textbox" id="observacion" cols="45" rows="5" maxlength="300" required></textarea></td>
</tr>
</tbody>
</table>


<div>
<table border="0">
  <tr>
  <td>&nbsp;</td>
  </tr>
   
    <td><input type="submit" class="tabla" name="Guardar" value="Guardar" id="Guardar" ></td>
    <td><a href="../php/registrocfamiliar.php" title="Borrar"><img src="../imagenes/borrar.png" width="30" height="30" border="0"></a><td>
    <td><a href="../php/index.php" title="Volver"><img src="../imagenes/regresar.png" width="30" height="30" border="0"></a></td>
</table>
</div>
</form>
</div>
<footer>
<div class="contenedor">
<p class="copy"><strong></strong>
<strong>
<p><em>Cemento Andino S.A <br>Gerencia de Tecnologia &copy; 2017<br>DESARROLLADO POR:<br>David Santiago</em></p>
</strong></p>
</div>
</footer>
</body>
</html>
