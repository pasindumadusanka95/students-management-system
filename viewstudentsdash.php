<?php
    $con=mysqli_connect("localhost", "root","","computer");

	//mysql_connect(,) or die("Error Occures") ;
	//mysqli_select_db();
	//mysqli_select_db("computer") or die("Error Occures");
	$sql = "SELECT * FROM students ";
	$records = mysqli_query($con,$sql);
?>


<html>

	<head>
		<title>View Details of students</title>
		 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	
	<body style="background-color: gray">
<div style="background-color: white;width: 600px;margin-top: 100px;margin-left:400px;height:400px">
<div class="w3-bar w3-black">
  <a href="StudentHomePage.php" class="w3-bar-item w3-button">Home</a>
  <a href="Studentdashinsert.php" class="w3-bar-item w3-button">Back</a>
  <a href="viewstudents.html" class="w3-bar-item w3-button">View</a>
</div>

	
	<table  class="w3-table-all" width="1000" cellpadding="5" border="5" cellspacing="3">
		
			<tr  class="w3-gray">
			
				<th>Student_ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Diploma ID</th>
				<th>street number</th>
				<th>add 1</th>
				<th>add 2</th>
			</tr>
			
			<?php
			
				while($row = mysqli_fetch_assoc($records)){
				echo "<tr>";
				echo "<td>".$row['stdid']."</td>";
				echo "<td>".$row['fstnm']."</td>";
				echo "<td>".$row['lstnm']."</td>";
				echo "<td>".$row['dipid']."</td>";
				echo "<td>".$row['add1']."</td>";
				echo "<td>".$row['sdd2']."</td>";
				echo "<td>".$row['add3']."</td>";
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