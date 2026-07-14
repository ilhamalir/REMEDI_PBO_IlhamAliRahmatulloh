-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2026 at 01:59 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_remedi_pbo_trpl1b_ilhamalirahmatulloh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_reservasi`
--

CREATE TABLE `tabel_reservasi` (
  `id_reservasi` int NOT NULL,
  `nama_pelanggan` varchar(100) DEFAULT NULL,
  `tanggal_booking` date DEFAULT NULL,
  `durasi_jam` int DEFAULT NULL,
  `tarif_dasar_per_jam` double DEFAULT NULL,
  `jenis_paket` enum('Reguler','Premium','Event') DEFAULT NULL,
  `tipe_background` varchar(100) DEFAULT NULL,
  `cetak_foto_lembar` int DEFAULT NULL,
  `kuota_talent_orang` int DEFAULT NULL,
  `layanan_makeup` varchar(20) DEFAULT NULL,
  `nama_lokasi_luar` varchar(100) DEFAULT NULL,
  `biaya_transportasi_tim` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_reservasi`
--

INSERT INTO `tabel_reservasi` (`id_reservasi`, `nama_pelanggan`, `tanggal_booking`, `durasi_jam`, `tarif_dasar_per_jam`, `jenis_paket`, `tipe_background`, `cetak_foto_lembar`, `kuota_talent_orang`, `layanan_makeup`, `nama_lokasi_luar`, `biaya_transportasi_tim`) VALUES
(1, 'Andi', '2026-07-20', 2, 150000, 'Reguler', 'Putih', 5, NULL, NULL, NULL, NULL),
(2, 'Budi', '2026-07-21', 3, 150000, 'Reguler', 'Biru', 8, NULL, NULL, NULL, NULL),
(3, 'Citra', '2026-07-22', 2, 150000, 'Reguler', 'Merah', 6, NULL, NULL, NULL, NULL),
(4, 'Dina', '2026-07-23', 4, 150000, 'Reguler', 'Hitam', 10, NULL, NULL, NULL, NULL),
(5, 'Eka', '2026-07-24', 2, 150000, 'Reguler', 'Pink', 5, NULL, NULL, NULL, NULL),
(6, 'Farhan', '2026-07-25', 3, 150000, 'Reguler', 'Abu', 8, NULL, NULL, NULL, NULL),
(7, 'Gita', '2026-07-26', 2, 150000, 'Reguler', 'Ungu', 6, NULL, NULL, NULL, NULL),
(8, 'Hendra', '2026-07-20', 4, 250000, 'Premium', 'Gold', 15, NULL, 'Ya', NULL, NULL),
(9, 'Intan', '2026-07-21', 5, 250000, 'Premium', 'Silver', 20, NULL, 'Ya', NULL, NULL),
(10, 'Joko', '2026-07-22', 3, 250000, 'Premium', 'Biru', 12, NULL, 'Ya', NULL, NULL),
(11, 'Kiki', '2026-07-23', 4, 250000, 'Premium', 'Putih', 18, NULL, 'Ya', NULL, NULL),
(12, 'Lina', '2026-07-24', 5, 250000, 'Premium', 'Pink', 20, NULL, 'Ya', NULL, NULL),
(13, 'Maya', '2026-07-25', 3, 250000, 'Premium', 'Abu', 15, NULL, 'Ya', NULL, NULL),
(14, 'Nanda', '2026-07-26', 4, 250000, 'Premium', 'Hitam', 18, NULL, 'Ya', NULL, NULL),
(15, 'Oscar', '2026-07-20', 8, 500000, 'Event', NULL, NULL, 5, NULL, 'Pantai', 800000),
(16, 'Putri', '2026-07-21', 6, 500000, 'Event', NULL, NULL, 4, NULL, 'Hotel', 600000),
(17, 'Qori', '2026-07-22', 7, 500000, 'Event', NULL, NULL, 6, NULL, 'Gedung Serbaguna', 900000),
(18, 'Raka', '2026-07-23', 5, 500000, 'Event', NULL, NULL, 3, NULL, 'Taman Kota', 500000),
(19, 'Sinta', '2026-07-24', 8, 500000, 'Event', NULL, NULL, 5, NULL, 'Villa', 850000),
(20, 'Tono', '2026-07-25', 6, 500000, 'Event', NULL, NULL, 4, NULL, 'Pantai', 700000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_reservasi`
--
ALTER TABLE `tabel_reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_reservasi`
--
ALTER TABLE `tabel_reservasi`
  MODIFY `id_reservasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
