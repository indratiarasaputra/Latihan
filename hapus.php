<?php 
include 'koneksi.php';
session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }

$id = $_GET["id"];

if (hapus($id)>0) {
			echo "Data telah berhasil dihapus";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " Untuk melihat hasil";
		}
	else
	{
			echo "Data gagal dihapus";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " Untuk melihat hasil";
		}
	


 ?>