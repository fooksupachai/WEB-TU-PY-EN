<?php
	include 'check_session_login.php';
	include 'database_view_manage.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Admin</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="CSS/styles.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Thammasat Pattaya Admin Panel</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       
	                       <span class="input-group-btn">
	                         
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
															<a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>

	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="new_th.php"><i class="fa fa-plus-square" aria-hidden="true"></i> News TH</a></li>
                    <li><a href="new_en.php"><i class="fa fa-plus-square" aria-hidden="true"></i> News EN</a></li>
                    <li><a href="event_th.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Event TH</a></li>
 					<li><a href="event_en.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Event EN</a></li>
 					<li><a href="per_th.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Per TH</a></li>
 					<li><a href="per_en.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Per EN</a></li>
 					<li><a href="manage_new_th.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Manage News TH</a></li>
 					<li><a href="manage_new_en.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Manege News EN</a></li>
 					<li class="current"><a href="manage_per_th.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Manege Per TH</a></li>
 					<li class="current"><a href="manage_per_en.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Manege 
 					Per EN</a></li>
 					<li><a href="manage_event_th.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Manege event th</a></li>
 					<li><a href="manage_event_en.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Manege event en</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
			<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>Text</th>
			       	<th>Image</th>
			        <th>Edit</th>
			        <th>Delete</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php
					$objView = new databaseViewManage;
			   			$objView->managePerEN();
					?>
			    </tbody>
			  </table>
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
              Website Thammasat University Pattaya Campus
            </div>
            
         </div>
      </footer>
</body>
</html>