<?php
    include 'koneksi.php';
    $nim = $_POST['nim'];
    $query = "delete * from mahasiswa where nim=$nim";
    $hasil = mysqli_query($koneksi, $query);
    if($hasil){
        echo "<script>alert('data terhapus');</script>";
    }else{
        echo "<script>alert('data tidak ditemukan');</script>";
    }
    echo "<script>location='home.php';</script>";
?>