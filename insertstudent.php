<?php
   include("dbconnect.php");
	error_reporting(0);
	$stdid = $_POST['student_ID'];
	$fstnm = $_POST['user_Fname'];
	$lstnm = $_POST['user_Lname'];
	$dipid = $_POST['user_DPID'];
	$add1 = $_POST['user_address1'];
	$add2 = $_POST['user_address2'];
	$add3 = $_POST['user_address3'];
	
	
	if($_POST["submit"]) {
		$sql = "INSERT INTO students VALUES ('stdid','fstnm','lstnm','dipid','add1','sdd2','add3')";
		
		if(mysqli_query($dbconnect,$sql)) {
			
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

  <title>student</title>
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
  <a href="#" class="w3-bar-item w3-button">Update</a>
  <a href="deletestudent.php" class="w3-bar-item w3-button">Delete</a>
  <a href="viewstudent.php" class="w3-bar-item w3-button">View</a>
</div>
<form action="insertstudent.php" method="post" style="margin-left: 50px;margin-top: ">
		   <table>
		   <caption style="margin-top: 30px;margin-bottom: 30px"><b>Student Information</b></caption>
		    <tr>
		    	<td>Student ID:</td>
		    	<td><input type="text" name="student_ID" placeholder="  Enter Student-ID" style="width: 200px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
		     <tr>
		    	<td>First Name:</td>
		    	<td><input type="text" name="user_Fname" placeholder="  Enter Student-first name" style="width: 200px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
		     <tr>
		    	<td>Last Name:</td>
		    	<td><input type="text" name="user_Lname" placeholder="  Enter Student-Last name" style="width: 200px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
		    <tr>
		    	<td>Diploma ID;</td>
		    	<td> <input type="text" name="user_DPID" placeholder="  Enter Student-Diploma ID" style="width: 200px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
		     <tr>
		    	<td>Address Line1:</td>
		    	<td><input type="text" name="user_address1" placeholder="  Enter Address line 1" style="width: 200px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
		     <tr>
		    	<td>Address Line2:</td>
		    	<td><input type="text" name="user_address2" placeholder="  Enter Address line 2" style="width: 200px"/></td>
		    </tr>
		     <tr></tr>
		      <tr></tr>
		       <tr></tr>
		        <tr>
		    	<td>Address Line3 :</td>
		    	<td><input type="text" name="user_address3" placeholder="  Enter Address line 3" style="width: 200px"/></td>
		    </tr>
		     <tr></tr>
		      <tr></tr>
		       <tr></tr>
		      
		     <tr>
		    	
		    	<td><input type="submit" class="w3-button w3-blue" name="submit" value="Submit" style="width: 80px;height: 40px;background-color:dodgerblue"></td>
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
