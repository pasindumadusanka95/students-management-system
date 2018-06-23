<?php

	include("dbconnect.php");
	error_reporting(0);
	
	$eid = $_POST["eid"];
	$column = $_POST["column"];
	$data = $_POST["data"];
	
	if($_POST["update"]) {
		$sql = "UPDATE student SET $column = '$data' WHERE eID=$eid";
		
		if(mysqli_query($dbconnect,$sql)) {
			echo "Update Successfully";
		}
		else {
			
		}
	}
	
?>

<html>

	<head>
		<meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Update data</title>
  <meta name="description" content="">
  <meta name="author" content="Pasindu Senarath">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body style="background-color: gray">
<div style="background-color: white;width: 400px;margin-top: 100px;margin-left:450px;height:400px">
<div class="w3-bar w3-black">
  <a href="AdminhpmePage.php" class="w3-bar-item w3-button">Home</a>
  <a href="insertstudent.php" class="w3-bar-item w3-button">Back</a>
  <a href="deletestudent.php" class="w3-bar-item w3-button">Delete</a>
  <a href="viewstudent.php" class="w3-bar-item w3-button">View</a>
</div>
	
		<form action="updatestudent.php" method="POST" style="margin-left: 30px;margin-top: 20px">		
			<table>
		 <caption style="margin-top: 30px;margin-bottom: 30px"><b>Update Information</b></caption>
		  <tr>
		    	<td>Student ID: </td>
		    	<td><input type="id" name="eid" required placeholder="Enter the student ID" style="width: 200px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
		       <tr>
		    	<td>Update field: </td>
		    	<td><input type="text" name="column" required placeholder="select what attribute to update"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
		       <tr>
		    	<td>New data:   </td>
		    	<td><input type="text" name="data" required placeholder="enter the new Data" style="width: 200px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
			
			<tr>
		    	
		    	<td><input type="submit" name="update" class="w3-btn w3-orange" value="Update" style="width: 80px;height: 40px;" style="margin-bottom;50px;" ></td>
		    </tr>
			
			</table>
		</form>
		
	</div>
	</div>
	
  <div>
  	
    <footer>
     <p>&copy; Copyright  by Pasindu Senarath</p>
    </footer>
  </div>
 
</body>
</html>
