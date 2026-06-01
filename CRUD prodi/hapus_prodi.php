<?php
session_start();
include "../Koneksi/Koneksi.php";
$id_prodi = $_GET['id_prodi'];

// cek apakah prodi dipakai di table siswa
$q = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id_prodi='$id_prodi'");
$dp = mysqli_fetch_assoc($q);
$kd_prodi = $dp['id_prodi'];
$cek = mysqli_query($koneksi, "SELECT * FROM prodi WHERE kd_prodi='$kd_prodi'");
if (mysqli_num_rows($cek) > 0) {
    header("Location: prodi.php?p=Data tidak bisa dihapus karena masih digunakan!");
} else {
    mysqli_query($koneksi, "DELETE FROM prodi WHERE id_prodi='$id_prodi'");
    header("Location: prodi.php");
}
exit();
?>