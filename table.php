<?php
require_once('config.php'); 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE form_content (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
username VARCHAR(30) NOT NULL,
contact VARCHAR(30) NOT NULL,
coursename VARCHAR(30) NOT NULL,
university VARCHAR(30) NOT NULL,
distric VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
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