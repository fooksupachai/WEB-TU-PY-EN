<?php
	include 'check_session_login.php';
?>
<?php
	$servername = "localhost";
	$dbUsername = "root";
	$dbPassword = "admin";
	$dbname = "db_tu_py";
	$postID = $_POST['id_event_en'];
	$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "DELETE FROM event_en WHERE id=".$postID;
	if ($conn->query($sql) === TRUE) {
		echo "<script>
					alert('Record deleted successfully!');
					window.location='manage_event_en.php';</script>";
	} else {
		echo "<script>
					alert('Error deleting record: ".$conn->error."');
					window.location='manage_event_en.php';</script>";
	}
	$conn->close();
?>