<?php
include "../koneksi.php";

$kriteria = mysqli_query($koneksi, "
    SELECT * FROM kriteria
");

if (!$kriteria) {
    die("Query gagal: " . mysqli_error($koneksi));
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data dari tabel user
    $query = "DELETE FROM kriteria WHERE kriteria_id = '$id'";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data Berhasil Dihapus'); location.href='kriteria.php';</script>";
        exit();
    } else {
        echo "<script>alert('Data Gagal di Hapus: " . mysqli_error($koneksi) . "'); location.href='kriteria.php';</script>";
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
    </style>
</head>

<body>
    <header>
        <h1>Sistem Pendukung Keputusan - Pemilihan Bibit Padi</h1>
    </header>
    <nav>
        <a href="index.php">Homepage</a>
        <a href="#kriteria">Kriteria</a>
        <a href="alternatif.php">Alternatif</a>
        <a href="utility.php">Nilai Utility</a>
        <a href="Perangkingan.php">Perangkingan</a>
        <!-- <a href="#logout">Log Out</a> -->
    </nav>
    <main>
        <div class="container">
            <section id="kriteria" class="feature">
                <h2>Kriteria</h2>
                <p>Kriteria untuk sistem pendukung keputusan.</p>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Penentuan Kriteria</th>
                            <th>Bobot</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($kriteria)): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= htmlspecialchars($row['kriteria']); ?></td>
                                <td><?= htmlspecialchars($row['bobot']); ?></td>
                                <td>
                                    <div class="btn-group aksi">
                                        <!-- Tombol Edit -->
                                        <a href="editKriteria.php?id=<?= htmlspecialchars($row['kriteria_id']); ?>">Edit</a>
                                        <!-- Tombol Delete -->
                                        <a href="kriteria.php?id=<?= htmlspecialchars($row['kriteria_id']); ?>"
                                            onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini?')">
                                            Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </section>
            <section id="data" class="feature">
                <h2>Preprocessing Data</h2>
                <p>Preprocessing Data untuk sistem pendukung keputusan.</p>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Ketahanan Terhadap Hama</th>
                            <th>Normalisasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Tahan > 2 Tipe Hama</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Tahan 1-2 Tipe Hama</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Agak Tahan 1-3 Tipe Hama</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Tidak Tahan terhadap Hama</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Sistem Pendukung Keputusan</p>
    </footer>
</body>

</html>