<?php
    include 'koneksi.php';
    $nama = $_POST['nama'];
    $query = "select * from mahasiwa where nama=$nama";
    $hasil = mysqli_query($koneksi, $query);
?>