-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 06:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nomor` int(11) NOT NULL,
  `nip` int(50) DEFAULT NULL,
  `nama` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `no_hp` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `tanggal_berangkat` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `uang_saku` int(50) DEFAULT NULL,
  `tujuan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `jenis_kendaraan` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `keperluan` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `hasil` text NOT NULL,
  `permasalahan` text NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nomor`, `nip`, `nama`, `no_hp`, `tanggal_berangkat`, `tanggal_kembali`, `uang_saku`, `tujuan`, `jenis_kendaraan`, `keperluan`, `status`, `hasil`, `permasalahan`, `saran`) VALUES
(71, 123421, 'USEOP', '084787878', '2003-03-03', '2003-04-03', 150000, 'JAKARTA', 'BUROK', 'BIASA', 2, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `id_permintaan` int(100) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tgl_permintaan` date NOT NULL,
  `no_hp` int(100) NOT NULL,
  `statusp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nip` varchar(30) DEFAULT NULL,
  `jabatan` varchar(30) DEFAULT NULL,
  `tanggal_bergabung` date DEFAULT NULL,
  `status_kerja` text DEFAULT NULL,
  `level` enum('pegawai','manajer','finance') DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `profil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `nama`, `nip`, `jabatan`, `tanggal_bergabung`, `status_kerja`, `level`, `password`, `profil`) VALUES
(1, 'pegawai', 'Pegawai', '135240', 'Staff Administrasi', '2020-06-10', 'Kontrak', 'pegawai', '0b96cb1d0dfbcc85f6b57041656abc49', 'user3-128x128'),
(2, 'finance', 'Finance', '135241', 'Keuangan Kantor Utama', '2020-09-15', 'Pegawai Tetap', 'finance', 'b11d49f3630e78c3ab484e3c311963e7', 'user4-128x128'),
(3, 'manager', 'Manager', '135242', 'Manager Utama', '2000-01-21', 'Pegawai Tetap', 'manajer', 'c240642ddef994358c96da82c0361a58', 'user6-128x128');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`id_permintaan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `id_permintaan` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
