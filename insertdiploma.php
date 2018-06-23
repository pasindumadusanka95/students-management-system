<?php
	include("dbconnect.php");
	error_reporting(0);
	
	$did =$_POST["did"];
	$dname= $_POST["dname"];
	$sid = $_POST["semid"];
	
	
	if($_POST["submit"]) {
		$sql = "INSERT INTO diploma VALUES ('$did','$dname','$sid')";
		
		if(mysqli_query($dbconnect,$sql)) {
		echo "Inserted Data successfully..!!";	
		}
		else {
			echo "Insert Data";
		}
	
	}

?>
<html>

	<head>
		<meta name="description" content="">
  <meta name="author" content="Pasindu Senarath">
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
  <a href="#" class="w3-bar-item w3-button">Update</a>
  <a href="deletediploma.php" class="w3-bar-item w3-button">Delete</a>
  <a href="viewdiploma.php" class="w3-bar-item w3-button">View</a>
</div>
<form action="insertdiploma.php" method="post" style="margin-left: 50px;margin-top: 10px">
		   <table>
		   <caption style="margin-top: 30px;margin-bottom: 30px"><b>Diploma Information</b></caption>
		    <tr>
		    	<td>Diploma ID:</td>
		    	<td><input type="text" name="did" required placeholder=" Enter diploma-ID" style="width: 200px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
		     <tr>
		    	<td>Diploma Name:</td>
		    	<td><input type="text" name="dname" required placeholder=" Enter diploma-Name" style="width: 200px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
		     <tr>
		    	<td>Semester ID:</td>
		    	<td><input type="text" name="semid" required placeholder="Enter Semester ID" style="width: 200px"/></td>
		    </tr>
		    <tr></tr>
		     <tr></tr>
		      <tr></tr>
		      <tr></tr>
		     <tr></tr>
		    
		    
		      
		     <tr>
		    	
		    	<td><input type="submit" class="w3-btn w3-blue" name="submit" value="Submit" style="width: 80px;height: 40px;background-color:dodgerblue"></td>
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
