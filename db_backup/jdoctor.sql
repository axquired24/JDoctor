-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2016 at 04:41 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jdoctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(5) NOT NULL,
  `user` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=312 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `user`, `password`, `nama`, `tipe`) VALUES
(305, 'admin', 'admin', 'Admin Albert', 'super'),
(307, 'dokter', 'dokter', 'Dr. Syahrul', 'dokter'),
(310, 'apoteker', 'apoteker', 'Apoteker Nurul In', 'apoteker'),
(311, 'resepsionis', 'resepsionis', 'Rsp. Arin S', 'resepsionis');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `id_dokter` int(5) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `jadwal_praktek` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `tanggal_masuk`, `alamat`, `telepon`, `jadwal_praktek`) VALUES
(101, 'Dr. Nur Intan Permata Hati, Sp. A', '2015-10-01', 'Pabelan', '081234567890', 'Senin-Kamis Pkl 09.00-12.00 dan 13.00-15.00\nJumat Pkl 13.00-15.00 dan 19.00-21.00'),
(102, 'Dr. Pungki Windiasani, Sp. A', '2015-10-04', 'Sukoharjo', '081345678902', 'Senin-Rabu Pkl 15.00-18.00 dan 19.00-21.00Sabtu Pkl 09.00-12.00'),
(103, 'Dr. Albert S, Sp. A', '2015-10-15', 'Kartasura', '081456789025', 'Senin-Sabtu Pkl 09.00-12.00 dan 19.30-21.00');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `id_obat` int(5) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `golongan_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `tanggal_datang` date NOT NULL,
  `stok_datang` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=403 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `golongan_obat`, `jenis_obat`, `tanggal_datang`, `stok_datang`) VALUES
(401, 'Sanmol Paracetamol', 'Generik', 'Tablet', '2015-10-20', 90),
(402, 'Anacof', 'Generik', 'Tablet', '2015-10-02', 98);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id_pasien` int(5) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `nama_kk` varchar(50) NOT NULL,
  `tanggal_daftar` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=512 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `telepon`, `pekerjaan`, `nama_kk`, `tanggal_daftar`) VALUES
(501, 'Yasmin Andriana S', 'Surakarta', '2001-10-14', 'Perempuan', 'Jl. Yos Sudarso II no: 12 Blok A3 Surakasrta', '08122909977', 'Pelajar', 'Agus Sudibyo', '2015-10-04'),
(503, 'AxQuired Nodenomoe', 'Purwodadi Xjs', '1995-12-11', 'Cewek', 'Purwodadi Alamat', '982392382', 'Sponsorship PARTI', 'Om sini situ', '2015-10-15'),
(509, 'Sinta Putri', 'Semarang', '1994-07-12', 'perempuan', 'Jl. Sinar Mas 2 Semarang', '085742789009', 'Pelajar', 'Andra', '2015-12-13'),
(511, 'Bangkit Sanyoto', 'Purwodadi', '1995-12-03', 'perempuan', 'Solo', '08923912911', 'Wiraswasta', 'Bapak bangkit', '2015-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE IF NOT EXISTS `riwayat` (
  `id_riwayat` int(5) NOT NULL,
  `id_dokter` int(5) NOT NULL,
  `id_pasien` int(5) NOT NULL,
  `tanggal_berobat` date NOT NULL,
  `keluhan` text NOT NULL,
  `penyakit` text NOT NULL,
  `id_obat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=608 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `id_dokter`, `id_pasien`, `tanggal_berobat`, `keluhan`, `penyakit`, `id_obat`) VALUES
(601, 101, 503, '2015-10-04', 'Batuk, PIlek, Panas, Pusing', 'Radang tenggrokkan', '401'),
(604, 101, 503, '2015-12-09', 'Flu, Batuk, Pilek', 'Radang', '401,402,'),
(605, 101, 503, '2015-12-09', 'Bengek', 'Tipes', '402,403,'),
(606, 101, 501, '2015-12-13', 'Pusing', 'Batuk Pilek', '402,'),
(607, 103, 511, '2015-12-14', 'Panas, Dingin, Susah makan, Kantong kering', 'Tipes', '401,402,405,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=312;
--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=403;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=512;
--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=608;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
