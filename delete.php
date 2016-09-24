<?php
session_start();
$id = $_SESSION['topu'];
?>
<?php 
  mysql_connect("localhost", "root", "") or die("cound not connect");
  mysql_select_db("from_submitte") or die("Could not connect to database");
  $exist= mysql_query("SELECT * FROM form_content WHERE id = '$id'") or die("this quary conuld not right");
  if (mysql_num_rows($exist) !=0) {
    mysql_query("
        DELETE FROM form_content WHERE id='$id'
      ") or die("quary not be applyed");
    ?>
   <script>
    alert("Your data row deleted");
  </script>
    <?php
  } else {
  ?>
  <script>
      alert("You are not loged in");
    </script>
  <?php
}
 ?>