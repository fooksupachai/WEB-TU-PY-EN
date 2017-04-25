<?php
	include 'check_session_login.php';
?>
<?php
	$servername = "localhost";
	$dbUsername = "root";
	$dbPassword = "admin";
	$dbname = "db_tu_py";
	$postText = $_POST['new-text-en'];
	$postID = $_POST['id_news_en'];
	$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "UPDATE news_en SET text='".$postText."' WHERE id=".$postID;
	if ($conn->query($sql) === TRUE) {
		echo "<script>
					alert('Record Update successfully!');
					window.location='manage_new_en.php';</script>";
	} else {
		echo "<script>
					alert('Error Update record: ".$conn->error."');
					window.location='manage_new_en.php';</script>";
	}
	$conn->close();
	?>