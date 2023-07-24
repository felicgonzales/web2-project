-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 04:27 PM
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
  `aktor` varchar(100) NOT NULL,
  `tgl_rilis` date NOT NULL,
  `durasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `judul`, `deskripsi`, `foto`, `trailer`, `kategori`, `sutradara`, `aktor`, `tgl_rilis`, `durasi`) VALUES
(1, 'SUZUME', 'Perjalanan Suzume dimulai di sebuah kota yang tenang di Kyushu (terletak di Barat daya Jepang) ketika dia bertemu dengan seorang pria muda yang mengatakan kepadanya, “Saya sedang mencari pintu.” Apa yang Suzume temukan adalah satu pintu lapuk yang berdiri tegak di tengah reruntuhan seolah terlindung dari malapetaka apa pun yang melanda. Tampaknya ditarik oleh kekuatannya, Suzume meraih kenopnya... Pintu-pintu itu mulai terbuka satu demi satu di seluruh Jepang, melepaskan kehancuran pada siapa pun yang berada di dekatnya. Suzume harus menutup portal ini untuk mencegah bencana lebih lanjut.', 'img/Movie/suzume.jpg', '', 'now_showing', '', '', '0000-00-00', '116 Minutes'),
(2, 'CREED III', 'Adonis Creed (Michael B. Jordan) berkembang pesat baik dalam karier maupun kehidupan keluarganya, tetapi ketika seorang teman masa kecil dan mantan petinju datang, ia akan menghadapi lebih dari sekadar pertarungan.', 'img/Movie/creed.jpg', '', 'now_showing', '', '', '0000-00-00', '116 Minutes'),
(3, 'BLOOD', 'Jess (Michelle Monaghan), seorang ibu dan perawat yang baru saja berpisah dari suaminya, memindahkan anak-anaknya ke rumah pertanian keluarganya. Tak lama setelah menetap, Owen (Finlay Wojtak-Hissong), putra Jess yang masih kecil digigit oleh anjing peliharaan mereka. Sebelumnya anjing tersebut sempat menghilang di hutan. Pasca gigitan ini, Owen menjadi anak yang menakutkan dan mematikan.', 'img/Movie/blood.jpg', '', 'now_showing', '', '', '0000-00-00', '108 Minutes'),
(4, 'ANT-MAN', 'Scott Lang (Paul Rudd), Hope Van Dyne (Evangeline Lilly) Dr. Hank Pym (Michael Douglas) dan Janet Van Dyne (Michelle Pfeiffer) menjelajahi Alam Kuantum, tempat mereka bertemu dengan makhluk aneh dan memulai petualangan yang melampaui batas yang mereka pikir mungkin.', 'img/Movie/antman.jpg', '', 'now_showing', '', '', '0000-00-00', '124 Minutes'),
(5, 'WAKTU MAGRIB', 'Adi dan Saman sering dihukum oleh Bu Woro, guru mereka yang disiplin dan galak. Suatu hari, kekesalan Adi dan Saman terhadap Bu Woro memuncak. Mereka menyumpahi guru itu bersamaan dengan kumandang adzan Maghrib. Sejak itu, Adi dan Saman mengalami teror supernatural yang mengerikan. Ayu menduga ada kekuatan jahat yang lebih menakutkan di balik rentetan kejadian ini. Mampukah AYU menyelamatkan Adi dan Saman sebelum semuanya terlambat?', 'img/Movie/waktumagrib.jpg', '', 'now_showing', '', '', '0000-00-00', '104 Minutes'),
(6, 'SAS: RED NOTICE', 'Sebuah pasukan kecil penjahat terlatih yang dipimpin oleh Grace Lewis telah membajak sebuah kereta di Inggris demi sebuah misi rahasia.', 'img/Movie/sas.jpg', '', 'now_showing', '', '', '0000-00-00', '124 Minutes'),
(7, 'MISSING', 'Setelah ibunya hilang saat berlibur di Kolombia, June (Storm Reid) berusaha keras untuk menemukannya dari rumah dengan memanfaatkan teknologi internet.', 'img/Movie/missing.jpg', '', 'now_showing', '', '', '0000-00-00', '111 Minutes'),
(8, 'PESUGIHAN', 'Hendri dan Marini memilki 2 orang putri yang sangat mereka cintai, segalanya mereka berikan untuk kebahagiaan anak-anak mereka, kecuali waktu. Bisnis yang mereka jalankan sedang berada di puncak kesuksesan, sehingga membuat Hendri dan Marini lebih sering berada diluar ketimbang menemani anak-anaknya. Sebagai gadis yang tegas, cerdas dan tidak banyak berbicara, Resikalah yang menjadi pengganti orangtua untuk adiknya Karin ; gadis manis, ceria, feminin dan agak kekanak-kanakan. Di SMA mereka, Resika berpacaran dengan Dion dan mereka memiliki sahabat bernama Jefta. Sampai hari itu, segalanya baik-baik saja. Namun suatu hari, Hendri dan Marini mendapat ‘pukulan’ luar biasa, bisnis mereka hancur, hutang menumpuk membuat rumah mereka yang tadinya selalu cerah berubah muram. Sikap Hendri yang kebapakan dan hangat berubah menjadi dingin dan acuh. Hingga suatu malam, Marini tanpa sengaja melihat Hendri pergi dengan diam-diam, Marini menangis dan meminta Hendri tidak melakukan ‘itu’ yang entah apa sebenarnya. Barulah terbuka bahwa yang dilakukan Hendri adalah ‘jalan pintas’ untuk mendapatkan kekayaannya kembali. ‘Jalan pintas’ yang diambil Hendri membuat terror yang tiada henti terjadi. Mungkinkah Hendri dapat mengembalikan kehidupan keluarganya seperti semula atau sebaliknya.', 'img/Movie/pesugihan.jpg', '', 'now_showing', '', '', '0000-00-00', '93 Minutes'),
(9, 'JOHN WICK', '', 'img/Movie/johnwick.jpg', '', 'coming_soon', '', '', '0000-00-00', ''),
(10, 'SHAZAM', '', 'img/Movie/shazam.jpg', '', 'coming_soon', '', '', '0000-00-00', ''),
(11, 'L0SMEN MELATI', '', 'img/Movie/losmen.jpg', '', 'coming_soon', '', '', '0000-00-00', ''),
(12, 'DUNGEONS & DRAGON', '', 'img/Movie/dungeons.jpg', '', 'coming_soon', '', '', '0000-00-00', '');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `id_studio`, `id_film`, `tanggal_tayang`, `jam_tayang`, `tiket_tersedia`, `tiket_terjual`, `harga_tiket`, `kursi_terjual`) VALUES
(7, 2, 1, '2023-07-09', '12:15:00', -39, 39, 50000, 'I9;I10;J8;J9;H6;F8;D7;H3;G6;D6;B3;B4;B7;B8;D8;E6;C5;E8;C6;F4;F6;E7;C4;B9;B6;B5;D4;H8;H10;D5;A5;A6;A7;A8;A9;A4;C7;C8;C9;'),
(8, 2, 1, '2023-07-10', '15:05:00', -69, 69, 35000, 'A8;A10;B10;B6;I7;C10;H8;H9;J6;D7;D7;A6;B7;H4;H7;C5;C6;D6;E6;F6;G6;H6;I6;I8;D10;E8;E10;F8;F9;E9;C11;C12;D11;D12;E11;E12;F11;F12;F10;F10;F10;F10;F10;F10;F10;F10;F10;F10;F10;G9;G10;H10;I9;I10;J7;J8;J9;J10;B8;B9;C8;C9;D8;G7;G8;F7;F7;A4;A5;');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama_lokasi` text NOT NULL,
  `wilayah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `jmlh_tiket` int(11) NOT NULL,
  `detail_tiket` varchar(100) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `id_user`, `id_jadwal`, `jmlh_tiket`, `detail_tiket`, `tanggal_transaksi`) VALUES
(34, 31, 7, 2, 'I9,I10', '2023-07-24 16:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `id` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `no_studio` int(11) NOT NULL,
  `pattern_kursi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `gender`, `no_telp`, `role`) VALUES
(31, 'user', '$2y$10$EFnPLE9dy24yDsx9SCGxRuOOfjq5F7XIzYMpJ8BqPV3i62E4By/sm', 'user@gmail.com', '', '', 'Users'),
(32, 'admin', '$2y$10$mhIf0bRy9M5amRjP7LoaPORuWktxfoHEBq4/Cso5gXLZj38MfiV9G', '', '', '', 'Admin');

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
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
