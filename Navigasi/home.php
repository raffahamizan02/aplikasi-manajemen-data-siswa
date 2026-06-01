<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
if (!isset($_SESSION['login']) || $_SESSION['login'] != true) {
    header("Location : ../Session/index.php?p=Silahkan login terlebih dahulu!");
    exit();
}
?>

<!DOCTYPE html>
<html>
 <head>
    <title>Halaman Home</title>
    <link rel="stylesheet" href="../Styling/style.css">
    <script src="script.js"></script>
</head>
<body>
    <?php include "navigasi.php"; ?>
    <div id="main">
        <div class="container">
            <h2>APLIKASI MANAJEMEN DATA SISWA</h2>
            <hr>
            <p>Selamat datang di aplikasi Data Siswa SMKS PGRI 3 Malang</p>
        </div>
    </div>
</body>
</html>