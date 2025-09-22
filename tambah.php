<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $judul    = $_POST['judul'];
    $stok     = $_POST['stok'];
    $kategori = $_POST['kategori'];
    $penerbit = $_POST['penerbit'];
    $tahun    = $_POST['tahun_terbit'];

    $query = "INSERT INTO buku (judul, stok, kategori, penerbit, tahun_terbit) 
              VALUES ('$judul', '$stok', '$kategori', '$penerbit', '$tahun')";
    mysqli_query($koneksi, $query);

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-800 via-blue-900 to-blue-950 min-h-screen text-white flex items-center justify-center">
<div class="w-full max-w-lg bg-white rounded-lg shadow-xl p-8 text-gray-800">
    <h2 class="text-2xl font-bold mb-6 text-center text-blue-700">Tambah Buku</h2>
    <form method="post" class="space-y-4">
        <div>
            <label class="block font-semibold mb-1">Judul Buku</label>
            <input type="text" name="judul" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div>
            <label class="block font-semibold mb-1">Stok</label>
            <input type="number" name="stok" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div>
            <label class="block font-semibold mb-1">Kategori</label>
            <input type="text" name="kategori" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div>
            <label class="block font-semibold mb-1">Penerbit</label>
            <input type="text" name="penerbit" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div>
            <label class="block font-semibold mb-1">Tahun Terbit</label>
            <input type="number" name="tahun_terbit" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="flex justify-between mt-6">
            <button type="submit" name="simpan" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg">Simpan</button>
            <a href="index.php" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg">Kembali</a>
        </div>
    </form>
</div>
</body>
</html>
