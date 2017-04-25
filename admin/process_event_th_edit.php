<?php
	include 'check_session_login.php';
?>
<?php
	$servername = "localhost";
	$dbUsername = "root";
	$dbPassword = "admin";
	$dbname = "db_tu_py";
	$postText = $_POST['event-text-th'];
	$postDate = $_POST['date-th'];
	$postID = $_POST['id_event_th'];
	$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "UPDATE event_th SET text='".$postText."' , date='".$postDate."' WHERE id=".$postID;
	if ($conn->query($sql) === TRUE) {
		echo "<script>
					alert('Record Update successfully!');
					window.location='manage_event_th.php';</script>";
	} else {
		echo "<script>
					alert('Error Update record: ".$conn->error."');
					window.location='manage_event_th.php';</script>";
	}
	$conn->close();
	?>