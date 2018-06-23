<?php
  
	$dbconnect = mysqli_connect("localhost", "root", "", "computer");
	if(mysqli_connect_errno()) {
		echo "Connecton failed:".mysqli_connect_errno();
		exit;
	}

?>