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


<?php
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $user = mysqli_real_escape_string($db,$_POST['user']);
      $pass = mysqli_real_escape_string($db,$_POST['pass']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$user' and passcode = '$pass'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("username");
         $_SESSION['login_user'] = $myusername;
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>