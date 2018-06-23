<?php
   
	include("dbconnect.php");
	error_reporting(0);
	
	$eid = $_POST["eid"];
	$mid =$_POST["mid"];
	$ename1 = $_POST["ename1"];
	$ename2 = $_POST["ename2"];
	$gender = $_POST["gender"];
	$dob = $_POST["dob"];
	$slr = $_POST["slr"];
	
	if($_POST["submit"]) {
		$sql = "INSERT INTO lectures VALUES ('$eid','$mid','$ename1','$ename2','$gender','$dob','$slr')";
		
		if(mysqli_query($dbconnect,$sql)) {
			echo "Inserted Data Successfully!";
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

  <title>lecture</title>
  <meta name="description" content="">
  <meta name="author" content="Pasindu Senarath">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
</head>

<body style="background-color: gray">
<div style="background-color: white;width: 400px;margin-top: 100px;margin-left:450px;height:500px">
	<div class="w3-bar w3-black">
  <a href="AdminhpmePage.php" class="w3-bar-item w3-button">Home</a>

  <a href="updatelecture.php" class="w3-bar-item w3-button">Update</a>
  <a href="deletelecture.php" class="w3-bar-item w3-button">Delete</a>
  <a href="viewlecture.php" class="w3-bar-item w3-button">View</a>
</div>
<form action="insertlecture.php" method="post" style="margin-left: 50px;margin-top: 10px">
		   <table>
		   <caption style="margin-top: 30px;margin-bottom: 30px"><b>Lecture Information</b></caption>
		    <tr>
		    	<td>Employee ID:</td>
		    	<td><input type="id" id ="eid" name="eid" required placeholder=" Enter employee-ID" style="width: 200px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
		     <tr>
		    	<td>Module ID:</td>
		    	<td><input type="null" name="mid" required placeholder=" Enter Module-ID" style="width: 200px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
		     <tr>
		    	<td>first Name:</td>
		    	<td><input type="text" name="ename1" required placeholder="Enter Employee First Name name" style="width: 200px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
		    <tr>
		    	<td>Last Name ;</td>
		    	<td><input type="text" name="ename2" required placeholder="Enter Employee  Last name" style="width: 200px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
		     <tr>
		    	<td>Gender :</td>
		    	<td><input type="mORf" name="gender" required placeholder="M or F" style="width: 200px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
		     <tr>
		    	<td>Date Of Birth:</td>
		    	<td><input type="text" name="dob" required style="width: 200px"/></td>
		    </tr>
		     <tr></tr>
		      <tr></tr>
		       <tr></tr>
		        <tr>
		    	<td>Salary :</td>
		    	<td><input type="text" name="slr" required style="width: 200px"/></td>
		    </tr>
		     <tr></tr>
		      <tr></tr>
		       <tr></tr>
		      
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
