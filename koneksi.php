<?php
$host = "localhost";
$user = "root";
$password = "password";
$db = "kuliahPemweb";

$kon = mysqli_connect($hot, $user, $password, $db);
if(!$kon){
    die("Koneksi gagal:".mysqli_connect_error());
}
?>