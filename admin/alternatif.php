<?php
include "../koneksi.php";

$alternatif = mysqli_query($koneksi, "
    SELECT * FROM alternatif
");

if (!$alternatif) {
    die("Query gagal: " . mysqli_error($koneksi));
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data dari tabel user
    $query = "DELETE FROM alternatif WHERE alternatif_id = '$id'";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data Berhasil Dihapus'); location.href='alternatif.php';</script>";
        exit();
    } else {
        echo "<script>alert('Data Gagal di Hapus: " . mysqli_error($koneksi) . "'); location.href='alternatif.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendukung Keputusan - Pemilihan Bibit Padi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #9de1c5;
            color: #f0f6fc;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #1e6f5c;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            color: white;
        }

        nav {
            background-color: #21262d;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: yellow;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            flex: 1;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #4caf50;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .feature {
            margin-bottom: 20px;
        }

        .feature h2 {
            color: #21262d;
        }

        footer {
            background-color: #1e6f5c;
            text-align: center;
            padding: 10px;
            bottom: 0;
            width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table,
        th,
        td {
            border: 1px solid #f0f6fc;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            background-color: #21262d;
        }

        th {
            background-color: #000;
        }

        .btn-group a {
            background-color: #ffa726;
            color: #161b22;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-group a:hover {
            background-color: #ff9800;
        }

        .aksi {
            text-align: center;
            align-items: center;
        }

        .tambah a {
            background-color: #ffa726;
            color: #161b22;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
        }

        .tambah a:hover {
            background-color: #ff9800;
        }
    </style>
</head>

<body>
    <header>
        <h1>Sistem Pendukung Keputusan - Pemilihan Bibit Padi</h1>
    </header>
    <nav>
        <a href="index.php">Homepage</a>
        <a href="kriteria.php">Kriteria</a>
        <a href="#alternatif">Alternatif</a>
        <a href="utility.php">Nilai Utility</a>
        <a href="perangkingan.php">Perangkingan</a>
    </nav>
    <main>
        <div class="container">
            <section id="alternatif" class="feature">
                <h2>Alternatif</h2>
                <p>Kelola data alternatif bibit padi.</p>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Alternatif</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($alternatif)): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= htmlspecialchars($row['nama_bibit']); ?></td>
                                <td>
                                    <div class="btn-group aksi">
                                        <!-- Tombol Edit -->
                                        <a href="editAlternatif.php?id=<?= htmlspecialchars($row['alternatif_id']); ?>">Edit</a>
                                        <!-- Tombol Delete -->
                                        <a href="alternatif.php?id=<?= htmlspecialchars($row['alternatif_id']); ?>"
                                            onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini?')">
                                            Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
                <div class="tambah">
                    <a href="">Tambah Data Alternatif</a>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Sistem Pendukung Keputusan</p>
    </footer>
</body>

</html>