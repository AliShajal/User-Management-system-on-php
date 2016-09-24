<?php
session_start(); 
// Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['user']) || empty($_POST['pass'])) {
 	$_SESSION['error'] = true;
    $_SESSION['error_msg'] = 'Required fields are missing';
    header("Location: login.php");
    exit();
}
else
{
// Define $username and $password
$username=$_POST['user'];
$password=$_POST['pass'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("from_submitte");

// SQL query to fetch information of registerd users and finds user match.
$result = mysql_query("select * from form_content where password='$password' AND username='$username'") or die("Failed to Quqry database". mysql_error());
$row = mysql_fetch_array($result);
if ($row['username'] ==$username && $row["password"]== $password ) {
	$_SESSION['topu']= $row['id'];
	?>
	<script>
    	alert("Login sucessfully");
  	</script>
	<?php
	header("refresh:1; url=personal.php");
} else {
	?>
	<script>
    	alert("Login Error");
  	</script>
	<?php
	header("refresh:1; url=login.php");
}
mysql_close($connection); // Closing Connection
}
}
?>