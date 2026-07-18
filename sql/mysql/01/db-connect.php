<?php
$servername="localhost";
$username="admin";
$password="G@ld196mB1ue";
$dbname="testdb";

// Create connection
$conn=new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully to MySQL database: $dbname";

$conn->close();
?>
