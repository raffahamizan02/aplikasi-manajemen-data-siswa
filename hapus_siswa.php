<?php
session_start();
include "koneksi.php";
$id = $_GET['id'];

$cek = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
$data = mysqli_fetch_assoc($cek);

if (!$data) {
    header("Location: siswa.php?p=Data tidak ditemukan!");
    exit();
}

if(file_exists("uploads/" . $data['foto']) && $data['foto'] != "") {
    unlink("uploads/" . $data['foto']);
}

$hapus = mysqli_query($koneksi, "DELETE FROM siswa WHERE id='$id'");
if ($hapus) {
    echo "<h1>Data berhasil dihapus!</h1>";
    echo "<a href='siswa.php' class='batal'>Kembali</a>";
} else {
    header("Location: siswa.php?p=Gagal menghapus data!");
    exit();
}
?>