<?php
include 'koneksi.php';

if (isset($_GET['id']) && isset($_GET['penerbit']) && isset($_GET['tahun_terbit'])) {
    $id_buku = $_GET['id'];
    $penerbit = $_GET['penerbit'];
    $tahun_terbit = $_GET['tahun_terbit'];

    $sql = "DELETE FROM buku WHERE id_buku = ? AND penerbit = ? AND tahun_terbit = ?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, "isi", $id_buku, $penerbit, $tahun_terbit);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Parameter tidak lengkap.";
}

mysqli_close($koneksi);
?>
