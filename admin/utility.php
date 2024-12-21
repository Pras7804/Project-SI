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

        button {
            background-color: #ffa726;
            color: #161b22;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
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
        <a href="alternatif.php">Alternatif</a>
        <a href="#">Nilai Utility</a>
        <a href="perangkingan.php">Perangkingan</a>
        <!-- <a href="#logout">Log Out</a> -->
    </nav>
    <main>
        <div class="container">
            <section id="utility" class="feature">
                <h2>Nilai Utility</h2>
                <p>Proses perangkingan menggunakan metode SMART berdasarkan bobot kriteria dan data alternatif.</p>
                <table>
                    <thead>
                        <tr>
                            <th>Ranking</th>
                            <th>Nama Alternatif</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Bibit Unggul A</td>
                            <td>90</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Bibit Unggul B</td>
                            <td>85</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Bibit Lokal C</td>
                            <td>75</td>
                        </tr>
                    </tbody>
                </table>
                <button>Hitung Perangkingan</button>
            </section>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Sistem Pendukung Keputusan</p>
    </footer>
</body>

</html>