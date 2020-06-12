<?php
session_start();
if (empty($_SESSION['user']) OR empty($_SESSION['pass'])){
    header("Location:login.php");
} else {
    ?>
<html>
<head><title>Dashboard</title></head>
<body>
<center>
<h1>Dashboard</h1>
<h4><?php echo date("l, d F Y");?></h4>
<h3>Selamat Datang <?php echo $_SESSION['nama'];?></h3>
<h4>Terimakasih telah login<br>silahkan bisa isi data dibawah untuk login menggunakan
username dan password anda sendiri</h4>
<a href="user.php"> ingin lihat data </a>
<form method="post" action="tambahproses.php">
Username : <input type="text" name="user"> <br>
Password : <input type="password" name="pass"> <br>
Nama : <input type="text" name="nama"><br>
<input type="submit" value="Tambah">
<a href="logout.php">Logout</a>
</center>
</body>
</html>
<?php } ?>