<?php
include "koneksi.php";
$result = mysqli_query($koneksi, "SELECT * FROM buku");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-800 via-blue-900 to-blue-950 min-h-screen text-white">
<div class="container mx-auto px-6 py-10">
    <h2 class="text-4xl font-bold mb-6 text-center drop-shadow-lg">📚 Data Buku</h2>
    
    <div class="flex justify-end mb-4">
        <a href="tambah.php" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg shadow-lg transition">+ Tambah Buku</a>
    </div>

    <div class="overflow-x-auto shadow-xl rounded-lg">
        <table class="min-w-full text-center bg-white text-gray-800 rounded-lg">
            <thead class="bg-blue-700 text-white">
                <tr>
                    <th class="px-6 py-3">ID</th>
                    <th class="px-6 py-3">Judul Buku</th>
                    <th class="px-6 py-3">Stok</th>
                    <th class="px-6 py-3">Kategori</th>
                    <th class="px-6 py-3">Penerbit</th>
                    <th class="px-6 py-3">Tahun Terbit</th>
                    <th class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <tr class="border-b hover:bg-blue-100">
                    <td class="px-6 py-3"><?= $row['id_buku']; ?></td>
                    <td class="px-6 py-3"><?= $row['judul']; ?></td>
                    <td class="px-6 py-3"><?= $row['stok']; ?></td>
                    <td class="px-6 py-3"><?= $row['kategori']; ?></td>
                    <td class="px-6 py-3"><?= $row['penerbit']; ?></td>
                    <td class="px-6 py-3"><?= $row['tahun_terbit']; ?></td>
                    <td class="px-6 py-3">
                        <a href="ubah.php?id=<?= $row['id_buku']; ?>" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-md mr-2">✏ Edit</a>
                        <a href="hapus.php?id=<?= $row['id_buku']; ?>" onclick="return confirm('Yakin hapus data?')" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-md">🗑 Hapus</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
