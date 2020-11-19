<?php
function get_data($tabel){
    include 'koneksi.php';
    $query = ("select * from " .$tabel);
    $ambildata = mysqli_query($koneksi, $query);
    while($pecah = mysqli_fetch_array($ambildata)){
        $data[] = $pecah;
    }
    return $data;
}
$mhs = get_data("mahasiswa");
$jurusan = get_data("jurusan");
?>
<a href="home.php">HOME</a>
<h4>=======================================</h4>
<h3>tabel mahasiswa</h3>
<table border="1" cellpadding="5px">
<thead>
    <tr>
        <th>no</th>
        <th>nim</th>
        <th>nama</th>
        <th>alamat</th>
        <th>id_jur</th>
    </tr>
</thead>
<tbody>
    <?php
    $key=1;
    foreach($mhs as $value){
        ?>
        <tr align="center">
            <td><?php echo $key++; ?> </td>
            <td><?php echo $value['nim']; ?> </td>
            <td><?php echo $value['nama']; ?> </td>
            <td><?php echo $value['alamat']; ?> </td>
            <td><?php echo $value['id_jur']; ?> </td>
        </tr>
        <?php
    }?>
</tbody>
</table>
<br>
<h3>tabel jurusan</h3>
<table border="1" cellpadding="5px">
<thead>
    <tr>
        <th>no</th>
        <th>id_jur</th>
        <th>nama</th>
    </tr>
</thead>
<tbody>
<?php
    $key=1;
    foreach($jurusan as $value){
        ?>
        <tr align="center">
            <td><?php echo $key++; ?> </td>
            <td><?php echo $value['id_jur']; ?> </td>
            <td><?php echo $value['nama']; ?> </td>
        </tr>
        <?php
    }?>
</tbody>
</table>