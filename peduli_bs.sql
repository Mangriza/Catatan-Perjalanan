-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 08:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peduli_bs`
--

-- --------------------------------------------------------

--
-- Table structure for table `catatan`
--

CREATE TABLE `catatan` (
  `id_catatan` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `suhu` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`id_catatan`, `nama_lengkap`, `tanggal`, `waktu`, `lokasi`, `suhu`) VALUES
(23, 'riza', '2022-04-14', '17:07:00', 'bandung', '30'),
(24, 'riza', '2022-04-06', '12:45:00', 'rancaekek', '30'),
(25, 'users', '2022-04-12', '10:57:00', 'rancaekek', '10'),
(27, 'riza', '2022-04-08', '10:00:00', 'rancaekek', '20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nik`, `nama_lengkap`, `password`, `level`) VALUES
(5, '222', 'admin', 'admin', 'admin'),
(6, '333', 'users', 'users', 'user'),
(8, '123', 'riza', 'riza', 'user'),
(14, '123456', 'MRIZA', 'RIZA123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id_catatan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id_catatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
