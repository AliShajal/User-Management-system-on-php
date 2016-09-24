<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Register form with HTML5 using placeholder and CSS3</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div id="wrapper">
        <form action="update.php" method="post">
            <fieldset>
                <legend>Register Form</legend>
                <div>
                    <input type="text" name="first_name" placeholder="First Name"
					pattern="[A-Za-z]{0,}" title="Enter More then Two letter" Required/>
                </div>
                <div>
                    <input type="text" name="last_name" placeholder="Last Name"
					pattern="[A-Za-z]{0,}" title="Enter More then Two letter" Required/>
                </div>
                <div>
                    <input type="email" name="email" placeholder="Enter Email"
					pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" Required/>
                </div>
                <div>
                    <input type="text" name="username" placeholder="Enter Username" Required/>
                </div>
                <div>
                    <input type="text" name="contact" placeholder="Enter Contuct number"
                    pattern="[0-9]{11,}" title="Enter More then 11 digit" Required/>
                </div>
                <div>
                    <input type="text" name="course" placeholder="Enter Course "
					pattern="[A-Za-z]{0,}" title="Enter More then Three letter" Required/>
                </div>   
                <div>
                    <input type="text" name="university" placeholder="University Name"
					pattern="[A-Za-z]{0,}" title="Enter More then Three letter" Required/>
                </div> 
                <div>
                    <input type="text" name="distric" placeholder="Home Distric"
                    pattern="[A-Za-z]{0,}" title="Enter More then Three letter" Required/>
                </div>
                <div>
                    <input type="password" name="pww" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
					title="Must contain at least one number and one uppercase and lowercase letter,
					and at least 6 or more characters" Required/>
                </div> 
                <input type="submit" name="submit" value="Insert"/>
            </fieldset>    
        </form>
    </div>
</body>
</html>
