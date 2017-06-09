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
</ul></div>
<div id="relleno"><br />
<br />
<?php


//tomamos los datos del archivo conexion.php  
include("conexion.php");  
$link = Conectarse();  
//se envia la consulta  
$result = mysql_query("SELECT * FROM map", $link);  
//se despliega el resultado  
echo "<table>";  
echo "<tr>";  
echo "<th>ID Map</th>";  
echo "<th>Description</th>";  
echo "<th>PX With</th>";  
echo "<th>PX Height</th>";  
echo "<th>W Width</th>";  
echo "<th>W Height</th>";
echo "<th>Content</th>";
echo "</tr>";  
while ($row = mysql_fetch_row($result)){   
    echo "<tr>";  
	echo "<td>$row[0]</td>";  
    echo "<td>$row[1]</td>";  
    echo "<td>$row[2]</td>";  
    echo "<td>$row[3]</td>";  
	echo "<td>$row[4]</td>";  
    echo "<td>$row[5]</td>";  
    echo "<td>$row[6]</td>";  
    echo "</tr>";  
}  
echo "</table>";

echo "<strong><font color=\"white\" size=\"5\"> Se modifico un mapa </font></strong>";
?></div>
</body>
</html>
