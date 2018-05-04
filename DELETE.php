<?php

$host ="localhost";
$user ="root";
$pass ="12345678";
$db ="bb";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "DELETE FROM tebel01 

         WHERE Name = 'Baingoen'";

if ($conn->query($sql) === TRUE) {  
   echo "error"; 
   
   }else{
   
   echo "successfully";
    } 
 ?>

