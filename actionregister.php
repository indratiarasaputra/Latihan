<?php 
	include 'koneksi.php';
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email =  $_POST['email'];

	$result = mysqli_query($conn,"INSERT INTO user VALUES(null,'$username','$password','$email')");

	//copy sampe sini btw ini dicopy dari action login




	if ($result) {
		echo "Sudah Bisa Masuk Gan";
		echo("<br>");
		echo "login ";
		echo "<a href='register.php'>disini</a>";
		echo " Gan";
	}
	else {
		echo "Gagal Login Gan ";
		echo "<a href='formregister.php'> Try Agaian Gan</a>";
	}


?>