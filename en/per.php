<!Doctype html>
<html>
<head>
	<title>PERSONNEL</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../CSS/index.css">
	<link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="background: url(../img/back1.jpg); background-size: cover;" >
<a href="../index.html"><img src="https://goo.gl/Yl6KNg" class="black-ribbon stick-top stick-left"/></a>
<img src="https://goo.gl/EMCghL" class="black-ribbon stick-top stick-right"/>
	<header>
		<div id = "headers">
			<a href = "index.php" id = "logo"></a>
			<nav>
				<a href = "#" id = "menu-icon"></a>
				<ul>
					<li><a href = "index.php" >HOME</a></li>
					
					<li class="dropdown"><a href = "#" class="dropbtn">Infomation</a>
						 <div class="dropdown-content">
						 <a href="history.html">History</a>
						<a href="map.html">Map</a>
						<a href="per.php">Personnel</a>
						<a href="about.html">About</a>
						</div></li>
					
					<li ><a href = "calendar.php" >Calendar</a>
					
						<li class="dropdown"><a href = "#" class="dropbtn">Department</a>
						 <div class="dropdown-content">
						 <a href="soft.html">SOFTWARE ENGINEERING</a>
						<a href="auto.html">AUTOMOTIVE ENGINEERING</a>
						</div></li>
					<li><a href = "life.html">life</a></li>
					<li><a href = "../th/per.php" ><img src="../img/tf.png" alt="thai" height="20px" width="35px"></a></li>
					<li><a href = "per.php" ><img src="../img/te.jpg" alt="eng" height="20px" width="35px"></a></li>					
				</ul>
			</nav>
		</div>
		
	</header>
	<div style="margin:50px; background: #907c7c; ">
	<h1 style="color: white;">PERSONNEL</h1>
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
	$sql = "SELECT text, name_img FROM per_en";
	$result = $conn->query($sql);
	$valueCheck = 90;
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	echo '<div  style="margin:50px;" >
	    	<div ><img src="../uploads/per_en/'.$row["name_img"].'" width="200px" height="200px" id="l1"><br></div>
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
	
	</div>
	

	</body>

</html>