<?php
session_start();
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Login form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div id="wrapper">
        <legend>
            <?php
    if (isset($_SESSION['error']) && $_SESSION['error']) {
    ?>
        <div style="background-color: #f2dede; color: red; border-color: #ebccd1;">
            <?php echo $_SESSION['error_msg']; ?>
        </div>
    <?php
        }
    ?>
        </legend>
        <form action="logincheke.php" method="post">
            <fieldset>
                <legend>Login here</legend>
                <div>
                    <input type="text" name="user" placeholder="Enter Username"/>
                <div>
                    <input type="password" name="pass" placeholder="Enter Password"/>
                </div> 
                <input type="submit" name="submit" value="Insert"/>
            </fieldset>    
        </form>
    </div>
</body>
</html>
