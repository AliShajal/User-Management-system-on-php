<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>View data from database</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
				<?php
				require_once('config.php'); 
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				$sql = "SELECT id, firstname, lastname, email, username, contact, coursename, university, distric, password FROM $table";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {?>
			<table>
				<tr>
					<td style="background-color:black; color:white; font-weight:bold;">Database row: <?php echo $row["id"]; ?></td>
					<td style="background-color:blue; color:white; font-weight:bold;">
					<a href="registration.php">Registratin</a></td>
				</tr>
				 <tr>
					<th>First Name:</th>
					<th>Lastname:</th>
					<th>Email</th>
					<th>username</th>
					<th>Phone</th>
					<th>Course</th>
					<th>University:</th>
					<th>Home Distric</th>
					<th>Pssword::</th>
				  </tr>
				<tr>
					<td><?php echo $row["firstname"]; ?></td>
					<td><?php echo $row["lastname"]; ?></td>
					<td><?php echo $row["email"]; ?></td>
					<td><?php echo $row["username"]; ?></td>
					<td><?php echo $row["contact"]; ?></td>
					<td><?php echo $row["coursename"]; ?></td>
					<td><?php echo $row["university"]; ?></td>
					<td><?php echo $row["distric"]; ?></td>
					<td><?php echo $row["password"]; ?></td>
				</tr>
					</table>
   <?php }
} else {
    echo "<h1 align='center' style='color:red; margin-top:300px;'>"."No Data Found"."</h1>";
}
$conn->close();
?>
  
	
</body>
</html>