<?php 
	include 'koneksi.php';
	session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }

	$id = $_GET["id"];

	$ubah = query("SELECT * FROM blog WHERE id = $id")[0];


	if (isset($_POST["submit"])) {
		if (ubah ($_POST) > 0){
			echo "Data telah berhasil diubah";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " Untuk melihat hasil";
		}
		else{
			echo "Data gagal diubah";
			echo "<br>";
			echo "klik ";
			echo "<a href='creat.php'>disini</a>";
			echo " Gan";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit articel</title>
</head>
<style>
body{background-color : grey;}
</style>
<body>
<center>
	<br><br><!-- 
	<?php $waktu = date_default_timezone_set('Asia/Jakarta');  ?> -->

 	<form method="POST" action="">
 		<input type="hidden" name="id" value="<?= $ubah["id"]?>">
 		<br>
 		Hari : 
		<input name="hari" value="<?= $ubah["hari"]?>">
		<br>
		<br>
		Film : 
		<textarea type="text" name="film" placeholder="Film" value="<?= $ubah["film"]?>"></textarea>
		<br>
		<br>
		Jam Tayang	:
		<input name="tayang"  value="<?= $ubah["tayang"]?>">
		<br><br>
		<input type="submit" name="submit"">
 	</form>
	</center>
</body>
</html>