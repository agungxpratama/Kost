-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2020 at 10:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
('admin', '202cb962ac59075b964b07152d234b70\r\n', 'admin', 'admin@gmail.com', '082282710200', 'photo.png'),
('qwe', '76d80224611fc919a5d54f0ff9fba446', 'qwe', 'qwe@gmail.com', '123123123', '63297670-alien-wallpapers.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori_artikel` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `tgl_ubah` date NOT NULL,
  `foto` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `kategori_artikel`, `deskripsi`, `tgl_upload`, `tgl_ubah`, `foto`, `username`) VALUES
(6, 'Kos', '', '<br>Work Hard, Party Hard in a \\n Luxury Chalet in the Alps January 30, 2020 Admin  3 Far far away, behind the word mountains, <br> far from the countries Vokalia and Consonantia  Work Hard, Party Hard in a Luxury Chalet in the Alps January 30, 2020 Admin  3 Far far away, behind the word mountains, far from the countries Vokalia and Consonantia  Work Hard, Party Hard in a Luxury Chalet in the Alps January 30, 2020 Admin  3 Far far away, behind the word mountains, far from the countries Vokalia and Consonantia', '2020-04-26', '2020-04-26', 'car.jpg', 'admin');

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

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`kode_kamar`, `kode_kos`, `harga`, `deskripsi`, `foto`, `status`, `tgl_tersedia`) VALUES
('1', 'oonr4226', 1000000, 'Fasilitas', 'car.jpg', 'kosong', '2020-04-24'),
('kamar12', 'oonr2951', 1000000, 'fasilitas', 'Coffee.jpg', 'kosong', '2020-04-27');

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

--
-- Dumping data for table `kosan`
--

INSERT INTO `kosan` (`kode_kos`, `nama_kos`, `alamat`, `deskripsi`, `foto`, `jenis_kosan`, `saldo_kos`, `id_pemilik`) VALUES
('oonr2951', 'Moonroe', 'Bjs                                              ', '12312', 'car.jpg', 'Putra', 50, '1'),
('oonr4226', 'Moonroe', 'Bojongsoang', 'fasilitas lengkap', 'car.jpg', 'Putra', 0, 'pemilik');

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
('1', 'pemilik', '202cb962ac59075b964b07152d234b70', '123123', '1321323', 'pemilik@gmail.com', '123123123', 'pemilik', 'BRI', 'kepo', 'photo.png'),
('pemilik', 'pemilik', '202cb962ac59075b964b07152d234b70', '123', '123', '123@gmail.com', '123', '123', '', 'Laki-laki', 'car.jpg');

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
('1', '123', 'pencari', 'telkom', 'bengawan solo', '1999-12-06', 'solo', '123123123', 'mahasiwa', 'Laki-laki', 'pencari@gmail.com', '123123123', '123123123', 'photo.png');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `kode_pengeluaran` int(11) NOT NULL,
  `keterangan_pengeluaran` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_pemilik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `sisa_pembayaran` int(255) NOT NULL,
  `status_transaksi` int(11) NOT NULL,
  `bukti_bayar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `kode_kamar`, `id_pencari`, `total_bayar`, `tgl_bayar`, `tgl_masuk`, `tgl_keluar`, `sisa_pembayaran`, `status_transaksi`, `bukti_bayar`) VALUES
('trx001', '1', '1', 1000000, '2020-04-27', '2020-04-11', '2020-10-10', 0, 2, 'car.jpg'),
('trx002', 'kamar12', '1', 1000000, '2020-04-27', '2020-04-27', '2021-01-31', 0, 2, 'Coffee.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`kode_kamar`),
  ADD UNIQUE KEY `kode_kamar` (`kode_kamar`),
  ADD KEY `kode_kos` (`kode_kos`);

--
-- Indexes for table `kosan`
--
ALTER TABLE `kosan`
  ADD PRIMARY KEY (`kode_kos`),
  ADD UNIQUE KEY `kode_kos` (`kode_kos`),
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
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`kode_pengeluaran`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pencari` (`id_pencari`),
  ADD KEY `kode_kamar` (`kode_kamar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `kode_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`kode_kos`) REFERENCES `kosan` (`kode_kos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kosan`
--
ALTER TABLE `kosan`
  ADD CONSTRAINT `kosan_ibfk_1` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik` (`id_pemilik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pencari`) REFERENCES `pencari` (`id_pencari`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kode_kamar`) REFERENCES `kamar` (`kode_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
