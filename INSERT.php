<?php

$host ="localhost";
$user ="root";
$pass ="12345678";
$db ="bb";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
 
 $sql = "INSERT INTO tebel01 (ID,Name)

          VALUES ('01','Best',)";
		  
if ($conn->query($sql) === TRUE) {  
   echo "error"; 
   
   }else{
   
   echo "successfully";
    } 
	
?>

