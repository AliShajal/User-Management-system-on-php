<?php
session_start();
$id = $_SESSION['topu'];
?>
<?php
  $fname= $_POST["first_name"];
  $lame= $_POST["last_name"];
  $email= $_POST["email"];
  $user= $_POST["username"];
  $coont= $_POST["contact"];
  $courses= $_POST["course"];
  $university=$_POST["university"];
  $dist= $_POST["distric"];
  $passw=$_POST["pww"];
  
  mysql_connect("localhost", "root", "") or die("cound not connect");
  mysql_select_db("from_submitte") or die("Could not connect to database");
  $exist= mysql_query("SELECT * FROM form_content WHERE id = '$id'") or die("this quary conuld not right");
  if (mysql_num_rows($exist) !=0) {
    mysql_query("
        UPDATE form_content SET firstname='$fname', lastname='$lame',email='$email',username='$user',contact='$coont',coursename='$courses',university='$university',distric='$dist',password='$passw' WHERE id='$id'
      ") or die("quary not be applyed");
    ?>
   <script>
    alert("Data Update sucessfully");
  </script>
    <?php
    header("refresh:1; url=personal.php");
  } else echo "Id number doesnot exist";
 ?>