<!DOCTYPE html>

<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
$connection = mysql_connect("localhost","root","");
mysql_select_db("members", $connection);
?>

<html>
<head>
	<title> Sākums </title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  	<link rel="SHORTCUT ICON" href="./bildes/favicon.ico"/>
  	<script src="./js/jquery2.1.4.min.js"></script>
      <script src="./js/bootstrap.min.js"></script>
      <link href = "./css/bootstrap.min.css" rel = "stylesheet">
      <link rel="stylesheet" type="text/css" href="./stils.css">

</head>

<body>
	 <div class = "navbar navbar-inverse navbar-static-top">
	 	<div class = "container">

	 		<a href = "#" class = "pull-left"><img src = "./bildes/logo.png" width = "200px" height = "35px"></a>

	 		<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
	 		<span class = "icon-bar"></span>
	 		<span class = "icon-bar"></span>
	 		<span class = "icon-bar"></span>
	 		</button>

	 		<div class = "collapse navbar-collapse navHeaderCollapse">
	 			<ul class = "nav navbar-nav navbar-right" id = "myNavbar">
                    <li><a href = "./index.php">Start</a></li>
                    <li><a href = "./kontakti.php">Contacts</a></li>
                    <li><a href = "./registracija.php">Registration</a></li>
                    <li><a href = "./Logins.php">Login</a></li>
	 				</li>
	 			</ul>
	 		</div>
	 	</div>
	 </div>

<div class="container" id="user-register">
    <div class="text-center"><h2>Register</h2></div>
    <form action="logins.php" method="post">
        <div class="form-group">
            <label for="inputsm">Username</label>
            <input class="form-control input-sm" id="inputsm" type="text" name="username" maxlength="30">
            <label for="inputsm">Password</label>
            <input class="form-control input-sm" id="inputsm" type="password" name="password" maxlength="30">
            <button type="submit" class="btn btn-success" name="register" value="1">Register</button>
        </div>
    </form>
</div>
 
<?php
    if(isset($_POST['members']))
    {      
        $user = mysql_real_escape_string($_POST['username']);
        $pass = mysql_real_escape_string($_POST['password']);
       
        $result = mysql_query("SELECT * FROM users WHERE username = '$user'");
        if ($user AND $pass)
        {
            if (!mysql_fetch_array($result))
            {
                mysql_query("INSERT INTO members(Username, Password, IsAdmin) VALUES ('$user', '$pass', 0)");        
                $_SESSION['username'] = $user;
                $_SESSION['password'] = $pass;
                header("Refresh:0");
            }else echo "Registration failed! Such a username already exists.";
        }else echo "Fields can not be empty!";
    }
?>