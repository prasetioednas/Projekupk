-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 04:54 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_username` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(32) NOT NULL,
  `namalengkap` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_username`, `email`, `username`, `password`, `namalengkap`) VALUES
('AD-001', 'prasetioednas241@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Ednas Prasetio');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pembayaran`
--

CREATE TABLE `jenis_pembayaran` (
  `id_pembayaran` varchar(10) NOT NULL,
  `nama_pembayaran` varchar(50) NOT NULL,
  `harga` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pembayaran`
--

INSERT INTO `jenis_pembayaran` (`id_pembayaran`, `nama_pembayaran`, `harga`) VALUES
('PBR-001', 'SPP XII TKJ', '230000'),
('PBR-002', 'SPP XII RPL', '250000'),
('PBR-003', 'SPP XII Multimedia', '270000'),
('PBR-004', 'SPP X A', '230000'),
('PBR-005', 'SPP X B', '230000'),
('PBR-006', 'SPP X C', '230000'),
('PBR-007', 'SPP X D', '230000'),
('PBR-008', 'SPP XI TKJ ', '235000'),
('PBR-009', 'SPP XI RPL', '250000'),
('PBR-010', 'SPP XI Multimedia 1', '270000');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(3) NOT NULL,
  `kelas` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
(1, 'X'),
(2, 'XI'),
(3, 'XII');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` char(10) NOT NULL,
  `nipd` int(10) NOT NULL,
  `nama_siswa` varchar(55) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `id_kelas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nipd`, `nama_siswa`, `gender`, `id_kelas`) VALUES
('S-1201', 161710028, 'Achmad Nurfikri', 'L', 3),
('S-1202', 161710029, 'Afifah Yasmine', 'P', 3),
('S-1203', 161710023, 'Tia', 'P', 3),
('S-1204', 161710035, 'Ednas Prasetio', 'L', 3),
('S-1205', 161710039, 'anisah', 'P', 3),
('S-1206', 161710036, 'tegar', 'L', 3),
('S-1207', 161710040, 'Deni', 'L', 3),
('S-1208', 161710041, 'baihaki', 'L', 3),
('S-1209', 161710042, 'aldo', 'L', 3),
('S-1210', 161710045, 'pikri', 'L', 3),
('S-1211', 161710045, 'ike', 'P', 3),
('S-1212', 161710045, 'asdasd', 'L', 2),
('S-1213', 161710046, 'asdasdsadasd', 'L', 1),
('S-1214', 161710047, 'reza ', 'L', 3),
('S-1215', 161710048, 'FAHMI', 'L', 3);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idspp` int(11) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `jatuh_tempo` varchar(10) DEFAULT NULL,
  `bulan` varchar(20) NOT NULL,
  `no_bayar` varchar(10) DEFAULT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `jumlah_bayar` int(20) NOT NULL,
  `total_bayar` int(12) NOT NULL,
  `keterangan` varchar(20) DEFAULT NULL,
  `id_pembayaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idspp`, `id_siswa`, `jatuh_tempo`, `bulan`, `no_bayar`, `tgl_bayar`, `jumlah_bayar`, `total_bayar`, `keterangan`, `id_pembayaran`) VALUES
(13022048, 'S-1203', '1 Bulan', 'April 2019', '20190412', '2019-04-12', 0, 250000, 'LUNAS', 'PBR-002'),
(13022049, 'S-1204', '1 Bulan', 'April 2019', '20190412', '2019-04-12', 0, 250000, 'LUNAS', 'PBR-002'),
(13022050, 'S-1214', '1 Bulan', 'April 2019', '20190412', '2019-04-12', 0, 250000, 'LUNAS', 'PBR-004'),
(13022051, 'S-1215', '1 Bulan', 'April 2019', '20190413', '2019-04-13', 0, 250000, 'LUNAS', 'PBR-002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_username`);

--
-- Indexes for table `jenis_pembayaran`
--
ALTER TABLE `jenis_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idspp`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `FK_transaksi_jenis_pembayaran` (`id_pembayaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idspp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13022052;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
