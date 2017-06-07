<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="STYLE.css" rel="stylesheet" type="text/css" />
<title>Procesando</title>
</head>

<body background="12.jpg">
<div id="cabecera"><a href=" paginaweb.html"><img src="PORTADA.jpg" align="right" style="width:1300px;"/></a> </div>
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

$registros= mysqli_query($conexion,"Select ingrediente.Nombre, estanteria.Letra, almacen.Direccion From ingrediente inner join almacena ON ingrediente.IdIng = almacena.IdIng inner join estanteria on almacena.idEST= estanteria.idEST inner join almacen on estanteria.idALMACEN = almacen.idALMACEN where ingrediente.Nombre='$_REQUEST[Nombre]'")or die("<strong><font color=\"white\" size=\"5\">No se pudo encontrar el ingrediente buscado</font></strong>". mysqli_error($conexion));

while($reg=mysqli_fetch_array($registros)){
	echo "<strong><font color=\"white\" size=\"5\">Nombre: ".$reg['Nombre']."<br></font></font></strong>";
	echo "<strong><font color=\"white\" size=\"5\">Estanteria: ".$reg['Letra']."<br></font></strong>";
	echo "<strong><font color=\"white\" size=\"5\">Punto de venta: ".$reg['Direccion']."<br></font></strong>";
	}

	
mysqli_close($conexion);