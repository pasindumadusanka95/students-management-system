<?php
   
	include("dbconnect.php");
	error_reporting(0);
	
	
	
	$username = $_POST["username"];
	$pwd = $_POST["pwd"];
	$name = $_POST["name"];
	
	if($_POST["submit"]) {
		$sql = "INSERT INTO user VALUES ('','$username','$pwd ','$name')";
		
		if(mysqli_query($dbconnect,$sql)) {
			echo "Registered  Successfully!";
		}
		else {
			echo "Error..";
		}
	
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Sign Up</title>
  <meta name="description" content="">
  <meta name="author" content="Pasindu Senarath">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
</head>

<body style="background-color:gray">
<div style="background-color: white;width: 400px;margin-top: 100px;margin-left:450px;height:500px">
	
<div class="w3-container w3-green">
  <h2>sign up</h2>
</div>

<form action="signup.php" method="post" class="w3-container">
 
  <p>
  <label>User Name:</label>
  <input name="username" class="w3-input" type="text" required/></p>
  <p>
  <label>Password:</label>
  <input name="pwd" class="w3-input" type="password" required/></p>
   <p>
  <label>Name</label>
  <input name="name" class="w3-input" type="text" required/></p>
  <p><input class="w3-btn w3-green" name="submit" type="submit" value="Sign up"></p>
</form>
<a href="Login.php" style="margin-left: 30px;color: green"><b>Login</b></a>
</div>
<div>
	<footer style="align:center">
     <p>&copy; Copyright  by Pasindu Senarath</p>
    </footer>
  </div>
</body>
    

</html>