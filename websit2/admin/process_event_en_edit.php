<?php
	include 'check_session_login.php';
?>
<?php
	$servername = "localhost";
	$dbUsername = "root";
	$dbPassword = "admin";
	$dbname = "db_tu_py";
	$postText = $_POST['event-text-en'];
	$postDate = $_POST['date-en'];
	$postID = $_POST['id_event_en'];
	$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "UPDATE event_en SET text='".$postText."' , date='".$postDate."' WHERE id=".$postID;
	if ($conn->query($sql) === TRUE) {
		echo "<script>
					alert('Record Update successfully!');
					window.location='manage_event_en.php';</script>";
	} else {
		echo "<script>
					alert('Error Update record: ".$conn->error."');
					window.location='manage_event_en.php';</script>";
	}
	$conn->close();
	?>