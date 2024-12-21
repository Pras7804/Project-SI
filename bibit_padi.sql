-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 21 Des 2024 pada 14.42
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bibit_padi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `alternatif_id` int NOT NULL,
  `nama_bibit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`alternatif_id`, `nama_bibit`) VALUES
(1, 'Inpari 22 '),
(2, 'CIHERANG SS'),
(3, 'CILIWUNG'),
(4, 'Inpari 32'),
(5, 'Inpari 42'),
(6, 'IR 64'),
(7, 'Inpari 19'),
(8, 'Inpari 30 Ciheran Sub 1'),
(9, 'Inpari 31'),
(10, 'Inpari 33'),
(11, 'Inpari 38 Tadah Hujan Agritan'),
(12, 'Inpari 39 Tadah Hujan Agritan'),
(13, 'Inpari 44'),
(14, 'CIHERANG JANGER'),
(15, 'Hibrida SL 8 SHS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_informasi`
--

CREATE TABLE `detail_informasi` (
  `detail_informasi_id` int NOT NULL,
  `alternatif_id` int DEFAULT NULL,
  `kriteria_id` int DEFAULT NULL,
  `ketahanan_hama_id` int DEFAULT NULL,
  `umur_padi` int DEFAULT NULL,
  `tinggi_padi` float DEFAULT NULL,
  `rata_hasil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketahanan_hama`
--

CREATE TABLE `ketahanan_hama` (
  `ketahanan_hama_id` int NOT NULL,
  `ketahananan_hama` varchar(255) DEFAULT NULL,
  `normalisasi` varchar(2555) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `kriteria_id` int NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `bobot` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`kriteria_id`, `kriteria`, `bobot`) VALUES
(1, 'Umur Tanaman', 30),
(2, 'Tinggi Tanaman', 10),
(3, 'Ketahanan Terhadap Hama', 20),
(5, 'Potensi Hasil', 40);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_utilty`
--

CREATE TABLE `nilai_utilty` (
  `utility_id` int NOT NULL,
  `nilai_umur_padi` float NOT NULL,
  `nilai_tinggi_padi` varchar(255) DEFAULT NULL,
  `nilai_ketahanan_hama` varchar(255) DEFAULT NULL,
  `nilai_rata_hasil` varchar(255) DEFAULT NULL,
  `detail_informasi_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rangking`
--

CREATE TABLE `rangking` (
  `rangking_id` int NOT NULL,
  `alternatif_id` int DEFAULT NULL,
  `hasil_akhir` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `role` enum('Admin','Visitor') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`alternatif_id`);

--
-- Indeks untuk tabel `detail_informasi`
--
ALTER TABLE `detail_informasi`
  ADD PRIMARY KEY (`detail_informasi_id`),
  ADD KEY `FK_ALTERNATIF_TO_INFORMASI` (`alternatif_id`),
  ADD KEY `FK_KRITERIA_TO_INFORMASI` (`kriteria_id`),
  ADD KEY `FK_KETAHANAN_TO_INFORMASI` (`ketahanan_hama_id`);

--
-- Indeks untuk tabel `ketahanan_hama`
--
ALTER TABLE `ketahanan_hama`
  ADD PRIMARY KEY (`ketahanan_hama_id`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`kriteria_id`);

--
-- Indeks untuk tabel `nilai_utilty`
--
ALTER TABLE `nilai_utilty`
  ADD PRIMARY KEY (`utility_id`),
  ADD KEY `FK_DETAIL_INFORMASI_TO_UTILITY` (`detail_informasi_id`);

--
-- Indeks untuk tabel `rangking`
--
ALTER TABLE `rangking`
  ADD PRIMARY KEY (`rangking_id`),
  ADD KEY `FK_ALTERNATIF_TO_RANGKING` (`alternatif_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `alternatif_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `detail_informasi`
--
ALTER TABLE `detail_informasi`
  MODIFY `detail_informasi_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ketahanan_hama`
--
ALTER TABLE `ketahanan_hama`
  MODIFY `ketahanan_hama_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `kriteria_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `nilai_utilty`
--
ALTER TABLE `nilai_utilty`
  MODIFY `utility_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rangking`
--
ALTER TABLE `rangking`
  MODIFY `rangking_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_informasi`
--
ALTER TABLE `detail_informasi`
  ADD CONSTRAINT `FK_ALTERNATIF_TO_INFORMASI` FOREIGN KEY (`alternatif_id`) REFERENCES `alternatif` (`alternatif_id`),
  ADD CONSTRAINT `FK_KETAHANAN_TO_INFORMASI` FOREIGN KEY (`ketahanan_hama_id`) REFERENCES `ketahanan_hama` (`ketahanan_hama_id`),
  ADD CONSTRAINT `FK_KRITERIA_TO_INFORMASI` FOREIGN KEY (`kriteria_id`) REFERENCES `kriteria` (`kriteria_id`);

--
-- Ketidakleluasaan untuk tabel `nilai_utilty`
--
ALTER TABLE `nilai_utilty`
  ADD CONSTRAINT `FK_DETAIL_INFORMASI_TO_UTILITY` FOREIGN KEY (`detail_informasi_id`) REFERENCES `detail_informasi` (`detail_informasi_id`);

--
-- Ketidakleluasaan untuk tabel `rangking`
--
ALTER TABLE `rangking`
  ADD CONSTRAINT `FK_ALTERNATIF_TO_RANGKING` FOREIGN KEY (`alternatif_id`) REFERENCES `alternatif` (`alternatif_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
