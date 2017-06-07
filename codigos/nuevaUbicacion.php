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


$link = mysqli_connect('localhost:3306', 'root', '34403853', 'lo53');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 // ejemplo para github
// Attempt insert query execution
$sql = "INSERT INTO location (x,y,Map_idMap) VALUES (2,1,1)";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

echo "<strong><font color=\"white\" size=\"5\"> Se agrego una nueva localizacion </font></strong>";
?></div>
</body>
</html>
