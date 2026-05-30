<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "raffa_zidan_penilaian";

$koneksi = mysqli_connect($host, $username, $password);

if($koneksi) {
    //memilih database
    $pilih_db = mysqli_select_db($koneksi, $database);
    if ($pilih_db) {
        echo "Database terpilih";
    }
} else {
    echo "Koneksi Gagal, di periksa lagi";

}
?>
