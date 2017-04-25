<?php
	session_start();
	$username = $_POST['user'];
	$password = $_POST['pass'];
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
	    		$_SESSION["id"] = $row["id"];
				$_SESSION["username"] = $row["username"];
				$_SESSION["password"] = $row["password"];
				header("Location: index.php");
	    	}
	    }
		if ($valueCheck<=0){
			header("Location: fail.html");
		}
	} else {
	    echo "No result in Database";
	}
	$conn->close();
?>