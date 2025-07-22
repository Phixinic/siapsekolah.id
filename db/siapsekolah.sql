-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2025 at 11:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siapsekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `asal_sekolah` varchar(100) DEFAULT NULL,
  `npsn` varchar(20) DEFAULT NULL,
  `tahun_lulus` varchar(10) DEFAULT NULL,
  `nilai_rapor` decimal(5,2) DEFAULT NULL,
  `pilihan1` varchar(100) DEFAULT NULL,
  `pilihan2` varchar(100) DEFAULT NULL,
  `jalur` varchar(50) DEFAULT NULL,
  `akta` varchar(255) DEFAULT NULL,
  `kk` varchar(255) DEFAULT NULL,
  `tanggal_daftar` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('Pending','Verified','Diterima','Ditolak') DEFAULT 'Pending',
  `siswa_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_hp`, `email`, `asal_sekolah`, `npsn`, `tahun_lulus`, `nilai_rapor`, `pilihan1`, `pilihan2`, `jalur`, `akta`, `kk`, `tanggal_daftar`, `status`, `siswa_id`) VALUES
(8, 'Farid Heka Magfirio', '3508190902060001', 'Lumajang', '2006-02-09', 'Laki laki', 'Islam', 'Mlawang, Klakah', '089515793188', 'faridhkrio926@gmail.com', 'SMKN 1 Lumajang', '12312312', '2023', 99.98, 'SMA 1', 'SMA 2', 'Afirmasi', 'Screenshot 2025-07-22 150520.png', 'Screenshot 2025-07-22 210206.png', '2025-07-22 18:15:39', 'Pending', NULL),
(9, 'Timothy Nathaniel', '1234567891010', 'Tulungagung', '2005-01-03', 'Laki laki', 'Krister', 'Jalan Mangu', '0897654321', 'timothy@gmail.com', 'SMKN 2 Tulungagung', '321312', '2024', 70.00, 'SMA 2', 'SMA 1', 'Afirmasi', 'Screenshot 2025-07-22 140652.png', 'Screenshot 2025-07-22 134821.png', '2025-07-22 18:19:16', 'Ditolak', NULL),
(10, 'Yoga Cipta Surya Pradana', '3508190902060001', 'Malang', '2004-02-04', 'Laki laki', 'Kristen', 'Malang', '089515793188', 'yoga@gmail.com', 'SMA 1 Malang', '12312312', '2023', 79.98, 'SMA 2', 'SMA 1', 'Pindahan', 'Screenshot 2025-07-22 140652.png', 'Screenshot 2025-07-22 210206.png', '2025-07-22 19:42:28', 'Pending', NULL),
(11, 'Farid Heka Magfirio', '3508190902060001', 'Lumajang', '2006-02-09', 'Laki laki', 'Islam', 'Mlawang, Klakah', '089515793188', 'faridhkrio926@gmail.com', 'SMKN 1 Lumajang', '12312312', '2023', 99.98, 'SMA 1', 'SMA 2', 'Afirmasi', 'Screenshot 2025-07-22 150520.png', 'Screenshot 2025-07-22 210206.png', '2025-07-22 18:15:39', 'Pending', NULL),
(12, 'Farid Heka Magfirio', '3508190902060001', 'Lumajang', '2006-02-09', 'Laki laki', 'Islam', 'Mlawang, Klakah', '089515793188', 'faridhkrio926@gmail.com', 'SMKN 1 Lumajang', '12312312', '2023', 99.98, 'SMA 1', 'SMA 2', 'Afirmasi', 'Screenshot 2025-07-22 150520.png', 'Screenshot 2025-07-22 210206.png', '2025-07-22 18:15:39', 'Pending', NULL),
(13, 'Farid Heka Magfirio', '3508190902060001', 'Lumajang', '2006-02-09', 'Laki laki', 'Islam', 'Mlawang, Klakah', '089515793188', 'faridhkrio926@gmail.com', 'SMKN 1 Lumajang', '12312312', '2023', 99.98, 'SMA 1', 'SMA 2', 'Afirmasi', 'Screenshot 2025-07-22 150520.png', 'Screenshot 2025-07-22 210206.png', '2025-07-22 18:15:39', 'Pending', NULL),
(14, 'Timothy Nathaniel', '1234567891010', 'Tulungagung', '2005-01-03', 'Laki laki', 'Krister', 'Jalan Mangu', '0897654321', 'timothy@gmail.com', 'SMKN 2 Tulungagung', '321312', '2024', 70.00, 'SMA 2', 'SMA 1', 'Afirmasi', 'Screenshot 2025-07-22 140652.png', 'Screenshot 2025-07-22 134821.png', '2025-07-22 18:19:16', 'Ditolak', NULL),
(15, 'Timothy Nathaniel', '1234567891010', 'Tulungagung', '2005-01-03', 'Laki laki', 'Krister', 'Jalan Mangu', '0897654321', 'timothy@gmail.com', 'SMKN 2 Tulungagung', '321312', '2024', 70.00, 'SMA 2', 'SMA 1', 'Afirmasi', 'Screenshot 2025-07-22 140652.png', 'Screenshot 2025-07-22 134821.png', '2025-07-22 18:19:16', 'Ditolak', NULL),
(16, 'Timothy Nathaniel', '1234567891010', 'Tulungagung', '2005-01-03', 'Laki laki', 'Krister', 'Jalan Mangu', '0897654321', 'timothy@gmail.com', 'SMKN 2 Tulungagung', '321312', '2024', 70.00, 'SMA 2', 'SMA 1', 'Afirmasi', 'Screenshot 2025-07-22 140652.png', 'Screenshot 2025-07-22 134821.png', '2025-07-22 18:19:16', 'Ditolak', NULL),
(17, 'Yoga Cipta Surya Pradana', '3508190902060001', 'Malang', '2004-02-04', 'Laki laki', 'Kristen', 'Malang', '089515793188', 'yoga@gmail.com', 'SMA 1 Malang', '12312312', '2023', 79.98, 'SMA 2', 'SMA 1', 'Pindahan', 'Screenshot 2025-07-22 140652.png', 'Screenshot 2025-07-22 210206.png', '2025-07-22 19:42:28', 'Pending', NULL),
(18, 'Yoga Cipta Surya Pradana', '3508190902060001', 'Malang', '2004-02-04', 'Laki laki', 'Kristen', 'Malang', '089515793188', 'yoga@gmail.com', 'SMA 1 Malang', '12312312', '2023', 79.98, 'SMA 2', 'SMA 1', 'Pindahan', 'Screenshot 2025-07-22 140652.png', 'Screenshot 2025-07-22 210206.png', '2025-07-22 19:42:28', 'Pending', NULL),
(19, 'Yoga Cipta Surya Pradana', '3508190902060001', 'Malang', '2004-02-04', 'Laki laki', 'Kristen', 'Malang', '089515793188', 'yoga@gmail.com', 'SMA 1 Malang', '12312312', '2023', 79.98, 'SMA 2', 'SMA 1', 'Pindahan', 'Screenshot 2025-07-22 140652.png', 'Screenshot 2025-07-22 210206.png', '2025-07-22 19:42:28', 'Pending', NULL),
(20, 'Andrew Steine Cristopher', '3508190902060001', 'Bojonegoro', '2006-02-03', 'Laki laki', 'Katolik', 'Anjay', '089515793188', 'andrew@gmail.com', 'SMAN 1 Bojonegoro', '87654321', '2023', 99.00, 'SMA 1', 'SMA 2', 'Zonasi', 'Screenshot 2025-07-22 142918.png', 'Screenshot 2025-07-22 212356.png', '2025-07-22 20:38:56', 'Pending', NULL),
(21, 'Andrew Steine Cristopher', '3508190902060001', 'Bojonegoro', '2006-02-03', 'Laki laki', 'Katolik', 'Anjay', '089515793188', 'andrew@gmail.com', 'SMAN 1 Bojonegoro', '87654321', '2023', 99.00, 'SMA 1', 'SMA 2', 'Zonasi', 'Screenshot 2025-07-22 142918.png', 'Screenshot 2025-07-22 212356.png', '2025-07-22 20:38:56', 'Pending', NULL),
(22, 'Andrew Steine Cristopher', '3508190902060001', 'Bojonegoro', '2006-02-03', 'Laki laki', 'Katolik', 'Anjay', '089515793188', 'andrew@gmail.com', 'SMAN 1 Bojonegoro', '87654321', '2023', 99.00, 'SMA 1', 'SMA 2', 'Zonasi', 'Screenshot 2025-07-22 142918.png', 'Screenshot 2025-07-22 212356.png', '2025-07-22 20:38:56', 'Pending', NULL),
(23, 'Andrew Steine Cristopher', '3508190902060001', 'Bojonegoro', '2006-02-03', 'Laki laki', 'Katolik', 'Anjay', '089515793188', 'andrew@gmail.com', 'SMAN 1 Bojonegoro', '87654321', '2023', 99.00, 'SMA 1', 'SMA 2', 'Zonasi', 'Screenshot 2025-07-22 142918.png', 'Screenshot 2025-07-22 212356.png', '2025-07-22 20:38:56', 'Pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `email`, `username`, `password`, `created_at`) VALUES
(1, 'Farid Heka Magfirio', 'blackjackfarid@gmail.com', 'Heka', '$2y$10$pRwu/Kw7rWQ8/U06MOtijOlTp4p9Zvz0/qjHFqVjQqbZj40/A7/Ve', '2025-07-22 17:59:17'),
(2, 'Yoga Cipta Surya Pradana', 'yoga@gmail.com', 'yogaa', '$2y$10$6XoTN1UryV59P3xJr7cWh.Hb/p0Vxz0oZ9ZsEr/pL2TMgbB8rKJLq', '2025-07-22 20:54:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_siswa_id` (`siswa_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
