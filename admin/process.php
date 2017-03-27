<?php
	
	$username = $_POST['user'];
	$password = $_POST['pass'];
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
	$sql = "SELECT username, password FROM users";
	$result = $conn->query($sql);
	$valueCheck = 0;
	if(isset($_POST['submit'])){
		if(empty($username)){
			echo "Please enter username!!<br>";
		}
		if(empty($password)){
			echo "  Please enter password!!<br>";
		}
	}
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	if ($row["username"]==$username&&$row["password"]==$password){
	    		$valueCheck+=1;
	    	}
	    }
		if ($valueCheck>0){
			header("Location: index.PHP");
		}else{
			header("Location: fail.html");
		}
	} else {
	    echo "No result in Database";
	}
	$conn->close();
?>