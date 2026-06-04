<?php
session_start();
include "koneksi.php";
$id_prodi = $_GET['id_prodi'];

$q = mysqli_query($koneksi, "SELECT * FROM prodi WHERE id_prodi='$id_prodi'");
$dp = mysqli_fetch_assoc($q);
$kd_prodi = $dp['kd_prodi'];
$cek = mysqli_query($koneksi, "SELECT * FROM siswa WHERE kd_prodi='$kd_prodi'");
if (mysqli_num_rows($cek) > 0) {
    echo "<p style='color: red; font-weight: bold;'>Data tidak bisa dihapus karena masih digunakan!</p>";
    echo "<a href='prodi.php' class='batal'>Kembali</a>";
} else {
    mysqli_query($koneksi, "DELETE FROM prodi WHERE id_prodi='$id_prodi'");
    header("Location: prodi.php");
}
exit();
?>