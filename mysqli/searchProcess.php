<?php
    session_start();
    include 'koneksi.php';
    $nama = $_POST['nama'];
    $query = "select mahasiswa.nim as nim, mahasiswa.nama as nama,
    mahasiswa.alamat as alamat, jurusan.nama as jurusan
    from mahasiswa INNER JOIN jurusan
    ON mahasiswa.id_jur=jurusan.id_jur 
    where mahasiswa.nama like '$nama%'";
    $hasil = mysqli_query($koneksi, $query);
    if(mysqli_num_rows($hasil)!=0){
        echo "<script>alert('data ditemukan');</script>";
        $_SESSION['search'] = $query;
    }else{
        echo "<script>alert('data tidak ditemukan');</script>";
    }
    echo "<script>location='home.php';</script>";
?>