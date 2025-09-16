<?php
$host = "localhost";
$user = "xirpl2-25"; // ganti dengan username MySQL Anda
$password = "0093831944"; // ganti dengan password MySQL Anda
$database = "db_xirpl2-25_1";

$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (mysqli_connect_errno()) {
    die("Gagal terhubung ke MySQL: " . mysqli_connect_error());
}
?>
