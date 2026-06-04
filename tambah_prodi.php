<?php
session_start();
include "koneksi.php";
$error = "";

if (isset($_POST['simpan'])) {
    $kd_prodi = $_POST['kd_prodi'];
    $nama_prodi = $_POST['nama_prodi'];

    $cek = mysqli_query($koneksi, "SELECT * FROM prodi WHERE kd_prodi='$kd_prodi'");
    if (mysqli_num_rows($cek) > 0) {
        echo "<p style='color: red; font-weight: bold;'>Kode Prodi sudah digunakan!</p>";
    } else {
        mysqli_query($koneksi, "INSERT INTO prodi VALUES(NULL, '$kd_prodi', '$nama_prodi')");
        echo "<h1>Data berhasil disimpan!</h1>";
        echo "<a href='prodi.php' class='batal'>Kembali</a>";
        exit();
    }
}

if (empty($_POST['kd_prodi']) || empty($_POST['nama_prodi'])) {
    $error = "Data harus diisi!";
}
?>
<html>
<head>
    <title>Tambah Prodi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Prodi</h2>
<form method="POST" action=""> 
    <label>Kode Prodi :</label>
    <input type="text" name="kd_prodi" required><br><br>
    <label>Nama Prodi :</label>
    <input type="text" name="nama_prodi" required><br><br>
    <button type="submit" name="simpan" class="submit">SIMPAN</button>
    <button type="submit" name="batal" class="cancel"><a href="prodi.php">BATAL</a></button>
</form>
    </div>
</body>
</html>