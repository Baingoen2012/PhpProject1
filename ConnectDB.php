<?php

$host ="localhost";
$user ="root";
$pass ="12345678";
$db ="bb";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
