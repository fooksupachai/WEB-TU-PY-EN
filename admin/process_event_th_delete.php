<?php
	include 'check_session_login.php';
?>
<?php
	$servername = "localhost";
	$dbUsername = "root";
	$dbPassword = "admin";
	$dbname = "db_tu_py";
	$postID = $_POST['id_event_th'];
	$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "DELETE FROM event_th WHERE id=".$postID;
	if ($conn->query($sql) === TRUE) {
		echo "<script>
					alert('Record deleted successfully!');
					window.location='manage_event_th.php';</script>";
	} else {
		echo "<script>
					alert('Error deleting record: ".$conn->error."');
					window.location='manage_event_th.php';</script>";
	}
	$conn->close();
?>