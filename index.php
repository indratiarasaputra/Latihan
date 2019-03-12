<?php 
include 'koneksi.php';
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
    <h2>Selamat Datang Di Bioskop Nyempene</h2>
  <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>No</th>
    <th>Hari</th>
    <th>Film</th>
	<th>Jam Tayang</th>
    <th>Last Update</th>
    <th>Option</th>
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td><?= $x["hari"]; ?></td>
    <td><?= $x["film"]; ?></td>
	<td><?= $x["tayang"];  ?></td>
    <td><?= $x["waktu"]; ?></td>
    <td>
      <a href="register.php">Ubah</a> | <a href="register.php">Hapus</a>
    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
</center>
  </body>
</html>
