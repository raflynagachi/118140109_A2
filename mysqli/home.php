<h1>Tugas mysqli</h1><br>
<?php
    include 'koneksi.php';
    session_start();
    $query = $_SESSION['search'];
    session_destroy();
    echo "<a href='showAllTables.php'>Tampilkan seluruh tabel</a>";

    include 'insert.php';
    include 'delete.php';
    include 'search.php';
?>
<table border="1" cellpadding="5px">
<thead>
    <tr>
        <th>no</th>
        <th>nim</th>
        <th>nama</th>
        <th>alamat</th>
        <th>nama jurusan</th>
    </tr>
</thead>
<tbody>
    <?php
    $key=1;
    $ambildata = mysqli_query($koneksi, $query);
    while($pecah = mysqli_fetch_array($ambildata)){
        $data[] = $pecah;
    }
    foreach($data as $value){
        ?>
        <tr align="center">
            <td><?php echo $key++; ?> </td>
            <td><?php echo $value['nim']; ?> </td>
            <td><?php echo $value['nama']; ?> </td>
            <td><?php echo $value['alamat']; ?> </td>
            <td><?php echo $value['jurusan']; ?> </td>
        </tr>
        <?php
    }?>
</tbody>
</table>