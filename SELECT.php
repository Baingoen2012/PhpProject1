<?php

$host ="localhost";
$user ="root";
$pass ="12345678";
$db ="bb";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "SELECT * FROM tebel01 
          WHERE id = '01'";
if ($conn->query($sql) === TRUE) {  
   echo "error"; 
   
   }else{
   
   echo "successfully";
    } 
 ?>