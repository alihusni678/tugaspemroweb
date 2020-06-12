<?php
include "koneksi.php";

$id=$_POST['id'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$nama=$_POST['nama'];
mysqli_query($koneksi, "update user set user = '$user', pass = '$pass', nama = '$nama' where id_user = '$id'");
header("Location:user.php");
?>