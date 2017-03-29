<!Doctype html>
<html>
<head>
	<title>คณะวิศวกรรมศาสตร์  ศูนย์พัทยา</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../CSS/index.css">
	<link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body >
<a href="../index.html"><img src="https://goo.gl/Yl6KNg" class="black-ribbon stick-top stick-left"/></a>
<img src="https://goo.gl/EMCghL" class="black-ribbon stick-top stick-right"/>
	<header>
		<div id = "headers">
			<a href = "index.php" id = "logo"></a>
			<nav>
				<a href = "#" id = "menu-icon"></a>
				<ul>
					<li><a href = "index.php" >หน้าหลัก</a></li>
					
					<li class="dropdown"><a href = "#" class="dropbtn">ข้อมูลทั่วไป</a>
						 <div class="dropdown-content">
						 <a href="history.html">ประวัติ</a>
						<a href="map.html">แผนที่</a>
						<a href="per.php">บุคลากร</a>
						<a href="about.html">เกี่ยวกับ</a>
						</div></li>
					
					<li ><a href = "calendar.php" >ตารางกิจกรรม</a>
					
						<li class="dropdown"><a href = "#" class="dropbtn">ภาควิชา</a>
						 <div class="dropdown-content">
						 <a href="soft.html">วิซวกรรมซอฟเเวร์</a>
						<a href="auto.html">วิศวกรรมยานยนต์</a>
						</div></li>
					<li><a href = "life.html">ชีวิตนักศึกษา</a></li>
					<li><a href = "index.php" ><img src="../img/tf.png" alt="thai" height="20px" width="35px"></a></li>
					<li><a href = "../en/index.php" ><img src="../img/te.jpg" alt="eng" height="20px" width="35px"></a></li>					
				</ul>
			</nav>
		</div>
		
	</header>
	<section class="image_back1">
		<br>
		
			<h1>คณะวิศวกรรมศาสตร์</h1>
			<br>
			<h2>ศูนย์พัทยา</h2>
		
	</section>
	<article>
		<img src="../img/news.png " width="45px" height="45px" class="news" id="news_pic">
		<h3 class="news">ข่าวสารคณะวิศวกรรมศาสตร์ มหาวิทยาลัยธรรมศาสตร์ ศูนย์พัทยา</h3>
	</article>
	<br><br><br><br>
	
	<section >
	<?php
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
	$sql = "SELECT text, name_img FROM news_th";
	$result = $conn->query($sql);
	$valueCheck = 0;
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	echo '<div  style="margin:50px;" >
	    	<div ><img src="../uploads/news_th/'.$row["name_img"].'" width="200px" height="200px" id="l1"><br></div>
	    	<div  style="color:white;margin-top:10px;font-size:20px;" >
	    	'.$row["text"].'
	    	</div>
	    	</div><br><br><br><br>';	    
	    }	
	} else {
	    echo "No result in Database";
	}
	$conn->close();
	?>	<br><br><br>
	</section>
	
	<div style="text-align:center">
		<a href="https://www.facebook.com/tupattaya/" target="_blank"><i class="fa fa-facebook-square" style="font-size:48px;color:#3760f0"></i>.......</a>
		<a href="https://twitter.com/hashtag/%E0%B8%97%E0%B8%B5%E0%B8%A1%E0%B8%A1%E0%B8%98" target="_blank"><i class="fa fa-twitter-square" style="font-size:48px;color:#8399ea"></i>.......</a>
		<a href="https://www.youtube.com/watch?v=Odg650AdKw0" target="_blank"><i class="fa fa-youtube-square" style="font-size:48px;color:red"></i></a>
	</div>
	<br><br>

	</body>

</html>