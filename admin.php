<?php 
include 'koneksi.php';
  session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }
  $tampil = query ("SELECT * FROM blog");
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>CRUD</title>
</head>
<style>
body{background-color : grey;}
</style>
<body>

<center>
  <br>
<button><a href="creat.php">Tambah</a></button>
<button><a href="logout.php">Logout</a></button>
<br><br>
    <h2>HALAMAN ADMIN</h2>
  <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>No</th>
    <th>Hari</th>
    <th>Film</th>
    <th>Jam Tayang</th>
    <th>last Update</th>
    <th>Option</th>
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td><?= $x["hari"];?></td>
    <td><?= $x["film"];  ?></td>
	<td><?= $x["tayang"];  ?></td>
    <td><?= $x["waktu"];  ?></td>
    <td>
      <center><button><a href="ubah.php?id=<?= $x["id"]?>">Ubah</a></button><br><br><button><a href="hapus.php?id=<?= $x["id"]?>" onclick =" return confirm ('Nggak nyesel kalo dihapus?');">Hapus</a></button></center>
    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

<br>
</center>
  </body>
</html>
