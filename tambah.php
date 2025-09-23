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

    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-800 via-blue-900 to-blue-950 min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-lg bg-white/10 backdrop-blur-lg rounded-2xl shadow-2xl p-8 text-white">
        <h2 class="text-3xl font-bold mb-8 text-center text-blue-200 tracking-wide">📚 Tambah Buku</h2>
        
        <form method="post" class="space-y-5">
            <!-- Judul -->
            <div>
                <label class="block font-semibold mb-1">Judul Buku</label>
                <input type="text" name="judul" 
                       class="w-full border border-gray-300/30 bg-white/20 text-white rounded-xl px-4 py-2 
                              focus:outline-none focus:ring-2 focus:ring-blue-400 placeholder-gray-200" 
                       placeholder="Masukkan judul buku" required>
            </div>
            <!-- Stok -->
            <div>
                <label class="block font-semibold mb-1">Stok</label>
                <input type="number" name="stok" 
                       class="w-full border border-gray-300/30 bg-white/20 text-white rounded-xl px-4 py-2 
                              focus:outline-none focus:ring-2 focus:ring-blue-400 placeholder-gray-200" 
                       placeholder="Masukkan jumlah stok" required>
            </div>
            <!-- Kategori -->
            <div>
                <label class="block font-semibold mb-1">Kategori</label>
                <input type="text" name="kategori" 
                       class="w-full border border-gray-300/30 bg-white/20 text-white rounded-xl px-4 py-2 
                              focus:outline-none focus:ring-2 focus:ring-blue-400 placeholder-gray-200" 
                       placeholder="Masukkan kategori buku" required>
            </div>
            <!-- Penerbit -->
            <div>
                <label class="block font-semibold mb-1">Penerbit</label>
                <input type="text" name="penerbit" 
                       class="w-full border border-gray-300/30 bg-white/20 text-white rounded-xl px-4 py-2 
                              focus:outline-none focus:ring-2 focus:ring-blue-400 placeholder-gray-200" 
                       placeholder="Masukkan nama penerbit" required>
            </div>
            <!-- Tahun Terbit -->
            <div>
                <label class="block font-semibold mb-1">Tahun Terbit</label>
                <input type="number" name="tahun_terbit" 
                       class="w-full border border-gray-300/30 bg-white/20 text-white rounded-xl px-4 py-2 
                              focus:outline-none focus:ring-2 focus:ring-blue-400 placeholder-gray-200" 
                       placeholder="Contoh: 2024" required>
            </div>

            <!-- Tombol -->
            <div class="flex justify-between mt-8">
                <button type="submit" name="simpan" 
                        class="bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 
                               text-white font-semibold px-6 py-2 rounded-xl shadow-lg transform hover:scale-105 transition">
                    💾 Simpan
                </button>
                <a href="index.php" 
                   class="bg-gradient-to-r from-gray-500 to-gray-600 hover:from-gray-600 hover:to-gray-700 
                          text-white font-semibold px-6 py-2 rounded-xl shadow-lg transform hover:scale-105 transition">
                    ⬅ Kembali
                </a>
            </div>
        </form>
    </div>
</body>
</html>