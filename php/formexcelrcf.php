<?php
	
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
<table  width="813">
 <div align="center">
  <tr>
    <td><img  src="../imagenes/cintillocemento.png" width="1000" height="44" alt=""/></td></tr>
  <tr><td><?php include('../include/menu.php');?></td></tr>
   </div>
   </table>
 
   <table class="tabla">
   
   <tr><td></td><td></td>
  <td align="center"><center><strong>Generar Reportes</strong></CENTER></td>
  </tr>
  </table>
<form action="excelregistrocf.php" method="post" name="form" id="formeda">
<table class="tabla">
   
    <tr>
    <td> <input class="textbox" placeholder="DESDE..." size="11" name="fechad" id="fechad" value="" required></td>
    <td><input class="textbox" placeholder="HASTA..." size="11" name="fechah" id="fechah" value="" required></td>
    </tr>
</table>
<table>
<tr>
<td><button type="submit" name="filtrar" class="ui-button" id="filtrar" title="Filtrar" value="filtrar" ><img src="../imagenes/excel.png" width="30" height="30" id="filtrar" /></button></td>
   </tr>
   </table>
   <table class="tabla">
  <tr><td>
   <img src="../imagenes/cemento andino.jpg" width="1000" height="500" /></td></tr>
   </table>
</form>

<footer>
<div class="contenedor">
<p class="copy">
<strong>
<p><em>Cemento Andino S.A <br>Gerencia de Tecnologia &copy; 2017<br>DESARROLLADO POR:<br>David Santiago
</em></p>
</strong></p>
</div>
</footer>
</body>
</html>