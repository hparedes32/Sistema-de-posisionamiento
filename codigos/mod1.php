<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="STYLE.css" rel="stylesheet" type="text/css" />
<title>El Cartero - Restaurant</title>
<style type="text/css">
<!--
.Estilo1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<link href="STYLE.css" rel="stylesheet" type="text/css" />
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

<div id="relleno">
<br /><br />
<?php

$conexion=mysqli_connect("localhost","root","","restaurant") or die("problemas con la conexion");

if (isset($_REQUEST['check4']))
{
$registros= mysqli_query($conexion,"update trabajadores 
							set NsegSoc=$_REQUEST[nsegsocnuevo]
							where Nombre='$_REQUEST[nombreviejo]' and Apellido='$_REQUEST[apellidoviejo]'")
							or die("No se pudo modificar los valores existentes". mysqli_error($conexion));
							}
if (isset($_REQUEST['check5']))
{
$registros= mysqli_query($conexion,"update trabajadores 
							set Telefono=$_REQUEST[telefononuevo]
							where Nombre='$_REQUEST[nombreviejo]' and Apellido='$_REQUEST[apellidoviejo]'")
							or die("No se pudo modificar los valores existentes". mysqli_error($conexion));
							}
if (isset($_REQUEST['check6']))
{
$registros= mysqli_query($conexion,"update trabajadores 
							set TelMovil=$_REQUEST[telmovilnuevo]
							where Nombre='$_REQUEST[nombreviejo]' and Apellido='$_REQUEST[apellidoviejo]'")
							or die("No se pudo modificar los valores existentes". mysqli_error($conexion));
							}
if (isset($_REQUEST['check7']))
{
$registros= mysqli_query($conexion,"update trabajadores, cocinero on trabajadores.DNI = cocinero.DNI
							set cocinero.AnioServ=$_REQUEST[anioservicionuevo]
							where Nombre='$_REQUEST[nombreviejo]' and Apellido='$_REQUEST[apellidoviejo]'")
							or die("No se pudo modificar los valores existentes". mysqli_error($conexion));
							}
							
if (isset($_REQUEST['check8']))
{
$registros= mysqli_query($conexion,"update trabajadores , ayudante on trabajadores.DNI=ayudante.DNI
							set FechaNac=$_REQUEST[dninuevo]
							where Nombre='$_REQUEST[nombreviejo]' and Apellido='$_REQUEST[apellidoviejo]'")
							or die("No se pudo modificar los valores existentes". mysqli_error($conexion));
							
}	
if (isset($_REQUEST['check9']))
{
$registros= mysqli_query($conexion,"update trabajadores , ayudante on trabajadores.DNI=ayudante.DNI
							set ENCARGADO=$_REQUEST[encargadonuevo]
							where Nombre='$_REQUEST[nombreviejo]' and Apellido='$_REQUEST[apellidoviejo]'")
							or die("<strong><font color=\"white\" size=\"5\">No se pudo modificar los valores existentes</font></strong>". mysqli_error($conexion));
							
}						

mysqli_close($conexion);

echo "<strong><font color=\"white\" size=\"5\">MODIFICACION REALIZADA EXITOSAMENTE</font></strong>";

?>
</div>							
</body>
</html>
