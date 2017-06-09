<?php  
function Conectarse()  
{  
   if (!($link=mysql_connect('localhost:3306', 'root', '34403853')))  
   {  
      echo "Error conectando a la base de datos.";  
      exit();  
   }  
   if (!mysql_select_db('lo53',$link))  
   {  
      echo "Error seleccionando la base de datos.";  
      exit();  
   }  
   return $link;  
}  
?> 