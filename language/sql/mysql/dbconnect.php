<?php

// required files...

require('/etc/dbcreds.php');

// variable declarations

$servername="localhost";
$username="admin";
$password=$db_password;
$dbname="testdb";

// Create connection

$conn=new mysqli($servername,$username,$password,$dbname);

// Check connection

if ($conn->connect_error){ // print error message if connection failed
    die("Connection failed: " . $conn->connect_error);
}

// print message into browser saying connection successful
echo "Connected successfully to MySQL database: $dbname";

$conn->close(); // close connection
?>
