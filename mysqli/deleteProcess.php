<?php
    include 'koneksi.php';
    $nim = $_POST['nim'];
    $query = "delete * from mahasiswa where nim=$nim";
    $hasil = mysqli_query($koneksi, $query);
?>