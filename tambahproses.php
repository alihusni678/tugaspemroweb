<?php
include "koneksi.php";

$user=$_POST['user'];
$pass=md5($_POST['pass']);
$nama=$_POST['nama'];

mysqli_query($koneksi,"insert into user(user,pass,nama) values('$user','$pass','$nama')");
header("Location:user.php");
?>