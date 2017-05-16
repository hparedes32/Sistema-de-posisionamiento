<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


$link = mysqli_connect('localhost:3306', 'root', '34403853', 'lo53');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 // ejemplo para github
// Attempt insert query execution
$sql = "INSERT INTO map (description, px_width, px_height, m_width, m_height, content) VALUES ('segundo valor', 12, 12, 12, 12, 'coso')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>