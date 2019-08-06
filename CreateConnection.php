<?php 
	$servername = "db4free.net";
	$port = "3306";
	$username = "anhldgch17168";
	$password = "anhducle99";
	$dbname = "anhldgch17168";

	
	$conn = new mysqli($servername . ":". $port , $username, 
		$password, $dbname);
	
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}	 

	echo "done";

 ?>