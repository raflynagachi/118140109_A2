<h2>Data mahasiswa</h2>
<p>==============================</p>
<h2>Tambah data</h2>
<form action="insertProcess.php" method="post">
<table>
    <tr>
        <td>nim</td>
        <td>:</td>
        <td><input type="text" name="nim" required></td>
    </tr>
    <tr>
        <td>nama</td>
        <td>:</td>
        <td><input type="text" name="nama" required></td>
    </tr>
    <tr>
        <td>alamat</td>
        <td>:</td>
        <td><input type="text" name="alamat" required></td>
    </tr>
    <tr>
        <td>jurusan</td>
        <td>:</td>
        <td><select name="jurusan" required>
            <option value="IF">Teknik Informatika</option>
            <option value="EL">Teknik Elektro</option>
            <option value="FA">Farmasi</option>
            <option value="BI">Biologi</option>
            <option value="GL">Geologi</option>
        </select></td>
    </tr>
</table>
    <button type="submit" name="tambah">Tambah</button>
</form>