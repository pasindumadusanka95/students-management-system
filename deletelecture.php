<?php
	
	include("dbconnect.php");
	error_reporting(0);
	
	$eid = $_POST["eid"];
	
	if($_POST["delete"]) {
		$sql = "DELETE FROM lectures WHERE eid=$eid";
		
		if(mysqli_query($dbconnect,$sql)) {
			echo "Deletion Successfully";
		}
		else {
			echo "Insert Employee ID";
		}
	}
	
	
?>

<html>

	<head>
	<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Deletelecture</title>
		<meta name="description" content="">
		<meta name="author" content="Pasindu Senarath">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>
	
	<body style="background-color: gray">
	<div style="background-color: white;width: 400px;margin-top: 100px;margin-left:450px;height:300px">
			<div class="w3-bar w3-black">
  <a href="AdminhpmePage.php" class="w3-bar-item w3-button">Home</a>
  
  <a href="insertlecture.php" class="w3-bar-item w3-button">Back</a>
  
</div>

		<form action="deletelecture.php" method="post"  style="margin-left: 30px;margin-top: 20px"4>
		<table>
		 <caption style="margin-top: 30px;margin-bottom: 30px"><b>Lecture Information</b></caption>
		  <tr>
		    	<td>Employee ID:</td>
		    	<td><input type="id" name="eid" required></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
	        <tr>
		    	
		    	<td><input type="submit" class="w3-btn w3-red" name="delete" value="Delete" style="width: 80px;height: 40px;" style="margin-bottom;50px;"></td>
		    </tr>
			</table>
		</form>
		</div>
		<div>

			<footer>
				<p>
					&copy; Copyright  by Pasindu Senarath
				</p>
			</footer>
		</div>
	</body>
</html>
