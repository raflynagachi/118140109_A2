<?php
    $server = "localhost";
    $user = "root";
    $pass = "password";
    $db = "kuliahPemweb";
    $koneksi = mysqli_connect($server, $user, $pass, $db)
    or die ("koneksi gagal");
?>