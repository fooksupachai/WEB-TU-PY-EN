<?php
	include 'databaseViewEN.php';
?>
<!Doctype html>
<html>
<head>
	<title>CALENDAR</title>
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
						<a href="per.php">Personnel</a>
						<a href="about.html">About University</a>
						</div></li>
					<li ><a href = "#" >calendar</a>
					<li class="dropdown"><a href = "#" class="dropbtn">Department</a>
						 <div class="dropdown-content">
						 <a href="soft.html">SOFTWARE ENGINEERING</a>
						<a href="auto.html">AUTOMOTIVE ENGINEERING</a>
						</div></li>
					<li><a href = "life.html">life</a></li>
					<li><a href = "../th/calendar.php" ><img src="../img/tf.png" alt="thai" height="20px" width="35px"></a></li>
					<li><a href = "calendar.php" ><img src="../img/te.jpg" alt="eng" height="20px" width="35px"></a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section style="width:70%;margin-left:15%;">
  <table class="table table-hover" style="background:blanchedalmond;">
    <thead>
      <tr>
		<th>Years-Month-Day</th>
		<th>EVENT</th>
      </tr>
    </thead>
   	<tbody>
		<?php
	$objView = new databaseViewEN;
		$objView->viewEventEN();
	?>
	</tbody>
	</table>
	</section>
	

	

</body>

</html>