<html>

	<head>
		<title>check your marks!!</title>
	</head>

	<body>
		<br></br>
		<br></br>
		<form action="viewstdmarks.php" method="POST">
		
			student id no:<input type="id" name="sid" required placeholder=" Enter student no"/><br/>
			<br></br>
			module id no:<input type="id" name="mid" required placeholder=" Enter module no"/><br/>
			<br></br>
			semester id no:<input type="id" name="semid" required placeholder=" Enter semester no"/><br/>
			<br></br>
			<input type="submit" name="submit" value="Submit">
		
		</form>
	</body>
</html>

<?php
	include("dbconnect.php");
	error_reporting(0);
	
	$sid =$_POST["sid"];
	$mid= $_POST["mid"];
	$semid=$_POST["semid"];
	
	
	if($_POST["submit"]) {
		$sql = "SELECT * FROM departments WHERE did=$sid AND  mid=$mid AND semester_ID=$semid";
		$records = mysql_query($sql);
	}	
?>
<html>

	<head>
		<title>View Details of a modules</title>
	</head>
	
	<body>
	
	<table width="1000" cellpadding="5" border="5" cellspacing="3">
		
			<tr>
			
				<th>Student_ID</th>
				<th>module ID</th>
				<th>semester ID</th>
				<th>grade recieved</th>
				
				
			</tr>
			
			<?php
			
				while($row = mysqli_fetch_assoc($records)){
				echo "<tr>";
				echo "<td>".$row['student_ID']."</td>";
				echo "<td>".$row['module_ID']."</td>";
				echo "<td>".$row['semester_ID']."</td>";
				echo "<td>".$row['grd']."</td>";
				
				echo "</tr>";
			}
			echo "<table>";
			
			?>
		
		
		</table>
		
	 </div>
  <div>
    <footer>
     <p>&copy; Copyright  by Pasindu Senarath</p>
    </footer>
  </div>
 
</body>
</html>