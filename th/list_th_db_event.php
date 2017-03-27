<?php
	$servername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "db_tu_py";

	// Create connection
	$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "SELECT date, text FROM event_th";
	$result = $conn->query($sql);
	$valueCheck = 0;
	if ($result->num_rows > 0) {
		echo $row["text"].$row["name_img"];
	} else {
	    echo "No result in Database";
	}
	$conn->close();
?>