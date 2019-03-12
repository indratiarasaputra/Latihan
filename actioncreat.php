<?php 
	include 'koneksi.php';


	session_start();
	$hari = $_POST['hari'];
	$film = $_POST['film'];
	$tayang = $_POST['tayang'];
	
	

	$tambah = mysqli_query($conn,"INSERT INTO blog VALUES(null,'$hari','$film','$tayang',null)");

		if ($tambah>0) {
			echo "Data anda berhasil ditambahkan";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " Untuk melihat hasil";
		}
		else {
			echo "Data anda gagal ditambahkan";
			echo "<br>";
			echo "klik ";
			echo "<a href='creat.php'>disini</a>";
		echo " Gan";

		}
	

 ?>