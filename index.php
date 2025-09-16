<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow-xl">
        <h2 class="text-3xl font-bold mb-6 text-gray-800">Daftar Buku</h2>
        
        <div class="flex justify-between items-center mb-4">
            <a href="tambah.php" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
                Tambah Buku Baru
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700 uppercase">ID Buku</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700 uppercase">Judul</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700 uppercase">Stok</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700 uppercase">Kategori</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php
                    $sql = "SELECT * FROM buku ORDER BY id_buku DESC";
                    $result = mysqli_query($koneksi, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td class='py-4 px-6'>" . htmlspecialchars($row['id_buku']) . "</td>";
                            echo "<td class='py-4 px-6'>" . htmlspecialchars($row['judul']) . "</td>";
                            echo "<td class='py-4 px-6'>" . htmlspecialchars($row['stok']) . "</td>";
                            echo "<td class='py-4 px-6'>" . htmlspecialchars($row['kategori']) . "</td>";
                            echo "<td class='py-4 px-6 space-x-2'>";
                            echo "<a href='ubah.php?id=" . $row['id_buku'] . "' class='text-blue-600 hover:text-blue-800 font-semibold'>Ubah</a>";
                            echo "<span class='text-gray-400'>|</span>";
                            echo "<a href='hapus.php?id=" . $row['id_buku'] . "' onclick=\"return confirm('Yakin ingin menghapus data ini?')\" class='text-red-600 hover:text-red-800 font-semibold'>Hapus</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5' class='py-4 px-6 text-center text-gray-500'>Tidak ada data buku.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<?php
mysqli_close($koneksi);
?>