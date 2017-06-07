<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="STYLE.css" rel="stylesheet" type="text/css" />
<title>Procesando</title>
</head>

<body background="12.jpg">
<div id="cabecera"> <a href=" paginaweb.html"><img src="PORTADA.jpg" align="right" style="width:1300px;"/></a> </div>
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

$conexion=mysqli_connect("localhost","root","","restaurant") or die("<strong><font color=\"white\" size=\"5\">problemas con la conexion</font></strong>");

mysqli_query($conexion,"insert into ingrediente(IdIng,Nombre) values ($_REQUEST[Id],'$_REQUEST[Nombre]')")or die("<strong><font color=\"white\" size=\"5\">ERROR AL CARGAR DATOS INTENTE NUEVAMENTE</font></strong>". mysqli_error($conexion));


$registros= mysqli_query($conexion,"select IdEST FROM estanteria WHERE Letra='$_POST[Estanteria]'")or die("No se pudo encontrar el empleado buscado". mysqli_error($conexion));
$idEST=mysqli_fetch_array($registros);
mysqli_query($conexion,"insert into almacena(IdIng,IdEST) values ($_REQUEST[Id],$idEST[IdEST])")or die("<strong><font color=\"white\" size=\"5\">ERROR AL CARGAR DATOS INTENTE NUEVAMENTE</font></strong>". mysqli_error($conexion));	

mysqli_close($conexion);

echo "<strong><font color=\"white\" size=\"5\">El Ingrediente fue añadido </font></strong>";
?></div>
</body>
</html>
