
<?php
require_once('config.php'); 
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
     echo "<h1 align='center' style='color:green; margin-top:300px;'>"."Database Create sucessfully"."</h1>";
     header("refresh:1; url=table.php");
} else {
    header("refresh:1; url=registration.php");
}

$conn->close();
?>