            <?php
                session_start();
                if (isset($_SESSION['topu'])) {
                } else 
                    header("location:login.php")
                
            ?>

            <?php
				require_once('config.php'); 
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				$id_num= $_SESSION['topu'];
				$sql = "SELECT id, firstname, lastname, email, username, contact, coursename, university, distric, password FROM form_content WHERE _rowid =$id_num";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc())
            {?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Your personal data</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div id="wrapper">
        <form method="post" action="update_data.php">
            <fieldset>
                <legend>Update Information</legend>
                <div>
                    <input type="text" name="first_name" value="<?php echo $row["firstname"]; ?>"
          pattern="[A-Za-z]{0,}" title="Enter More then Two letter" Required/>
                </div>
                <div>
                    <input type="text" name="last_name" value="<?php echo $row["lastname"]; ?>"
          pattern="[A-Za-z]{0,}" title="Enter More then Two letter" Required/>
                </div>
                <div>
                    <input type="email" name="email" value="<?php echo $row["email"]; ?>"
          pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" Required/>
                </div>
                <div>
                    <input type="text" name="username" value="<?php echo $row["username"]; ?>" pattern="[A-Za-z]{0,}" Required/>
                </div>
                <div>
                    <input type="text" name="contact" value="<?php echo $row["contact"]; ?>"
                    pattern="[0-9]{11,}" title="Enter More then 11 digit" Required/>
                </div>
                <div>
                    <input type="text" name="course" value="<?php echo $row["coursename"]; ?>"
          pattern="[A-Za-z]{0,}" title="Enter More then Three letter" Required/>
                </div>   
                <div>
                    <input type="text" name="university" value="<?php echo $row["university"]; ?>"
          pattern="[A-Za-z]{0,}" title="Enter More then Three letter" Required/>
                </div> 
                <div>
                    <input type="text" name="distric" value="<?php echo $row["distric"]; ?>"
                    pattern="[A-Za-z]{0,}" title="Enter More then Three letter" Required/>
                </div>
                <div>
                    <input type="password" name="pww" value="<?php echo $row["password"]; ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
          title="Must contain at least one number and one uppercase and lowercase letter,
          and at least 6 or more characters" Required/>
                </div> 
                <button type="submit"  name="btnupdate"><strong>UPDATE</strong></button>
            </fieldset>    
        </form>
    </div>
</body>
</html>
<?php }
} else {
    header("Location: login.php");
}
$conn->close();
?>