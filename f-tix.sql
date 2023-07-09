-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 05:25 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

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
  `aktor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `judul`, `deskripsi`, `foto`, `trailer`, `kategori`, `sutradara`, `aktor`) VALUES
(1, 'SUZUME', '', 'http://localhost/f-tix/web2-project/img/Movie/suzume.jpg', '', 'now_showing', '', ''),
(2, 'CREED III', '', 'http://localhost/f-tix/web2-project/img/Movie/creed.jpg', '', 'now_showing', '', ''),
(3, 'BLOOD', '', 'http://localhost/f-tix/web2-project/img/Movie/blood.jpg', '', 'now_showing', '', ''),
(4, 'ANT-MAN', '', 'http://localhost/f-tix/web2-project/img/Movie/antman.jpg', '', 'now_showing', '', ''),
(5, 'WAKTU MAGRIB', '', 'http://localhost/f-tix/web2-project/img/Movie/waktumagrib.jpg', '', 'now_showing', '', ''),
(6, 'SAS: RED NOTICE', '', 'http://localhost/f-tix/web2-project/img/Movie/sas.jpg', '', 'now_showing', '', ''),
(7, 'MISSING', '', 'http://localhost/f-tix/web2-project/img/Movie/missing.jpg', '', 'now_showing', '', ''),
(8, 'PESUGIHAN', '', 'http://localhost/f-tix/web2-project/img/Movie/pesugihan.jpg', '', 'now_showing', '', ''),
(9, 'JOHN WICK', '', 'http://localhost/f-tix/web2-project/img/Movie/johnwick.jpg', '', 'coming_soon', '', ''),
(10, 'SHAZAM', '', 'http://localhost/f-tix/web2-project/img/Movie/shazam.jpg', '', 'coming_soon', '', ''),
(11, 'L0SMEN MELATI', '', 'http://localhost/f-tix/web2-project/img/Movie/losmen.jpg', '', 'coming_soon', '', ''),
(12, 'DUNGEONS & DRAGON', '', 'http://localhost/f-tix/web2-project/img/Movie/dungeons.jpg', '', 'coming_soon', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `no_telp` int(13) NOT NULL,
  `role` enum('Admin','Users') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `gender`, `no_telp`, `role`) VALUES
(1, 'felicgon', '$2y$10$DKB5V2NyUi3d6KveOFd/vegsicuL2D92b.NBqfSkNT72XEKwBDkfW', 'felicgon@gmail.com', '', 0, 'Users'),
(2, 'felic', '$2y$10$OfRMg.JesPbPed0S8Tufme/k2Jw894NgNmUS.0VmJ9K3264ehBHJ2', 'gonzales@gmail.com', '', 0, 'Users'),
(3, 'pp', '$2y$10$FD8OTixmZNSpiCvs/wvysukBfQIhEVVsAGQ7pDI9vLn57Tfmu8/Ta', 'pp@gmail.com', '', 0, 'Users');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
