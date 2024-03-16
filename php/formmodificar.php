<?php 
require("../include/conexion.php");
include("../include/selectpatologia.php");
include("../include/javaestilo.php");
if(isset($_GET["codigomodi"])){
		$modif=($_GET["codigomodi"]);
		$querymodi = "SELECT * FROM registro_familiar WHERE id_registros_familiar = '$modif'"  ; 
		$resultadomodi = $mysqli->query($querymodi);
         while($rowm = $resultadomodi->fetch_assoc())
		{
			$id_registros_familiar= $rowm['id_registros_familiar'];
			$fechaconn=$rowm["fechacon"];
			$numerof=$rowm["numerof"];
			$nombref=$rowm["nombref"];
			$apellidof=$rowm["apellidof"];
			$cedulaf=$rowm["cedulaf"];
			$fechan=$rowm["fechan"];
			$parentesco=$rowm["parentesco"];
			$tconsulta=$rowm["tconsulta"];
			$diagnostico=$rowm["diagnostico"];
			$observacion=$rowm["observacion"];
			$patologia=$rowm["patologia"];
			$tpatologia=$rowm["tpatologia"];
			$sexof=$rowm["sexof"];
			$edadf=$rowm["edadf"];
		}		 
		}
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Editar Reporte Familiar</title>
</head>
<link rel="stylesheet" href="../css/estiloform.css">

<body>
    <!--empieza el formulario-->
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
        <form action="modificarfamiliar.php" method="post" name="formrmodi">
            <table class="tabla" width="300">
                <tr>
                    <td>
                        <center>
                            <div>
                                <h4>Editando Consulta Nº<?php echo $id_registros_familiar;?><br><?php echo $nombref;?>
                                    <?php echo $apellidof;?> <h4>
                            </div>
                        </center>
                    </td>
                </tr>
            </table>
            <table width="854" class="tabla" border="0">
                <tr>
                    <td><input type="hidden" name="id_registros_familiar" id="id_registros_familiar"
                            value="<?php echo $id_registros_familiar ?>" /></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td width="157">Nº Ficha del Trabajador</td>
                    <td>
                        <?php                
     if(isset($numerof)){?>
                        <input type="text" class="textbox" size="3" name="numerof" value="<?php echo $numerof ?>"
                            readonly />
                        <?php
        }else{?>
                        <input type="text" class="textbox" name="numerof" value="" required readonly />
                        <?php
                 
     }
                
     ?>
                    </td>

                    <td>Fecha de Consulta</td>
                    <td><?php
     if(isset($nombref)){?>
                        <input class="textbox" size="11" name="fecham" id="fecham" value="<?php echo $fechaconn ?>"
                            required>
                        <?php
     }else{?>
                        <input class="textbox" size="25" name="fechacon" value="" required readonly />
                        <?php
     }
     ?>
                    </td>
                </tr>
                <tr>
                    <td>Nombres</td>
                    <td>
                        <?php
     if(isset($nombref)){?>
                        <input type="text" class="textbox" size="25" name="nombref" value="<?php echo $nombref ?>"
                            readonly />
                        <?php
             
     }else{?>
                        <input type="text" class="textbox" size="25" name="nombref" value="" required readonly />
                        <?php
     }
     ?>
                    </td>

                    <td>Apellidos</td>
                    <td><?php
     if(isset($apellidof)){?>
                        <input type="text" class="textbox" size="25" name="apellidof" value="<?php echo $apellidof ?>"
                            readonly />
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
                        <input type="text" class="textbox" size="11" name="cedulaf" value="<?php echo $cedulaf ?>"
                            readonly />
                        <?php
             
     }else{?>
                        <input type="text" class="textbox" size="11" name="cedulaf" value="" required readonly />
                        <?php
                 
     }
                
     ?>
                    </td>
                    <td width="94">Parentesco</td>
                    <td>
                        <?php
     if(isset($parentesco)){?>
                        <input type="text" class="textbox" size="11" name="parentesco" value="<?php echo $parentesco ?>"
                            readonly />
                        <?php
             
     }else{?>
                        <input type="text" class="textbox" size="11" name="parentesco" value="" required readonly />
                        <?php
     }
     ?>
                    </td>
                </tr>
                <tr>
                    <td>Fecha de Nacimiento</td>
                    <td><?php
      if(isset($fechan)){?>
                        <input type="text" class="textbox" size="11" name="fechan" value="<?php echo $fechan; ?>"
                            readonly />
                        <?php
             
     }else{?>
                        <input type="text" class="textbox" size="11" name="fechan" value="" required readonly />
                        <?php
     }
     ?>
                    </td>

                    <td>Sexo</td>
                    <td><?php
     if(isset($sexof)){?>
                        <input class="textbox" type="text" size="1" name="sexof" value="<?php echo $sexof ?>"
                            readonly />
                        <?php
             
     }else{?>
                        <input type="text" class="textbox" size="1" name="sexof" value="" required readonly />
                        <?php
     }
     ?>
                    </td>
                </tr>

                <tr>
                    <td height="31">Tipo de Consulta</td>
                    <td>
                        <p>
                            <select class="textbox" name="tconsulta" id="tconsulta" required>
                                <option VALUE="">Seleccionar</option>
                                <option VALUE="Primera vez">Primera Vez</option>
                                <option VALUE="Consecutiva">Consecutiva</option>
                            </select>
                            <br>
                        </p>
                    </td>
                    <td>Edad</td>
                    <td><?php
     if(isset($edadf)){?>
                        <input class="textbox" type="number" size="1" name="edadf" min=0 max="120"
                            value="<?php echo $edadf ?>" required />
                        <?php
             
     }else{?>
                        <input type="text" class="textbox" size="1" name="edadf" value="" required readonly />
                        <?php
     }
     ?>
                    </td>
                </tr>

                <tr>
                    <td height="31">Patologia</td>
                    <td>

                        <select class="textbox" name="patologia" id="patologia" required>
                            <option value="">Seleccionar</option>

                            <?php while($row = $resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $row['id_patologia']; ?>"><?php echo $row['nombre_patologia']; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </td>

                    <td>Tipo Patologia</td>
                    <td><select class="textbox" name="tipo_patologia" id="tipo_patologia" required>
                            <option value=''>Seleccionar</option>
                        </select></td>

                </tr>

                <tr>
                    <td height="103">Diagnostico:</td>


                    <td>


                        <textarea name="diagnostico" class="textbox" id="diagnostico" cols="45" rows="5" maxlength="300"
                            required><?php echo $diagnostico ?></textarea>
                    </td>




                    <td>Observaciones:</td>
                    <td><textarea name="observacion" class="textbox" id="observacion" cols="45" rows="5" maxlength="300"
                            required><?php echo $observacion ?></textarea></td>
                </tr>
                </tbody>
            </table>


            <center>



                <div>
                    <table border="0">
                        <tr>
                            <td>&nbsp;</td>
                        </tr>

                        <td><input type="submit" class="tabla" name="Modificar" value="Modificar" id="Modificar"></td>
                        <td><a href="reportecfamiliar.php" title="Volver"><img src="../imagenes/regresar.png" width="40"
                                    height="30" border="0"></a></td>
                    </table>
                </div>
            </center>
        </form>
    </div>
    <footer>
        <div class="contenedor">
            <p class="copy"><strong></strong>
                <strong>
                    <center>
                        <p><em>Cemento Andino S.A <br>Gerencia de Tecnologia &copy; 2017<br>DESARROLLADO POR:<br>David
                                Santiago
                            </em></p>
                    </center>
                </strong>
            </p>
        </div>
    </footer>
</body>

</html>