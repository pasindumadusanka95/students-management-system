<?php
    $con=mysqli_connect("localhost", "root","","computer");

	//mysql_connect(,) or die("Error Occures") ;
	//mysqli_select_db();
	//mysqli_select_db("computer") or die("Error Occures");
	$sql = "SELECT * FROM diploma ";
	$records = mysqli_query($con,$sql);
?>

<html>

	<head>
		<title>View Details of Diplomas</title>
		 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	
	<body style="background-color: gray">
<div style="background-color: white;width: 600px;margin-top: 100px;margin-left:400px;height:400px">
<div class="w3-bar w3-black">
  <a href="StudentHomePage.php" class="w3-bar-item w3-button">Home</a>

  <a href="#" class="w3-bar-item w3-button">View</a>
</div>

	
	<table  class="w3-table-all" width="1000" cellpadding="5" border="5" cellspacing="3">
		
			<tr  class="w3-gray">
			
				<th> Diploma ID</th>
				<th>diploma Name</th>
				<th>module ID</th>
				
			</tr>
			
			<?php
			
				while($row = mysqli_fetch_assoc($records)){
				echo "<tr>";
				echo "<td>".$row['dipid']."</td>";
				echo "<td>".$row['dname']."</td>";
				echo "<td>".$row['semid']."</td>";
				
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