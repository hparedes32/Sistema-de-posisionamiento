<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="STYLE.css" rel="stylesheet" type="text/css" />
<title>Procesando</title>
</head>

<body background="12.jpg">
<div id="cabecera"><a href=" paginaweb.html"><img src="PORTADA.jpg" align="right" style="width:1300px;"/></a></div>
<div style="float:left; height:400px; width:200px"> 
<ul id="menulist">
	<br /> <br />
  <li><a href="insertar.html">Insertar</a> </li><br />
  <li> <a href="modificar.html"> Modificar</a> </li><br />
  <li> <a href="eliminar.html"> Eliminar</a></li><br />
  <li> <a href="buscar.html">Buscar</a></li><br />
</ul></div>
<div id="relleno"><br />
<br />
<?php

$conexion=mysqli_connect("localhost","root","","restaurant") or die("problemas con la conexion");

$registros= mysqli_query($conexion,"Select * From trabajadores where Nombre='$_REQUEST[Nombre]' and Apellido='$_REQUEST[Apellido]'")or die("No se pudo encontrar el empleado buscado". mysqli_error($conexion));

if($reg=mysqli_fetch_array($registros)){
?>
<h3 id="titulo" style="font-size:24px; color:#CC6600; font:Verdana"><u>Ingrese los datos y seleccione lo que desea modificar: </u></h3><br>
<form action="mod1.php" method="post" style="font:Verdana, Arial, Helvetica, sans-serif">

&nbsp;&nbsp;&nbsp;&nbsp;<strong><font face="Verdana" color="#FFFFFF">Numero de Seguro Social: </font></strong><input type="text" name="nsegsocnuevo" size="45" maxlength="100"/>
<input type="checkbox" name="check4"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;<strong><font face="Verdana" color="#FFFFFF">Telefono: </font></strong><input type="text" name="telefononuevo" size="45" maxlength="100"/>
<input type="checkbox" name="check5"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;<strong><font face="Verdana" color="#FFFFFF">Celular: </font></strong><input type="text" name="telmovilnuevo" size="45" maxlength="100"/>
<input type="checkbox" name="check6"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;<strong><font face="Verdana" color="#FFFFFF">Años de Servicio: </font></strong><input type="text" name="anioservicionuevo" size="45" maxlength="100"/>
<input type="checkbox" name="check7"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;<strong><font face="Verdana" color="#FFFFFF">Fecha de Nacimiento: </font></strong><input type="text" name="fecnacnuevo" size="45" maxlength="100"/>
<input type="checkbox" name="check8"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;<strong><font face="Verdana" color="#FFFFFF">DNI del Encargado: </font></strong><input type="text" name="encargadonuevo" size="45" maxlength="100"/>
<input type="checkbox" name="check9"><br><br>
<input type="hidden" name="nombreviejo" value="<?php echo $reg['Nombre'] ?>" />
<input type="hidden" name="apellidoviejo" value="<?php echo $reg['Apellido'] ?>" />
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Modificar" style="background-color:#CC6600; font-size: 24px;"/>&nbsp;&nbsp;
<input type="Reset" value="Cancelar" style="background-color:#CC6600; font-size:24px" />
</form>
<?php

	}
else{
 echo "<strong><font color=\"white\" size=\"5\">NO EXISTE UN EMPLEADO CON ESE NOMBRE</font></strong>";
 }		
mysqli_close($conexion);
?>
</body>
</html>