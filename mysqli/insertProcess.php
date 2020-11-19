<?php
    include 'koneksi.php';
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];
    $query = "insert into mahasiswa values (
        '$nim', '$nama', '$alamat', '$jurusan'
    )";
    $hasil = mysqli_query($koneksi, $query);
    if($hasil){
        echo "<script>alert('data disimpan');</script>";
    }else{
        echo "<script>alert('data gagal disimpan');</script>";
    }
    echo "<script>location='home.php';</script>";
?>