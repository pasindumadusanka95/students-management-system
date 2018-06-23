<?php
   include("dbconnect.php");
	error_reporting(0);
	
	$did =$_POST["did"];
	$dname= $_POST["dname"];
	$mid = $_POST["mid"];
	
	
	if($_POST["submit"]) {
		$sql = "INSERT INTO departments VALUES ('$did','$dname','$mid')";
		
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

  <title>department</title>
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
  
  <a href="deletedepartment.php" class="w3-bar-item w3-button">Delete</a>
  <a href="viewdepartments.php" class="w3-bar-item w3-button">View</a>
</div>

 <form action="insertdepartment.php" method="post" style="margin-left: 30px;margin-top: 20px">
        <table>
		 <caption style="margin-top: 30px;margin-bottom: 30px"><b>Department Information</b></caption>
		  <tr>
		    	<td>Department ID:</td>
		    	<td><input type="text" name="did" required placeholder=" Enter departments-ID" style="width: 200px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
		       <tr>
		    	<td>Department Name:</td>
		    	<td><input type="text" name="dname" required placeholder=" Enter department-Name" style="width: 200px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
				<tr>
		    	<td>Module ID:</td>
		    	<td><input type="text" name="mid" required placeholder="module-ID" style="width: 200px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
			<tr>
		    	
		    	<td><input type="submit" class="w3-btn w3-blue" name="submit" value="Submit" style="width: 80px;height: 40px;background-color:dodgerblue" style="margin-bottom;50px;"></td>
		    </tr>
			
			
			</table>
		
		</form>
		
 </div>
  <div>
    <footer>
     <p>&copy; Copyright  by Pasindu Senarath</p>
    </footer>
  </div>
 
</body>
</html>
