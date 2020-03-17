-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2020 at 03:02 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kost`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama_admin`, `email`, `no_telp`, `foto`) VALUES
('admin', '202cb962ac59075b964b07152d234b70\r\n', 'admin', 'admin@gmail.com', '082282710200', 'photo.png');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `kode_kamar` varchar(255) NOT NULL,
  `kode_kos` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tgl_tersedia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kosan`
--

CREATE TABLE `kosan` (
  `kode_kos` varchar(255) NOT NULL,
  `nama_kos` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `jenis_kosan` varchar(255) NOT NULL,
  `saldo_kos` int(255) NOT NULL,
  `id_pemilik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` varchar(255) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_rek` varchar(255) NOT NULL,
  `atas_nama_rek` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `nama_pemilik`, `password`, `no_ktp`, `no_telp`, `email`, `no_rek`, `atas_nama_rek`, `bank`, `jenis_kelamin`, `foto`) VALUES
('1', 'pemilik', '202cb962ac59075b964b07152d234b70', '123123', '1321323', 'pemilik@gmail.com', '123123123', 'pemilik', 'bca', 'kepo', 'photo.png');

-- --------------------------------------------------------

--
-- Table structure for table `pencari`
--

CREATE TABLE `pencari` (
  `id_pencari` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_pencari` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `asal_daerah` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `no_telp_wali` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pencari`
--

INSERT INTO `pencari` (`id_pencari`, `password`, `nama_pencari`, `instansi`, `tempat_lahir`, `tgl_lahir`, `asal_daerah`, `no_ktp`, `status`, `jenis_kelamin`, `email`, `no_telp`, `no_telp_wali`, `foto`) VALUES
('1', '123', 'pencari', 'telkom', 'bengawan solo', '1999-12-06', 'solo', '123123123', 'mahasiwa', 'mau tau', 'pencari@gmail.com', '123123123', '123123123', 'photo.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(255) NOT NULL,
  `kode_kamar` varchar(255) NOT NULL,
  `id_pencari` varchar(255) NOT NULL,
  `total_bayar` int(255) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `sisa_pembayaran` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`kode_kamar`),
  ADD KEY `kode_kos` (`kode_kos`);

--
-- Indexes for table `kosan`
--
ALTER TABLE `kosan`
  ADD PRIMARY KEY (`kode_kos`),
  ADD KEY `id_pemilik` (`id_pemilik`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indexes for table `pencari`
--
ALTER TABLE `pencari`
  ADD PRIMARY KEY (`id_pencari`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pencari` (`id_pencari`),
  ADD KEY `kode_kamar` (`kode_kamar`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`kode_kos`) REFERENCES `kosan` (`kode_kos`);

--
-- Constraints for table `kosan`
--
ALTER TABLE `kosan`
  ADD CONSTRAINT `kosan_ibfk_1` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik` (`id_pemilik`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pencari`) REFERENCES `pencari` (`id_pencari`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kode_kamar`) REFERENCES `kamar` (`kode_kamar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;