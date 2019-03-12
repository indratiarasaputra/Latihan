<?php 
include 'koneksi.php';
session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Article</title>
</head>
<style>
body{background-color : grey;}
</style>
<body>
<center>
	<br><br>
 	<form method="POST" action="actioncreat.php">
 		<input type="hidden" name="waktu">
 		Hari	: 
		<input type="text" name="hari" placeholder="hari">
		<br>
		<br>
		Film	:
		<textarea type="text" name="film" placeholder="film"></textarea>
		<br>
		<br>
		Jam Tayang	:
		<input type="text" name="tayang" placeholder="Jam">
		<br>
		<br>
		<input type="submit" name="submit">
 	</form>
	</center>
</body>
</html>