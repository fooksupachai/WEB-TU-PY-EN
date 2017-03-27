<!DOCTYPE html>
<html>
<head>
	<title>Manage Admin</title>
	<meta charset="UTF-8">
	<link href="css/styles.css" rel="stylesheet">
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
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
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
								<a href="login.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
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
                    <li class="current"><a href="new_th.php"><i class="fa fa-plus-square" aria-hidden="true"></i> New TH</a></li>
                    <li><a href="new_en.php"><i class="fa fa-plus-square" aria-hidden="true"></i> New EN</a></li>
 					<li><a href="event_th.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Event TH</a></li>
 					<li><a href="event_en.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Event EN</a></li>
                    <li><a href="event_en.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
			<div id="frm">
			<center><h1>New Thai</h1></center>
			<form action="process_new_th.php" method="POST" enctype="multipart/form-data">
				<div class="col-md-12">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<label>File</label>
		    			<input type="file" name="fileToUpload" id="fileToUpload">
						<label>New Text</label>
						<textarea class="form-control" name="new-text-th" id="new-text-th"></textarea><br>
						<div class="col-md-12">
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<input class="form-control" type="submit" value="Upload Image" name="submit">
							</div>
							<div class="col-md-4"></div>
						</div>
    					<br><br>
					</div>
					<div class="col-md-2"></div>
				</div>
			</form>
			</div>
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