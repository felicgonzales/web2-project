-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 03:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `f-tix`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(14) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `trailer` text NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `sutradara` varchar(100) NOT NULL,
  `aktor` varchar(100) NOT NULL,
  `tgl_rilis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `judul`, `deskripsi`, `foto`, `trailer`, `kategori`, `sutradara`, `aktor`, `tgl_rilis`) VALUES
(1, 'SUZUME', '', 'img/Movie/suzume.jpg', '', 'now_showing', '', '', '0000-00-00'),
(2, 'CREED III', '', 'img/Movie/creed.jpg', '', 'now_showing', '', '', '0000-00-00'),
(3, 'BLOOD', '', 'img/Movie/blood.jpg', '', 'now_showing', '', '', '0000-00-00'),
(4, 'ANT-MAN', '', 'img/Movie/antman.jpg', '', 'now_showing', '', '', '0000-00-00'),
(5, 'WAKTU MAGRIB', '', 'img/Movie/waktumagrib.jpg', '', 'now_showing', '', '', '0000-00-00'),
(6, 'SAS: RED NOTICE', '', 'img/Movie/sas.jpg', '', 'now_showing', '', '', '0000-00-00'),
(7, 'MISSING', '', 'img/Movie/missing.jpg', '', 'now_showing', '', '', '0000-00-00'),
(8, 'PESUGIHAN', '', 'img/Movie/pesugihan.jpg', '', 'now_showing', '', '', '0000-00-00'),
(9, 'JOHN WICK', '', 'img/Movie/johnwick.jpg', '', 'coming_soon', '', '', '0000-00-00'),
(10, 'SHAZAM', '', 'img/Movie/shazam.jpg', '', 'coming_soon', '', '', '0000-00-00'),
(11, 'L0SMEN MELATI', '', 'img/Movie/losmen.jpg', '', 'coming_soon', '', '', '0000-00-00'),
(12, 'DUNGEONS & DRAGON', '', 'img/Movie/dungeons.jpg', '', 'coming_soon', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `id_studio` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `tanggal_tayang` date NOT NULL,
  `jam_tayang` time NOT NULL,
  `tiket_tersedia` int(11) NOT NULL,
  `tiket_terjual` int(11) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `kursi_terjual` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `id_studio`, `id_film`, `tanggal_tayang`, `jam_tayang`, `tiket_tersedia`, `tiket_terjual`, `harga_tiket`, `kursi_terjual`) VALUES
(7, 2, 1, '2023-07-09', '12:15:00', 0, 0, 50000, '');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama_lokasi` text NOT NULL,
  `wilayah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama_lokasi`, `wilayah`) VALUES
(29, 'centerpoint', 'medan');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `jmlh_tiket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `id` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `no_studio` int(11) NOT NULL,
  `pattern_kursi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`id`, `id_lokasi`, `no_studio`, `pattern_kursi`) VALUES
(2, 29, 1, '10;12'),
(3, 29, 3, '10;20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `role` enum('Admin','Users') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `gender`, `no_telp`, `role`) VALUES
(24, 'admin', '$2y$10$SzLdYK7YXn5nVqhDcSuqJePK5UXwjL6oM0CZWJIys8BRWJw8AxyJW', 'felgonn123@admin.tix', '', '', 'Admin'),
(27, 'felicgon', '$2y$10$/mqk/UlOHtK0VEEF1dsGPeoHHwgRhV86ZpUr9187hxC9msl/P3uwC', 'felicgonzales@users.com', 'Laki-Laki', '085362225002', 'Users');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
