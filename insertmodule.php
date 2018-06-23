<?php
	include("dbconnect.php");
	error_reporting(0);
	
	$mid = $_POST["mid"];
	$did =$_POST["did"];
	$mtitle = $_POST["mtitle"];
	$mcredits = $_POST["mcredits"];
	$mcordinator = $_POST["mcordinator"];
	
	
	if($_POST["submit"]) {
		$sql = "INSERT INTO modules VALUES ('$mid','$did','$mtitle','$mcredits','$mcordinator')";
		
		if(mysqli_query($dbconnect,$sql)) {
				echo "Inserted Data successfully !!";
		}
		else {
			echo "Insert Data";
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

  <title>module</title>
  <meta name="description" content="">
  <meta name="author" content="Pasindu Senarath">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
</head>

<body style="background-color: gray">
<div style="background-color: white;width: 600px;margin-top: 100px;margin-left:450px;height:400px">
	<div class="w3-bar w3-black">
  <a href="AdminhpmePage.php" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">Update</a>
  <a href="deletemodule.php" class="w3-bar-item w3-button">Delete</a>
  <a href="viewdepartments.php" class="w3-bar-item w3-button">View</a>
</div>
<form action="insertmodule.php" method="post" style="margin-left: 50px;margin-top: 20px">
		   <table>
		   <caption style="margin-top: 30px;margin-bottom: 30px"><b>Module Information</b></caption>
		    <tr>
		    	<td>Module ID:</td>
		    	<td><input type="id" name="mid" required placeholder=" Enter module-ID" style="width: 300px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
		     <tr>
		    	<td>Diploma ID:</td>
		    	<td><input type="text" name="did" required placeholder=" Enter diploma-ID" style="width: 300px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
		    <tr>
		    	<td>Module title;</td>
		    	<td><input type="text" name="mtitle" required placeholder="module title" style="width: 300px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
		     <tr>
		    	<td>max_credits:</td>
		    	<td><input type="number" name="mcredits" required placeholder="enter max number of credits" style="width: 300px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
		     <tr>
		    	<td>module_cordinators:</td>
		    	<td><input type="text" name="mcordinator" required placeholder="module cordinator id" style="width: 300px"/></td>
		    </tr>
		     
		      
		     <tr>
		    	
		    	<td><input type="submit" name="submit" value="Submit" style="width: 80px;height: 40px;background-color:dodgerblue"></td>
		    </tr>
			
			</table>
		
		</form>
	</div>
	<footer style="align:center">
     <p>&copy; Copyright  by Pasindu Senarath</p>
    </footer>
  </div>
</body>
    

</html>
