<?php
	include 'databaseViewTH.php';
?>
<!Doctype html>
<html>
<head>
	<title>ตารางกิจกรรม</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../CSS/calendar.css">
	<link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
</head>
<body class="image_back1">
<img src="https://goo.gl/Yl6KNg" class="black-ribbon stick-top stick-left"/>
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
					<li ><a href = "#" >ตารางกิจกรรม</a>
					<li class="dropdown"><a href = "#" class="dropbtn">ภาควิชา</a>
						 <div class="dropdown-content">
						 <a href="soft.html">วิซวกรรมซอฟเเวร์</a>
						<a href="auto.html">วิศวกรรมยานยนต์</a>
						</div></li>
					<li><a href = "life.html">ชีวิตนักศึกษา</a></li>
					<li><a href = "calendar.html" ><img src="../img/tf.png" alt="thai" height="20px" width="35px"></a></li>
					<li><a href = "../en/calendar.php" ><img src="../img/te.jpg" alt="eng" height="20px" width="35px"></a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section style="width:70%;margin-left:15%;">
  <table class="table table-hover" style="background:blanchedalmond;">
    <thead>
      <tr>
		<th>ปี พ.ศ.-เดือน-วัน</th>
		<th>กิจกรรม</th>
      </tr>
    </thead>
   	<tbody>
		<?php
		$objView = new databaseViewTH;
		$objView->viewEventTH();
	?>
	</tbody>
	</table>
	</section>
	

	

</body>

</html>