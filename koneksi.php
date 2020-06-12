<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "tugas";
// Koneksi dan memilih database di server
$koneksi = mysqli_connect($server, $username,$password, $database)or die(mysqli_connect_error());
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>