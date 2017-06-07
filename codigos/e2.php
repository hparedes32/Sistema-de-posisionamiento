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

$registros= mysqli_query($conexion,"Select * From ingrediente where Nombre='$_REQUEST[Nombre]'")or die("No se pudo encontrar el inrediente buscado". mysqli_error($conexion));

if($reg=mysqli_fetch_array($registros)){
	
	mysqli_query($conexion,"Delete From ingrediente where Nombre='$_REQUEST[Nombre]'")or die("<strong><font color=\"white\" size=\"5\">No se pudo eliminar el ingrediente</font></strong>". mysqli_error($conexion));
	
	echo "<strong><font color=\"white\" size=\"5\">EL INGREDIENTE SE DIO DE BAJA EXITOSAMENTE </font></strong>";
	}
else{
 echo "<strong><font color=\"white\" size=\"5\">NO EXISTE ESE INGREDIENTE</font></strong>";
 }	
	
	
mysqli_close($conexion);

?>
</div>
</body>
</html>