<html>
<head><title>Edit Data</title></head>
<body>
<center>
<?php
include "koneksi.php";
$id=$_GET['id'];
$data=mysqli_query($koneksi, "select * from user where id_user='$id'");
$d=mysqli_fetch_array($data);
?>
<h1>Edit Data</h1>
<form method="post" action="editproses.php">
Username : <input type="text" name="user" value="<?=$d['user']?>"> <br>
Password : <input type="text" name="pass" value="<?=$d['pass']?>"> <br>
Nama : <input type="text" name="nama" value="<?=$d['nama']?>"> <br>
<input type="hidden" name="id" value="<?=$d['id_user']?>">
<input type="submit" value="Edit">
<a href="user.php">Batal</a>
</form>
</center>
</body></html>