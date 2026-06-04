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
    header("Location: siswa.php?p=Data berhasil dihapus!");
} else {
    header("Location: siswa.php?p=Gagal menghapus data!");
    exit();
}
?>