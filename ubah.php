<?php
include "koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku=$id");
$row = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {
    $judul    = $_POST['judul'];
    $stok     = $_POST['stok'];
    $kategori = $_POST['kategori'];
    $penerbit = $_POST['penerbit'];
    $tahun    = $_POST['tahun_terbit'];

    $query = "UPDATE buku SET judul='$judul', stok='$stok', kategori='$kategori',
              penerbit='$penerbit', tahun_terbit='$tahun' WHERE id_buku=$id";
    mysqli_query($koneksi, $query);

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ubah Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-800 via-blue-900 to-blue-950 min-h-screen text-white flex items-center justify-center">
<div class="w-full max-w-lg bg-white rounded-lg shadow-xl p-8 text-gray-800">
    <h2 class="text-2xl font-bold mb-6 text-center text-yellow-600">Ubah Buku</h2>
    <form method="post" class="space-y-4">
        <div>
            <label class="block font-semibold mb-1">Judul Buku</label>
            <input type="text" name="judul" value="<?= $row['judul']; ?>" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
        </div>
        <div>
            <label class="block font-semibold mb-1">Stok</label>
            <input type="number" name="stok" value="<?= $row['stok']; ?>" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
        </div>
        <div>
            <label class="block font-semibold mb-1">Kategori</label>
            <input type="text" name="kategori" value="<?= $row['kategori']; ?>" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
        </div>
        <div>
            <label class="block font-semibold mb-1">Penerbit</label>
            <input type="text" name="penerbit" value="<?= $row['penerbit']; ?>" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
        </div>
        <div>
            <label class="block font-semibold mb-1">Tahun Terbit</label>
            <input type="number" name="tahun_terbit" value="<?= $row['tahun_terbit']; ?>" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
        </div>
        <div class="flex justify-between mt-6">
            <button type="submit" name="update" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg">Update</button>
            <a href="index.php" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg">Kembali</a>
        </div>
    </form>
</div>
</body>
</html>
