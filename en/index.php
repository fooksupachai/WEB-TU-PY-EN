<?php
	include 'databaseViewEN.php';
?>
<!Doctype html>
<html>
<head>
	<title>Faculty of Engineering Pattaya</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
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
			<a href="../index.html"><img src="https://goo.gl/Yl6KNg" class="black-ribbon stick-top stick-left"/></a>
    <img src="https://goo.gl/EMCghL" class="black-ribbon stick-top stick-right"/>
		<div id = "headers">
			<a href = "index.php" id = "logo"></a>
			<nav>
				<a href = "#" id = "menu-icon"></a>
				<ul>
					<li><a href = "#" >Home</a></li>
					<li class="dropdown"><a href = "#" class="dropbtn">Information</a>
						 <div class="dropdown-content">
						 <a href="history.html">History of University</a>
						<a href="map.html">Map</a>
						<a href="per.php">Personnel</a>
						<a href="about.html">About University</a>
						</div></li>
					<li ><a href = "calendar.php" >calendar</a>
						<li class="dropdown"><a href = "#" class="dropbtn">Department</a>
						 <div class="dropdown-content">
						 <a href="soft.html">SOFTWARE ENGINEERING</a>
						<a href="auto.html">AUTOMOTIVE ENGINEERING</a>
						</div></li>
					<li><a href = "life.html">life</a></li>
					
					<li><a href = "../th/index.php" ><img src="../img/tf.png" alt="thai" height="20px" width="35px"></a></li>
					<li><a href = "#" ><img src="../img/te.jpg" alt="thai" height="20px" width="35px"></a></li>
					
				</ul>
			</nav>
		</div>
	</header>
	<section class="image_back1">
		<br>
		
			<h1>Faculty of Engineering</h1>
		
			<h2 id="sss">Pattaya Campus</h2>
		
	</section>
	<article>
		<img src="../img/news.png " width="45px" height="45px" class="news" id="news_pic">
		<h3 class="news">Faculty of Engineering Thammasat University Pattaya Campus News</h3>
	</article>
	<br><br><br><br>
	
	<section >
	<?php
	$objView = new databaseViewEN;
		$objView->viewNewsEN();
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