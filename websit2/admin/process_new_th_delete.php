<?php
	include 'check_session_login.php';
?>
<?php
	$servername = "localhost";
	$dbUsername = "root";
	$dbPassword = "admin";
	$dbname = "db_tu_py";
	$postID = $_POST['id_news_th'];
	$target_dir = "../uploads/news_th/";
	$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "DELETE FROM news_th WHERE id=".$postID;
	if ($conn->query($sql) === TRUE) {
		if (array_key_exists('name_file_img', $_POST)) {
 			$filename = $_POST['name_file_img'];
			if (file_exists($target_dir.$filename)) {
			    unlink($target_dir.$filename);
			    echo "<script>
					alert('File".$filename."has been deleted.');</script>";
			} else {
				echo "<script>alert('Could not delete".$filename.", file does not exist.');</script>";
			}
		}
		echo "<script>
					alert('Record deleted successfully!');
					window.location='manage_new_th.php';</script>";
	} else {
		echo "<script>
					alert('Error deleting record: ".$conn->error."');
					window.location='manage_new_th.php';</script>";
	}
	$conn->close();
?>