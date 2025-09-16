<?php
$host = "localhost";
$user = "root"; // ganti dengan username MySQL Anda
$password = ""; // ganti dengan password MySQL Anda
$database = "perpustakaan";

$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (mysqli_connect_errno()) {
    die("Gagal terhubung ke MySQL: " . mysqli_connect_error());
}
?>