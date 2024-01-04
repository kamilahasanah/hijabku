-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2024 at 03:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hijabku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jenis_kerudung` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `warna` varchar(20) NOT NULL,
  `ukuran` varchar(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `terjual` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `jenis_kerudung`, `warna`, `ukuran`, `harga`, `stok`, `terjual`, `gambar`) VALUES
(1, 'Kerudung Bergo', 'Bergo Aluna', 'Hitam', 'M', 25000, 15, 8, 'alunahitam.jpg'),
(2, 'Kerudung Bergo', 'Bergo Aluna', 'Milo', 'M', 25000, 10, 5, 'alunamilo.jpg'),
(3, 'Kerudung Bergo', 'Bergo Aluna', 'Navy', 'M', 26000, 9, 2, 'alunanavy.jpg'),
(4, 'Kerudung Bergo', 'Bergo Aluna', 'Grey', 'M', 25000, 7, 4, 'alunagrey.jpg'),
(5, 'Kerudung Bergo', 'Bergo Aluna', 'Denim', 'M', 25000, 10, 0, 'alunadenim.jpg'),
(6, 'Kerudung Bergo', 'Bergo Clara', 'Cream', 'M', 22000, 10, 3, 'claracream1.jpg'),
(7, 'Kerudung Bergo', 'Bergo Clara', 'Hitam', 'M', 22000, 10, 5, 'clarahitam1.jpg'),
(8, 'Kerudung Bergo', 'Bergo Clara', 'Maroon', 'M', 22000, 8, 3, 'claramaroon1.jpg'),
(9, 'Kerudung Bergo', 'Bergo Clara', 'Denim', 'M', 22000, 9, 2, 'claradenim1.jpg'),
(10, 'Kerudung Bergo', 'Bergo Clara', 'Mint', 'M', 22000, 7, 0, 'claramint1.jpg'),
(11, 'Kerudung Bergo', 'Bergo Yoga', 'Hitam', 'M', 21000, 15, 8, 'yogahitam1.jpg'),
(12, 'Kerudung Bergo', 'Bergo Yoga', 'Expresso', 'M', 21000, 8, 0, 'yogaexpresso1.jpg'),
(13, 'Kerudung Bergo', 'Bergo Yoga', 'Nude', 'M', 21000, 10, 6, 'yoganude1.jpg'),
(14, 'Kerudung Bergo', 'Bergo Yoga', 'Sage', 'M', 21000, 12, 4, 'yogasage1.jpg'),
(16, 'Kerudung Bergo', 'Bergo Yoga', 'Dusty Pink', 'M', 21000, 9, 6, 'yogadustypink11.jpg'),
(17, 'Kerudung Bergo', 'Bergo Yoga', 'Dusty Pink', 'M', 21000, 9, 6, '7187248_(2).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
