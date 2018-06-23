<?php
    $con=mysqli_connect("localhost", "root","","computer");

	//mysql_connect(,) or die("Error Occures") ;
	//mysqli_select_db();
	//mysqli_select_db("computer") or die("Error Occures");
	$sql = "SELECT * FROM lectures ";
	$records = mysqli_query($con,$sql);
?>

<html>

	<html>

	<head>
		<title>View Details of a lectures</title>
		 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	
	<body style="background-color: gray">
<div style="background-color: white;width: 900px;margin-top: 100px;margin-left:250px;height:400px">
<div class="w3-bar w3-black">
  <a href="AdminhpmePage.php" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">Update</a>
  <a href="deletelecture.php" class="w3-bar-item w3-button">Delete</a>
  <a href="viewlecture.php" class="w3-bar-item w3-button">View</a>
</div>

	
	<table  class="w3-table-all" width="1000" cellpadding="5" border="5" cellspacing="3">
		
			<tr  class="w3-gray">
			
				<th>Employee ID</th>
				<th>modules taught</th>
				<th>Lecture first name</th>
				<th>Lecture last name</th>
				<th>Gender</th>
				<th>DOB</th>
				<th>Salary</th>
			</tr>
			
			<?php
			
				while($row = mysqli_fetch_assoc($records)){
				echo "<tr>";
				echo "<td>".$row['eid']."</td>";
				echo "<td>".$row['mid']."</td>";
				echo "<td>".$row['ename1']."</td>";
				echo "<td>".$row['ename2']."</td>";
				echo "<td>".$row['gndr']."</td>";
				echo "<td>".$row['dob']."</td>";
				echo "<td>".$row['slr']."</td>";
				echo "</tr>";
			}
			echo "<table>";
			
			
			?>
		
		
		</table>
		
	</body>
</html>