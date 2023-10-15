-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 09:14 AM
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
-- Table structure for table `alternatif_bobot`
--

CREATE TABLE `alternatif_bobot` (
  `id_alternatif_bobot` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` float NOT NULL,
  `id_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alternatif_bobot`
--

INSERT INTO `alternatif_bobot` (`id_alternatif_bobot`, `id_alternatif`, `id_kriteria`, `nilai`, `id_user`) VALUES
(1, 2, 2, 0.326115, '820943869_02-10-2023-14:10'),
(2, 3, 2, 0.434987, '820943869_02-10-2023-14:10'),
(3, 5, 2, 0.238897, '820943869_02-10-2023-14:10'),
(4, 2, 3, 0.12037, '820943869_02-10-2023-14:10'),
(5, 3, 3, 0.611111, '820943869_02-10-2023-14:10'),
(6, 5, 3, 0.268519, '820943869_02-10-2023-14:10'),
(7, 2, 4, 0.590401, '820943869_02-10-2023-14:10'),
(8, 3, 4, 0.105476, '820943869_02-10-2023-14:10'),
(9, 5, 4, 0.304123, '820943869_02-10-2023-14:10'),
(10, 2, 5, 0.284228, '820943869_02-10-2023-14:10'),
(11, 3, 5, 0.619352, '820943869_02-10-2023-14:10'),
(12, 5, 5, 0.0964194, '820943869_02-10-2023-14:10'),
(67, 2, 2, 0.162203, '1953923639_08-10-2023-10:37'),
(68, 3, 2, 0.0873906, '1953923639_08-10-2023-10:37'),
(69, 5, 2, 0.750407, '1953923639_08-10-2023-10:37'),
(70, 2, 3, 0.0875643, '1953923639_08-10-2023-10:37'),
(71, 3, 3, 0.161244, '1953923639_08-10-2023-10:37'),
(72, 5, 3, 0.751192, '1953923639_08-10-2023-10:37'),
(73, 2, 4, 0.271068, '1953923639_08-10-2023-10:37'),
(74, 3, 4, 0.32025, '1953923639_08-10-2023-10:37'),
(75, 5, 4, 0.408682, '1953923639_08-10-2023-10:37'),
(76, 2, 5, 0.325778, '1953923639_08-10-2023-10:37'),
(77, 3, 5, 0.603938, '1953923639_08-10-2023-10:37'),
(78, 5, 5, 0.0702839, '1953923639_08-10-2023-10:37'),
(79, 2, 2, 0.148352, '2095052940_11-10-2023-13:17'),
(80, 3, 2, 0.168498, '2095052940_11-10-2023-13:17'),
(81, 5, 2, 0.68315, '2095052940_11-10-2023-13:17'),
(82, 2, 3, 0.394843, '2095052940_11-10-2023-13:17'),
(83, 3, 3, 0.359968, '2095052940_11-10-2023-13:17'),
(84, 5, 3, 0.245189, '2095052940_11-10-2023-13:17'),
(85, 2, 4, 0.108387, '2095052940_11-10-2023-13:17'),
(86, 3, 4, 0.143328, '2095052940_11-10-2023-13:17'),
(87, 5, 4, 0.748285, '2095052940_11-10-2023-13:17'),
(88, 2, 5, 0.546667, '2095052940_11-10-2023-13:17'),
(89, 3, 5, 0.384444, '2095052940_11-10-2023-13:17'),
(90, 5, 5, 0.0688889, '2095052940_11-10-2023-13:17'),
(91, 2, 2, 0.167594, '635576507_11-10-2023-13:58'),
(92, 3, 2, 0.0944353, '635576507_11-10-2023-13:58'),
(93, 5, 2, 0.737971, '635576507_11-10-2023-13:58'),
(94, 2, 3, 0.0992563, '635576507_11-10-2023-13:58'),
(95, 3, 3, 0.178272, '635576507_11-10-2023-13:58'),
(96, 5, 3, 0.722472, '635576507_11-10-2023-13:58'),
(97, 2, 4, 0.611147, '635576507_11-10-2023-13:58'),
(98, 3, 4, 0.111702, '635576507_11-10-2023-13:58'),
(99, 5, 4, 0.277151, '635576507_11-10-2023-13:58'),
(100, 2, 5, 0.363379, '635576507_11-10-2023-13:58'),
(101, 3, 5, 0.280612, '635576507_11-10-2023-13:58'),
(102, 5, 5, 0.356009, '635576507_11-10-2023-13:58'),
(103, 2, 2, 0.15366, '322311155_11-10-2023-14:00'),
(104, 3, 2, 0.205871, '322311155_11-10-2023-14:00'),
(105, 5, 2, 0.640468, '322311155_11-10-2023-14:00'),
(106, 2, 3, 0.258456, '322311155_11-10-2023-14:00'),
(107, 3, 3, 0.678267, '322311155_11-10-2023-14:00'),
(108, 5, 3, 0.0632779, '322311155_11-10-2023-14:00'),
(109, 2, 4, 0.596319, '322311155_11-10-2023-14:00'),
(110, 3, 4, 0.108175, '322311155_11-10-2023-14:00'),
(111, 5, 4, 0.295506, '322311155_11-10-2023-14:00'),
(112, 2, 5, 0.5711, '322311155_11-10-2023-14:00'),
(113, 3, 5, 0.159113, '322311155_11-10-2023-14:00'),
(114, 5, 5, 0.269787, '322311155_11-10-2023-14:00'),
(115, 2, 2, 0.25, '795015148_11-10-2023-14:56'),
(116, 3, 2, 0.75, '795015148_11-10-2023-14:56'),
(117, 2, 2, 0.0975916, '1038404115_11-10-2023-14:56'),
(118, 3, 2, 0.14142, '1038404115_11-10-2023-14:56'),
(119, 5, 2, 0.760988, '1038404115_11-10-2023-14:56'),
(120, 2, 3, 0.127464, '1038404115_11-10-2023-14:56'),
(121, 3, 3, 0.609058, '1038404115_11-10-2023-14:56'),
(122, 5, 3, 0.263478, '1038404115_11-10-2023-14:56'),
(123, 2, 4, 0.572833, '1038404115_11-10-2023-14:56'),
(124, 3, 4, 0.107044, '1038404115_11-10-2023-14:56'),
(125, 5, 4, 0.320122, '1038404115_11-10-2023-14:56'),
(126, 2, 5, 0.516402, '1038404115_11-10-2023-14:56'),
(127, 3, 5, 0.345767, '1038404115_11-10-2023-14:56'),
(128, 5, 5, 0.137831, '1038404115_11-10-2023-14:56'),
(129, 2, 2, 0.704302, '1800163259_15-10-2023-13:48'),
(130, 3, 2, 0.127056, '1800163259_15-10-2023-13:48'),
(131, 5, 2, 0.168642, '1800163259_15-10-2023-13:48'),
(132, 2, 3, 0.0936081, '1800163259_15-10-2023-13:48'),
(133, 3, 3, 0.219961, '1800163259_15-10-2023-13:48'),
(134, 5, 3, 0.686431, '1800163259_15-10-2023-13:48'),
(135, 2, 4, 0.419192, '1800163259_15-10-2023-13:48'),
(136, 3, 4, 0.282828, '1800163259_15-10-2023-13:48'),
(137, 5, 4, 0.29798, '1800163259_15-10-2023-13:48'),
(138, 2, 5, 0.323786, '1800163259_15-10-2023-13:48'),
(139, 3, 5, 0.349452, '1800163259_15-10-2023-13:48'),
(140, 5, 5, 0.326761, '1800163259_15-10-2023-13:48');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif_deskripsi`
--

CREATE TABLE `alternatif_deskripsi` (
  `id_deskripsi_alternatif` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alternatif_deskripsi`
--

INSERT INTO `alternatif_deskripsi` (`id_deskripsi_alternatif`, `id_alternatif`, `id_kriteria`, `value`) VALUES
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
-- Table structure for table `alternatif_perbandingan`
--

CREATE TABLE `alternatif_perbandingan` (
  `id_alternatif_perbandingan` int(11) NOT NULL,
  `id_alternatif1` int(11) NOT NULL,
  `id_alternatif2` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` float NOT NULL,
  `id_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alternatif_perbandingan`
--

INSERT INTO `alternatif_perbandingan` (`id_alternatif_perbandingan`, `id_alternatif1`, `id_alternatif2`, `id_kriteria`, `nilai`, `id_user`) VALUES
(1, 2, 3, 2, 2, '820943869_02-10-2023-14:10'),
(2, 2, 5, 2, 0.5, '820943869_02-10-2023-14:10'),
(3, 3, 5, 2, 8, '820943869_02-10-2023-14:10'),
(4, 2, 3, 3, 0.333333, '820943869_02-10-2023-14:10'),
(5, 2, 5, 3, 0.2, '820943869_02-10-2023-14:10'),
(6, 3, 5, 3, 6, '820943869_02-10-2023-14:10'),
(7, 2, 3, 4, 3, '820943869_02-10-2023-14:10'),
(8, 2, 5, 4, 7, '820943869_02-10-2023-14:10'),
(9, 3, 5, 4, 0.111111, '820943869_02-10-2023-14:10'),
(10, 2, 3, 5, 0.333333, '820943869_02-10-2023-14:10'),
(11, 2, 5, 5, 4, '820943869_02-10-2023-14:10'),
(12, 3, 5, 5, 5, '820943869_02-10-2023-14:10'),
(13, 2, 3, 2, 4, '1139059837_02-10-2023-14:11'),
(14, 2, 5, 2, 7, '1139059837_02-10-2023-14:11'),
(15, 3, 5, 2, 0.125, '1139059837_02-10-2023-14:11'),
(16, 2, 3, 3, 3, '1139059837_02-10-2023-14:11'),
(17, 2, 5, 3, 0.166667, '1139059837_02-10-2023-14:11'),
(18, 3, 5, 3, 9, '1139059837_02-10-2023-14:11'),
(19, 2, 3, 4, 2, '1139059837_02-10-2023-14:11'),
(20, 2, 5, 4, 6, '1139059837_02-10-2023-14:11'),
(21, 3, 5, 4, 0.125, '1139059837_02-10-2023-14:11'),
(22, 2, 3, 5, 0.5, '1139059837_02-10-2023-14:11'),
(23, 2, 5, 5, 4, '1139059837_02-10-2023-14:11'),
(24, 3, 5, 5, 8, '1139059837_02-10-2023-14:11'),
(25, 2, 2, 2, 0.333333, '321114835_07-10-2023-09:13'),
(26, 2, 2, 2, 8, '321114835_07-10-2023-09:13'),
(27, 2, 2, 2, 0.166667, '321114835_07-10-2023-09:13'),
(28, 2, 2, 3, 2, '321114835_07-10-2023-09:13'),
(29, 2, 2, 3, 7, '321114835_07-10-2023-09:13'),
(30, 2, 2, 3, 0.25, '321114835_07-10-2023-09:13'),
(31, 2, 2, 4, 0.5, '321114835_07-10-2023-09:13'),
(32, 2, 2, 4, 0.2, '321114835_07-10-2023-09:13'),
(33, 2, 2, 4, 0.111111, '321114835_07-10-2023-09:13'),
(43, 2, 2, 2, 5, '193520376_07-10-2023-11:44'),
(44, 2, 2, 2, 0.166667, '193520376_07-10-2023-11:44'),
(45, 2, 2, 2, 9, '193520376_07-10-2023-11:44'),
(46, 2, 2, 3, 0.125, '193520376_07-10-2023-11:44'),
(47, 2, 2, 3, 0.125, '193520376_07-10-2023-11:44'),
(48, 2, 2, 3, 0.125, '193520376_07-10-2023-11:44'),
(49, 2, 2, 4, 0.333333, '193520376_07-10-2023-11:44'),
(50, 2, 2, 4, 4, '193520376_07-10-2023-11:44'),
(51, 2, 2, 4, 9, '193520376_07-10-2023-11:44'),
(52, 2, 2, 5, 5, '193520376_07-10-2023-11:44'),
(53, 2, 2, 5, 0.5, '193520376_07-10-2023-11:44'),
(54, 2, 2, 5, 0.111111, '193520376_07-10-2023-11:44'),
(55, 2, 2, 2, 0.5, '425841729_07-10-2023-13:23'),
(56, 2, 2, 2, 0.142857, '425841729_07-10-2023-13:23'),
(57, 2, 2, 2, 0.166667, '425841729_07-10-2023-13:23'),
(58, 2, 2, 3, 2, '425841729_07-10-2023-13:23'),
(59, 2, 2, 3, 3, '425841729_07-10-2023-13:23'),
(60, 2, 2, 3, 0.333333, '425841729_07-10-2023-13:23'),
(61, 2, 2, 4, 0.333333, '425841729_07-10-2023-13:23'),
(62, 2, 2, 4, 0.333333, '425841729_07-10-2023-13:23'),
(63, 2, 2, 4, 0.166667, '425841729_07-10-2023-13:23'),
(64, 2, 2, 5, 4, '425841729_07-10-2023-13:23'),
(65, 2, 2, 5, 6, '425841729_07-10-2023-13:23'),
(66, 2, 2, 5, 0.2, '425841729_07-10-2023-13:23'),
(67, 2, 2, 2, 2, '1953923639_08-10-2023-10:37'),
(68, 2, 2, 2, 0.2, '1953923639_08-10-2023-10:37'),
(69, 2, 2, 2, 0.125, '1953923639_08-10-2023-10:37'),
(70, 2, 3, 3, 0.333333, '1953923639_08-10-2023-10:37'),
(71, 2, 5, 3, 0.166667, '1953923639_08-10-2023-10:37'),
(72, 3, 5, 3, 0.111111, '1953923639_08-10-2023-10:37'),
(73, 2, 3, 4, 0.2, '1953923639_08-10-2023-10:37'),
(74, 2, 5, 4, 2, '1953923639_08-10-2023-10:37'),
(75, 3, 5, 4, 0.166667, '1953923639_08-10-2023-10:37'),
(76, 2, 3, 5, 0.5, '1953923639_08-10-2023-10:37'),
(77, 2, 5, 5, 5, '1953923639_08-10-2023-10:37'),
(78, 3, 5, 5, 8, '1953923639_08-10-2023-10:37'),
(79, 2, 3, 2, 0.5, '2095052940_11-10-2023-13:17'),
(80, 2, 5, 2, 0.333333, '2095052940_11-10-2023-13:17'),
(81, 3, 5, 2, 0.111111, '2095052940_11-10-2023-13:17'),
(82, 2, 3, 3, 0.333333, '2095052940_11-10-2023-13:17'),
(83, 2, 5, 3, 8, '2095052940_11-10-2023-13:17'),
(84, 3, 5, 3, 0.5, '2095052940_11-10-2023-13:17'),
(85, 2, 3, 4, 0.5, '2095052940_11-10-2023-13:17'),
(86, 2, 5, 4, 0.2, '2095052940_11-10-2023-13:17'),
(87, 3, 5, 4, 0.111111, '2095052940_11-10-2023-13:17'),
(88, 2, 3, 5, 2, '2095052940_11-10-2023-13:17'),
(89, 2, 5, 5, 6, '2095052940_11-10-2023-13:17'),
(90, 3, 5, 5, 8, '2095052940_11-10-2023-13:17'),
(91, 2, 3, 2, 2, '635576507_11-10-2023-13:58'),
(92, 2, 5, 2, 0.2, '635576507_11-10-2023-13:58'),
(93, 3, 5, 2, 0.142857, '635576507_11-10-2023-13:58'),
(94, 2, 3, 3, 0.333333, '635576507_11-10-2023-13:58'),
(95, 2, 5, 3, 0.2, '635576507_11-10-2023-13:58'),
(96, 3, 5, 3, 0.125, '635576507_11-10-2023-13:58'),
(97, 2, 3, 4, 3, '635576507_11-10-2023-13:58'),
(98, 2, 5, 4, 8, '635576507_11-10-2023-13:58'),
(99, 3, 5, 4, 0.142857, '635576507_11-10-2023-13:58'),
(100, 2, 3, 5, 0.333333, '635576507_11-10-2023-13:58'),
(101, 2, 5, 5, 5, '635576507_11-10-2023-13:58'),
(102, 3, 5, 5, 0.125, '635576507_11-10-2023-13:58'),
(103, 2, 3, 2, 0.5, '322311155_11-10-2023-14:00'),
(104, 2, 5, 2, 0.333333, '322311155_11-10-2023-14:00'),
(105, 3, 5, 2, 0.2, '322311155_11-10-2023-14:00'),
(106, 2, 3, 3, 0.25, '322311155_11-10-2023-14:00'),
(107, 2, 5, 3, 6, '322311155_11-10-2023-14:00'),
(108, 3, 5, 3, 8, '322311155_11-10-2023-14:00'),
(109, 2, 3, 4, 3, '322311155_11-10-2023-14:00'),
(110, 2, 5, 4, 7, '322311155_11-10-2023-14:00'),
(111, 3, 5, 4, 0.125, '322311155_11-10-2023-14:00'),
(112, 2, 3, 5, 2, '322311155_11-10-2023-14:00'),
(113, 2, 5, 5, 6, '322311155_11-10-2023-14:00'),
(114, 3, 5, 5, 0.25, '322311155_11-10-2023-14:00'),
(115, 2, 3, 2, 0.333333, '795015148_11-10-2023-14:56'),
(116, 2, 3, 2, 0.5, '1038404115_11-10-2023-14:56'),
(117, 2, 5, 2, 0.166667, '1038404115_11-10-2023-14:56'),
(118, 3, 5, 2, 0.125, '1038404115_11-10-2023-14:56'),
(119, 2, 3, 3, 0.333333, '1038404115_11-10-2023-14:56'),
(120, 2, 5, 3, 0.25, '1038404115_11-10-2023-14:56'),
(121, 3, 5, 3, 5, '1038404115_11-10-2023-14:56'),
(122, 2, 3, 4, 3, '1038404115_11-10-2023-14:56'),
(123, 2, 5, 4, 5, '1038404115_11-10-2023-14:56'),
(124, 3, 5, 4, 0.125, '1038404115_11-10-2023-14:56'),
(125, 2, 3, 5, 4, '1038404115_11-10-2023-14:56'),
(126, 2, 5, 5, 2, '1038404115_11-10-2023-14:56'),
(127, 3, 5, 5, 7, '1038404115_11-10-2023-14:56'),
(128, 2, 3, 2, 4, '1800163259_15-10-2023-13:48'),
(129, 2, 5, 2, 7, '1800163259_15-10-2023-13:48'),
(130, 3, 5, 2, 0.5, '1800163259_15-10-2023-13:48'),
(131, 2, 3, 3, 0.25, '1800163259_15-10-2023-13:48'),
(132, 2, 5, 3, 0.2, '1800163259_15-10-2023-13:48'),
(133, 3, 5, 3, 0.166667, '1800163259_15-10-2023-13:48'),
(134, 2, 3, 4, 0.5, '1800163259_15-10-2023-13:48'),
(135, 2, 5, 4, 7, '1800163259_15-10-2023-13:48'),
(136, 3, 5, 4, 0.25, '1800163259_15-10-2023-13:48'),
(137, 2, 3, 5, 0.111111, '1800163259_15-10-2023-13:48'),
(138, 2, 5, 5, 7, '1800163259_15-10-2023-13:48'),
(139, 3, 5, 5, 0.166667, '1800163259_15-10-2023-13:48');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif_pilihan`
--

CREATE TABLE `alternatif_pilihan` (
  `id_alternatif_pilihan` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alternatif_pilihan`
--

INSERT INTO `alternatif_pilihan` (`id_alternatif_pilihan`, `id_alternatif`, `id_user`) VALUES
(1, 2, '820943869_02-10-2023-14:10'),
(2, 3, '820943869_02-10-2023-14:10'),
(3, 5, '820943869_02-10-2023-14:10'),
(4, 2, '1139059837_02-10-2023-14:11'),
(5, 3, '1139059837_02-10-2023-14:11'),
(6, 5, '1139059837_02-10-2023-14:11'),
(7, 2, '908342699_02-10-2023-14:25'),
(8, 3, '908342699_02-10-2023-14:25'),
(9, 5, '908342699_02-10-2023-14:25'),
(10, 2, '321114835_07-10-2023-09:13'),
(11, 3, '321114835_07-10-2023-09:13'),
(12, 5, '321114835_07-10-2023-09:13'),
(13, 2, '193520376_07-10-2023-11:44'),
(14, 3, '193520376_07-10-2023-11:44'),
(15, 5, '193520376_07-10-2023-11:44'),
(16, 2, '425841729_07-10-2023-13:23'),
(17, 3, '425841729_07-10-2023-13:23'),
(18, 5, '425841729_07-10-2023-13:23'),
(19, 2, '1953923639_08-10-2023-10:37'),
(20, 3, '1953923639_08-10-2023-10:37'),
(21, 5, '1953923639_08-10-2023-10:37'),
(22, 2, '2095052940_11-10-2023-13:17'),
(23, 3, '2095052940_11-10-2023-13:17'),
(24, 5, '2095052940_11-10-2023-13:17'),
(25, 2, '635576507_11-10-2023-13:58'),
(26, 3, '635576507_11-10-2023-13:58'),
(27, 5, '635576507_11-10-2023-13:58'),
(28, 2, '322311155_11-10-2023-14:00'),
(29, 3, '322311155_11-10-2023-14:00'),
(30, 5, '322311155_11-10-2023-14:00'),
(31, 2, '795015148_11-10-2023-14:56'),
(32, 3, '795015148_11-10-2023-14:56'),
(33, 2, '1038404115_11-10-2023-14:56'),
(34, 3, '1038404115_11-10-2023-14:56'),
(35, 5, '1038404115_11-10-2023-14:56'),
(36, 2, '1800163259_15-10-2023-13:48'),
(37, 3, '1800163259_15-10-2023-13:48'),
(38, 5, '1800163259_15-10-2023-13:48');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif_ranking`
--

CREATE TABLE `alternatif_ranking` (
  `id_alternatif` int(11) NOT NULL,
  `nilai` float NOT NULL,
  `id_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alternatif_ranking`
--

INSERT INTO `alternatif_ranking` (`id_alternatif`, `nilai`, `id_user`) VALUES
(2, 0.400973, '322311155_11-10-2023-14:00'),
(3, 0.407818, '322311155_11-10-2023-14:00'),
(5, 0.19121, '322311155_11-10-2023-14:00'),
(2, 0.317177, '1038404115_11-10-2023-14:56'),
(3, 0.396452, '1038404115_11-10-2023-14:56'),
(5, 0.286371, '1038404115_11-10-2023-14:56'),
(2, 0.254853, '1800163259_15-10-2023-13:48'),
(3, 0.253264, '1800163259_15-10-2023-13:48'),
(5, 0.491884, '1800163259_15-10-2023-13:48');

-- --------------------------------------------------------

--
-- Table structure for table `index_rasio`
--

CREATE TABLE `index_rasio` (
  `jumlah` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `index_rasio`
--

INSERT INTO `index_rasio` (`jumlah`, `nilai`) VALUES
(1, 0),
(2, 0),
(3, 0.58),
(4, 0.9),
(5, 1.12),
(6, 1.24),
(7, 1.32),
(8, 1.41),
(9, 1.45),
(10, 1.49),
(11, 1.51),
(12, 1.48),
(13, 1.56),
(14, 1.57),
(15, 1.59);

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
-- Table structure for table `kriteria_bobot`
--

CREATE TABLE `kriteria_bobot` (
  `id_kriteria` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteria_bobot`
--

INSERT INTO `kriteria_bobot` (`id_kriteria`, `nilai`) VALUES
(2, 0.0480374),
(3, 0.504454),
(4, 0.302934),
(5, 0.144575);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_perbandingan`
--

CREATE TABLE `kriteria_perbandingan` (
  `id_kriteria_perbandingan` int(11) NOT NULL,
  `id_kriteria1` int(11) NOT NULL,
  `id_kriteria2` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteria_perbandingan`
--

INSERT INTO `kriteria_perbandingan` (`id_kriteria_perbandingan`, `id_kriteria1`, `id_kriteria2`, `nilai`) VALUES
(1, 2, 3, 0.142857),
(2, 2, 4, 0.2),
(3, 2, 5, 0.142857),
(4, 3, 4, 3),
(5, 3, 5, 5),
(6, 4, 5, 7);

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
-- Indexes for table `alternatif_bobot`
--
ALTER TABLE `alternatif_bobot`
  ADD PRIMARY KEY (`id_alternatif_bobot`);

--
-- Indexes for table `alternatif_deskripsi`
--
ALTER TABLE `alternatif_deskripsi`
  ADD PRIMARY KEY (`id_deskripsi_alternatif`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `alternatif_perbandingan`
--
ALTER TABLE `alternatif_perbandingan`
  ADD PRIMARY KEY (`id_alternatif_perbandingan`);

--
-- Indexes for table `alternatif_pilihan`
--
ALTER TABLE `alternatif_pilihan`
  ADD PRIMARY KEY (`id_alternatif_pilihan`),
  ADD KEY `id_alternatif` (`id_alternatif`);

--
-- Indexes for table `index_rasio`
--
ALTER TABLE `index_rasio`
  ADD PRIMARY KEY (`jumlah`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `kriteria_bobot`
--
ALTER TABLE `kriteria_bobot`
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `kriteria_perbandingan`
--
ALTER TABLE `kriteria_perbandingan`
  ADD PRIMARY KEY (`id_kriteria_perbandingan`),
  ADD KEY `id_kriteria1` (`id_kriteria1`,`id_kriteria2`),
  ADD KEY `id_kriteria2` (`id_kriteria2`);

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
-- AUTO_INCREMENT for table `alternatif_bobot`
--
ALTER TABLE `alternatif_bobot`
  MODIFY `id_alternatif_bobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `alternatif_deskripsi`
--
ALTER TABLE `alternatif_deskripsi`
  MODIFY `id_deskripsi_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `alternatif_perbandingan`
--
ALTER TABLE `alternatif_perbandingan`
  MODIFY `id_alternatif_perbandingan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `alternatif_pilihan`
--
ALTER TABLE `alternatif_pilihan`
  MODIFY `id_alternatif_pilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kriteria_perbandingan`
--
ALTER TABLE `kriteria_perbandingan`
  MODIFY `id_kriteria_perbandingan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alternatif_deskripsi`
--
ALTER TABLE `alternatif_deskripsi`
  ADD CONSTRAINT `alternatif_deskripsi_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alternatif_deskripsi_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `alternatif_pilihan`
--
ALTER TABLE `alternatif_pilihan`
  ADD CONSTRAINT `alternatif_pilihan_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kriteria_bobot`
--
ALTER TABLE `kriteria_bobot`
  ADD CONSTRAINT `kriteria_bobot_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kriteria_perbandingan`
--
ALTER TABLE `kriteria_perbandingan`
  ADD CONSTRAINT `kriteria_perbandingan_ibfk_1` FOREIGN KEY (`id_kriteria1`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kriteria_perbandingan_ibfk_2` FOREIGN KEY (`id_kriteria2`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
