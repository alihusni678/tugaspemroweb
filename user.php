<html>
<head><title>User</title></head>
<body>
<center>
<h1> Data </h1>
<?php
include "koneksi.php";

$query = "select * from user";
$hasil = mysqli_query($koneksi, $query);

echo "Semua data : <br>";
while($data=mysqli_fetch_array($hasil)){
    echo "$data[id_user]. $data[user] $data[pass] $data[nama] :: ";
    echo "<a href='edit.php?id=$data[id_user]'>Edit</a>|
    <a href='hapus.php?id=$data[id_user]'>Hapus<a/> <br>";
}
echo "<br>";
echo "<a href='dashboard.php'> Tambah Data di dashboard </a> <br>";
echo "<a href='login.php'> coba username dan password </a> <br>";
?>
</center>
</body>
</html>
