-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 06:36 AM
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
-- Database: `db_warga`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('hazelnut', 'hazel234'),
('namiri345', 'namirihont2');

-- --------------------------------------------------------

--
-- Table structure for table `info_warga`
--

CREATE TABLE `info_warga` (
  `id_warga` int(8) NOT NULL,
  `nama_warga` varchar(50) NOT NULL,
  `alamat_warga` text NOT NULL,
  `notlp_warga` varchar(20) NOT NULL,
  `jum_anggota` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info_warga`
--

INSERT INTO `info_warga` (`id_warga`, `nama_warga`, `alamat_warga`, `notlp_warga`, `jum_anggota`) VALUES
(1, 'Nadhir', 'Bogor', '0989234', '2');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `usia` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `status_warga` varchar(225) NOT NULL,
  `jum_anggota` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id_warga`, `nama`, `usia`, `alamat`, `no_telp`, `status_warga`, `jum_anggota`) VALUES
(13, 'kalong', '20 Tahun', 'depok', '143141', 'Sudah Menikah', '1'),
(17, 'dwa', 'dwa', 'dwa', 'dwa', 'Belum Menikah', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_warga`
--
ALTER TABLE `info_warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_warga`
--
ALTER TABLE `info_warga`
  MODIFY `id_warga` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
