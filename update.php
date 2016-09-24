<?php
require_once('config.php'); 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$fname= $_POST["first_name"];
$lame= $_POST["last_name"];
$email= $_POST["email"];
$user= $_POST["username"];
$coont= $_POST["contact"];
$courses= $_POST["course"];
$university=$_POST["university"];
$dist= $_POST["distric"];
$passw=$_POST["pww"];
$sql = "INSERT INTO $table (firstname, lastname, email, username, contact, coursename, university, distric, password)
VALUES ('$fname', '$lame','$email','$user','$coont','$courses','$university','$dist', '$passw')";

if ($conn->query($sql) === TRUE) {
    echo "<h1 align='center' style='color:green; margin-top:300px;'>"."Your Registration Completed"."</h1>";
	header("refresh:1; url=view.php");
} else {
    echo "<h1 align='center' style='color:red; margin-top:300px;'>"."Error: " . $sql . "<br>" . $conn->error."</h1>";
    header("refresh:1; url=view.php");
}

$conn->close();
?>