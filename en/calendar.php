<!Doctype html>
<html>
<head>
	<title>ตารางกิจกรรม</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../CSS/calendar.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
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
					<li><a href = "index.php" >Home</a></li>
					<li class="dropdown"><a href = "#" class="dropbtn">Infomation</a>
						 <div class="dropdown-content">
						 <a href="history.html">History</a>
						<a href="map.html">Map</a>
						<a href="personnel.html">Personnel</a>
						<a href="about.html">About University</a>
						</div></li>
					<li ><a href = "#" >calendar</a>
					<li class="dropdown"><a href = "#" class="dropbtn">Department</a>
						 <div class="dropdown-content">
						 <a href="soft.html">SOFTWARE ENGINEERING</a>
						<a href="auto.html">AUTOMOTIVE ENGINEERING</a>
						</div></li>
					<li><a href = "life.html">life</a></li>
					<li><a href = "index.php" ><img src="../img/tf.png" alt="thai" height="20px" width="35px"></a></li>
					<li><a href = "../en/index.php" ><img src="../img/te.jpg" alt="eng" height="20px" width="35px"></a></li>
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
	$sql = "SELECT date, text FROM event_en";
	$result = $conn->query($sql);
	$valueCheck = 0;
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
			echo "<tr>
				<td>".$row["date"]."</td>
				<td>".$row["text"]."</td>
			</tr>";	    
	    }	
	} else {
	    echo "No result in Database";
	}
	$conn->close();
	?>
	</tbody>
	</table>
	</section>
	

	

</body>

</html>