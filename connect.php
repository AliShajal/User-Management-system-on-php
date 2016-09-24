<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "from_submitte";
$table = "form_content";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
else{
	echo "Db Connected";
}