<?php
include "koneksi.php";
$user=$_POST['user'];
$pass=md5($_POST['pass']);
$login=mysql_query("SELECT * FROM user WHERE user='$user' AND pass='$pass'");
$jumlah=mysql_num_rows($login);
$x=mysql_fetch_array($login);
if($jumlah == 1){
    session_start();
    $_SESSION[user]=$x[user];
    $_SESSION[pass]=$x[pass];
    $_SESSION[nama]=$x[nama];
    header("Location:dashboard.php");
}
else{
    header("Location:login.php");
}
?>