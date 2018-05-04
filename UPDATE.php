<?php

$host ="localhost";
$user ="root";
$pass ="12345678";
$db ="bb";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "UPDATE tebel01 (Name)

          VALUES ('Best')";

if ($conn->query($sql) === TRUE) {  
   echo "error"; 
   
   }else{
   
   echo "successfully";
    } 
 ?>
