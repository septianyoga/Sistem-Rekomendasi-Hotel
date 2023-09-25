-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 08:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk-ahp`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL,
  `link_website` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`, `link_website`) VALUES
(2, 'Fave Hotel', 'https://www.favehotels.com/en?utm_source=Affilired&utm_medium=affiliates&utm_campaign=global&_affclk=adn:3817::99dc030491fd192f20fc661595742971:8002y1'),
(3, 'Grand Hotel Subang', 'https://www.traveloka.com/id-id/hotel/indonesia/grant-hotel-subang-3000010004075'),
(5, 'Lotus', 'https://www.traveloka.com/id-id/hotel/indonesia/hotel-lotus-subang-3000010002259');

-- --------------------------------------------------------

--
-- Table structure for table `deskripsi_alternatif`
--

CREATE TABLE `deskripsi_alternatif` (
  `id_deskripsi_alternatif` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deskripsi_alternatif`
--

INSERT INTO `deskripsi_alternatif` (`id_deskripsi_alternatif`, `id_alternatif`, `id_kriteria`, `value`) VALUES
(5, 2, 2, '800000'),
(6, 2, 3, 'Subang'),
(7, 2, 4, '2 Kamar Mandi, AC, 2 Kamar Tidur'),
(8, 2, 5, '1695614245_697f16e0536fe4dcea26.jpg'),
(9, 3, 2, '900000'),
(10, 3, 3, 'Subang'),
(11, 3, 4, '2 Kamar Mandi, AC, 4 Kamar Tidur'),
(12, 3, 5, '1695615319_ec3c15291ecd1541ec0c.jpg'),
(17, 5, 2, '500000'),
(18, 5, 3, 'Subang'),
(19, 5, 4, '1 Kamar Mandi, AC, 2 Kamar Tidur'),
(20, 5, 5, '1695621942_a729079f3d5e9a779930.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(30) NOT NULL,
  `tipe` enum('text','number','image') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `tipe`) VALUES
(2, 'Harga', 'number'),
(3, 'Lokasi', 'text'),
(4, 'Fasilitas', 'text'),
(5, 'Desain', 'image');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `created_at`) VALUES
(1, 'admin', 'admin', 'password', '2023-09-18 07:22:40'),
(3, 'Fauzan Poke', 'pauzan', 'password', '2023-09-18 07:49:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `deskripsi_alternatif`
--
ALTER TABLE `deskripsi_alternatif`
  ADD PRIMARY KEY (`id_deskripsi_alternatif`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `deskripsi_alternatif`
--
ALTER TABLE `deskripsi_alternatif`
  MODIFY `id_deskripsi_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deskripsi_alternatif`
--
ALTER TABLE `deskripsi_alternatif`
  ADD CONSTRAINT `deskripsi_alternatif_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deskripsi_alternatif_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
