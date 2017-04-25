<?php
	session_start();
	$servername = "localhost";
	$dbUsername = "root";
	$dbPassword = "admin";
	$dbname = "db_tu_py";

	// Create connection
	$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "SELECT id,username, password FROM users";
	$result = $conn->query($sql);
	$valueCheck = 0;
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	if ($row["id"]==$_SESSION["id"]&&$row["username"]==$_SESSION["username"]&&$row["password"]==$_SESSION["password"]){
	    		$valueCheck+=1;
	    	}
	    }
		if ($valueCheck<=0){
			header("Location: login.php");
		}
	} else {
	    echo "No result in Database";
	}
	$conn->close();
?>