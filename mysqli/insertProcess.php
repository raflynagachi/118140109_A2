<?php
    include 'koneksi.php';
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];
    $search_id_jur = "select id_jur from jurusan where
    nama=$jurusan";
    $query = "insert into mahasiswa values (
        '$nim', '$nama', '$alamat', '$search_id_jur'
    )";
    $hasil = mysqli_query($koneksi, $query);
?>