-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 06, 2021 at 12:34 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkursusrissa`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `idkontak` int(11) NOT NULL,
  `idtamu` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pesanuser` text NOT NULL,
  `pesanadmin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`idkontak`, `idtamu`, `username`, `pesanuser`, `pesanadmin`) VALUES
(2, 1, 'Rissa ', 'Hallo, Saya mau bertanya, apakah lokasi RMHR ada di luar daerah bandung?', ''),
(3, 1, 'Rissa ', '', 'Hallo, Untuk saat ini RMHR hanya tersedia di kota Bandung ya.');

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `idkursus` int(10) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `bidang` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`idkursus`, `tipe`, `bidang`, `jumlah`, `harga`, `gambar`) VALUES
(1, 'Seni Musik', 'Vokal', 21, 525000, 'vokal.png'),
(2, 'Seni Musik', 'Drum', 20, 525000, 'drum.png'),
(3, 'Seni Musik', 'Gitar', 20, 525000, 'gitar.png'),
(4, 'Seni Musik', 'Piano', 20, 525000, 'piano.png'),
(5, 'Seni Musik', 'Bass', 20, 525000, 'bass.png'),
(6, 'Seni Musik', 'Biola', 20, 525000, 'biola.png'),
(7, 'Seni Tari', 'Line Dance', 20, 525000, 'dance.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idpesan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `norek` varchar(15) NOT NULL,
  `namarek` varchar(50) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`idpesan`, `nama`, `harga`, `bank`, `norek`, `namarek`, `gambar`) VALUES
(1, 'Rio Aldi', 525000, 'BCA', '213987567', 'Rio Aldi', 'Langkah terakhi.JPG'),
(2, 'Rissa Gunawan', 525000, 'BNI', '2103974927', 'Rissa Gunawan', '1540447745_25-10-2018_14.jpg'),
(5, 'Rissa Gunawan', 525000, 'BCA', '2103974927', 'Rissa Gunawan', 'Langkah terakhi.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `idpesan` int(11) NOT NULL,
  `idkursus` int(10) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `bidang` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `idtamu` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`idpesan`, `idkursus`, `tipe`, `bidang`, `harga`, `idtamu`, `nama`, `alamat`, `telepon`, `status`, `created_at`) VALUES
(5, 2, 'Seni Musik', 'Drum', 525000, 1, 'Rissa Gunawan', 'Jl. Budi Mulia 06/06 No.6A', '081298860743', 'Berhasil', '2021-07-06 09:08:08'),
(6, 1, 'Seni Musik', 'Vokal', 525000, 1, 'Rissa Gunawan', 'Jl. Budi Mulia 06/06 No.6A', '081298860743', 'Berhasil', '2021-07-06 09:08:08'),
(7, 1, 'Seni Musik', 'Vokal', 525000, 1, 'Rissa Gunawan', 'Jl. Budi Mulia 06/06 No.6A', '081298860743', 'Pending...', '2021-07-06 02:49:25');

-- --------------------------------------------------------

--
-- Table structure for table `stokkursus`
--

CREATE TABLE `stokkursus` (
  `idkursus` int(10) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `bidang` text NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stokkursus`
--

INSERT INTO `stokkursus` (`idkursus`, `tipe`, `bidang`, `stok`) VALUES
(1, 'Seni Musik', 'Gitar', 20),
(2, 'Seni Musik', 'Drum', 20),
(3, 'Seni Musik', 'Gitar', 20),
(4, 'Seni Musik', 'Piano', 20),
(5, 'Seni Musik', 'Bass', 20),
(6, 'Seni Musik', 'Biola', 20),
(7, 'Seni Tari', 'Line Dance', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `idtamu` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`idtamu`, `username`, `email`, `nama`, `alamat`, `telepon`, `password`, `foto`) VALUES
(1, 'Rissa ', 'Rissagunawan01@gmail.com', 'Rissa Gunawan', 'Jl. Budi Mulia 06/06 No.6A', '081298860743', '82a72d7fd5960f166ae12e80c01a097a', 'WhatsApp Image 2021-07-02 at 17.11.30.jpeg'),
(2, 'Rio', 'rio@gmail.com', 'Rio Aldi', 'Jl. Witana Raya No.57', '081298376472', 'f237aef579ff90dcd9b528115cb25c32', '97e42a82fc7911961d3ca55f54d1372c.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`idkontak`),
  ADD KEY `fk_admin` (`username`);

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`idkursus`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`idpesan`),
  ADD KEY `fk_kursus` (`idkursus`),
  ADD KEY `fk_tamu` (`idtamu`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`idtamu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `idkontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `idpesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `idtamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `fk_kursus` FOREIGN KEY (`idkursus`) REFERENCES `kursus` (`idkursus`),
  ADD CONSTRAINT `fk_tamu` FOREIGN KEY (`idtamu`) REFERENCES `tamu` (`idtamu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
