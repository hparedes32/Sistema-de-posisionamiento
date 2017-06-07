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

$registros= mysqli_query($conexion,"Select * From ingrediente where Nombre='$_REQUEST[Nombre]'")or die("No se pudo encontrar el ingrediente buscado". mysqli_error($conexion));

if($reg=mysqli_fetch_array($registros)){
?>
<h3 id="titulo" style="font-size:24px; color:#CC6600; font:Verdana"><u>Ingrese los datos y seleccione lo que desea modificar: </u></h3><br>
<form action="mod2.php" method="post" style="font:Verdana, Arial, Helvetica, sans-serif">
&nbsp;&nbsp;&nbsp;&nbsp;<strong><font face="Verdana" color="#FFFFFF">Nombre: </font></strong><input type="text" name="nombrenuevo" size="45" maxlength="100"/>
<input type="checkbox" name="check1"><br><br>
<input type="hidden" name="nombreviejo" value="<?php echo $reg['Nombre'] ?>" />
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Modificar" style="background-color:#CC6600; font-size: 24px;"/>&nbsp;&nbsp;
<input type="Reset" value="Cancelar" style="background-color:#CC6600; font-size:24px" />
</form>
<?php

	}
else{
 echo "<strong><font color=\"white\" size=\"5\">NO SE ENCUENTRA ESE INGREDIENTE EN LA BASE DE DATOS</font></strong>";
 }		
mysqli_close($conexion);
?>
</body>
</html>