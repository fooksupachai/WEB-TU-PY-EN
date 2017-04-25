<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
</head>
<body> 
		<div id="frm">
		<center><h1>LOGIN</h1></center>
		<form id="form-login" action="process.php" method="POST">
			<label>Username</label>
			<input type="text" id="user-login" class="form-control" name="user">
			<span style="visibility: hidden;text-align: center;font-size:0.8em;color:red;" id="no-username">Please enter username!!</span ><br>
			<label>Password</label>
			<input type="password" id="pass-login" class="form-control" name="pass">
			<span style="visibility: hidden;text-align: center;font-size:0.8em;color:red;" id="no-password">Please enter password!!</span><br>
			<button type="button" id="submit-login" class="btn">Login</button>
		</form>
		</div>
</body>
<script type="text/javascript">
	var form = document.getElementById("form-login");
	document.getElementById("submit-login").addEventListener("click", function () {
		var username = document.getElementById("user-login").value;
		var password = document.getElementById("pass-login").value;
		if (username=="") {
			document.getElementById("no-username").style.visibility = "visible"
		}else{
			document.getElementById("no-username").style.visibility = "hidden"
		}
		if(password==""){
			document.getElementById("no-password").style.visibility = "visible";
		}else{
			document.getElementById("no-password").style.visibility = "hidden"
		}
		if (username&&password) {
			form.submit();
		}
	});
</script>
</html>