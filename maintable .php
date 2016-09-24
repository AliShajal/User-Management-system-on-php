<?php
require_once('config1.php'); 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql= "CREATE TABLE Saveingdadata (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		host VARCHAR(30) NOT NULL,
		user VARCHAR(30) NOT NULL,
		passwword VARCHAR(30) NOT NULL,
		table VARCHAR(30) NOT NULL,
		reg_date TIMESTAMP
		)";

if ($conn->query($sql) === TRUE) {
    echo  "<h1 align='center' style='color:green; margin-top:300px;'>"."TABLE Create Successfully"."</h1>";
    header("refresh:1; url=registration.php");
} else {
    echo "<h1 align='center' style='color:red; margin-top:300px;'>"."Error creating table: " . $conn->error."</h1>";
    header("refresh:1; url=registration.php");
}
$conn->close();
?>