<?php
	$servername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "db_tu_py";
	$postText = $_POST['new-text-th'];
	$postDate = $_POST['date-th'];
	$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "INSERT INTO event_th (date, text)
	VALUES ('".$postDate."', '".$postText."');";
	if ($conn->multi_query($sql) === TRUE) {
		echo "<script>
				alert('Created Successfully!');
				window.location='event_th.php';</script>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
?>