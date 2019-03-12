<?php 
	session_start();
	if (isset($_SESSION['login'])) {
		header("location : admin.php");
		exit;
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<style>
body{background-color : grey;}
</style>
<body>
<center>
 <div class="row">
  <div class="col-md-6 col-md-offset-3">

 	Login <br><br>
 	<form method="POST" action="actionlogin.php">
 		Username	: 
		<input type="text" name="username" placeholder="username">
		<br>
		<br>
		Password	:
		<input type="password" name="password" placeholder="password">
		<br>
		<br>
		<input type="submit" name="masuk">
 	</form>
 		<br><br> <h3>Mau Membuat Akun?</h3> <button><a href="formregister.php"> Sign Up</a></button>
 </div>
</div>
</center>
</body>
</html>