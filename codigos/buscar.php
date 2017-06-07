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

$conexion=mysqli_connect("localhost","root","","restaurant") or die("problemas con la conexion");

$registros= mysqli_query($conexion,"Select * From trabajadores where Nombre='$_REQUEST[Nombre]' and Apellido='$_REQUEST[Apellido]'")or die("No se pudo encontrar el empleado buscado". mysqli_error($conexion));
	echo"<strong><font color=\"orange\" size\"6\">TODOS LOS EMPLEADOS: <br><br><br></font></strong>";
while($reg=mysqli_fetch_array($registros)){

	echo "<strong><font color=\"white\" size=\"5\">Nombre: ".$reg['Apellido'].", ".$reg['Nombre']."<br><br></font></strong>";
	echo "<strong><font color=\"white\" size=\"5\">DNI: ".$reg['DNI']."<br><br></font></strong>";
	echo "<strong><font color=\"white\" size=\"5\">Numero de seguro social : ".$reg['NsegSoc']."<br><br></font></strong>";
	echo "<strong><font color=\"white\" size=\"5\">Telefono fijo: ".$reg['Telefono']."<br><br>Celular: ".$reg['TelMovil']."<br><br></font></strong>";

}

$registros= mysqli_query($conexion,"Select * From trabajadores inner join Cocinero on cocinero.DNI = trabajadores.DNI where Nombre='$_REQUEST[Nombre]' and Apellido='$_REQUEST[Apellido]'")or die("No se pudo encontrar el empleado buscado". mysqli_error($conexion));
echo"<strong><font color=\"orange\" size\"6\">COCINEROS: <br><br><br></font></strong>";
while($reg=mysqli_fetch_array($registros)){

	echo "<strong><font color=\"white\" size=\"5\">Nombre: ".$reg['Apellido'].", ".$reg['Nombre']."<br><br></font></strong>";
	echo "<strong><font color=\"white\" size=\"5\">DNI: ".$reg['DNI']."<br><br></font></strong>";
	echo "<strong><font color=\"white\" size=\"5\">Numero de seguro social : ".$reg['NsegSoc']."<br><br></font></strong>";
	echo "<strong><font color=\"white\" size=\"5\">Telefono fijo: ".$reg['Telefono']."<br><br>Celular: ".$reg['TelMovil']."<br><br></font></strong>";
	echo "<strong><font color=\"white\" size=\"5\">Años de servicio : ".$reg['AnioServ']."<br><br></font></strong>";
	
}
	 
$registros= mysqli_query($conexion,"Select * From trabajadores inner join Ayudante on Ayudante.DNI = trabajadores.DNI where Nombre='$_REQUEST[Nombre]' and Apellido='$_REQUEST[Apellido]'")or die("No se pudo encontrar el empleado buscado". mysqli_error($conexion));
echo"<strong><font color=\"orange\" size\"6\">AYUDANTES: <br><br><br></font></strong>";
while($reg=mysqli_fetch_array($registros)){

	echo "<strong><font color=\"white\" size=\"5\">Nombre: ".$reg['Apellido'].", ".$reg['Nombre']."<br><br></font></strong>";
	echo "<strong><font color=\"white\" size=\"5\">DNI: ".$reg['DNI']."<br><br></font></strong>";
	echo "<strong><font color=\"white\" size=\"5\">Numero de seguro social : ".$reg['NsegSoc']."<br><br></font></strong>";
	echo "<strong><font color=\"white\" size=\"5\">Telefono fijo: ".$reg['Telefono']."<br><br>Celular: ".$reg['TelMovil']."<br><br></font></strong>";
	echo "<strong><font color=\"white\" size=\"5\">Fecha de nacimiento : ".$reg['FechaNac']."<br><br></font></strong>";
	echo "<strong><font color=\"white\" size=\"5\">DNI del Encargado : ".$reg['ENCARGADO']."<br><br></font></strong>";
	
}





	
	
mysqli_close($conexion);

?>
</div>
</body>
</html>