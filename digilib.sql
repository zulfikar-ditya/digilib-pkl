-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 01:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digilib`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `kodeBuku` int(20) NOT NULL,
  `judul` text NOT NULL,
  `kodePenerbit` int(20) NOT NULL,
  `kodePengarang` int(20) NOT NULL,
  `tahun` int(4) NOT NULL,
  `edisi` varchar(20) NOT NULL,
  `issn_isbn` varchar(30) NOT NULL,
  `seri` varchar(10) NOT NULL,
  `abstraksi` text NOT NULL,
  `kodeKategori` int(4) NOT NULL,
  `tglInput` datetime NOT NULL,
  `tglUpdate` datetime NOT NULL,
  `image` text NOT NULL,
  `lastUpdateBy` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`kodeBuku`, `judul`, `kodePenerbit`, `kodePengarang`, `tahun`, `edisi`, `issn_isbn`, `seri`, `abstraksi`, `kodeKategori`, `tglInput`, `tglUpdate`, `image`, `lastUpdateBy`) VALUES
(1, 'Lord of The Rings', 1, 1, 2006, '2010', '123', '17', 'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.\r\nDonec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.\r\nDonec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.\r\nDonec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.\r\nDonec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.', 1, '2013-03-22 00:00:00', '2021-01-19 09:21:45', 'img/The_Lord_of_the_Rings_-_The_Return_of_the_King_(2003).jpg', 1),
(2, 'Angels and Demons', 1, 1, 2006, '5', '123', '1', 'qwde``', 1, '2013-03-22 00:00:00', '2021-01-19 09:20:46', 'img/81S+VsvKTlL.jpg', 1),
(6, 'The Hobbit', 1, 1, 2000, '1', '1', '1', 'adadasd', 1, '2013-03-30 00:46:46', '2021-01-19 09:23:08', 'img/p9458059_p_v10_ac.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `kodeDosen` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dateInput` datetime NOT NULL,
  `dateUpdate` datetime NOT NULL,
  `tempatLahir` varchar(40) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `alamat` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`kodeDosen`, `username`, `password`, `nama`, `email`, `dateInput`, `dateUpdate`, `tempatLahir`, `tanggalLahir`, `alamat`, `image`) VALUES
(1, 'dosen', 'ce28eed1511f631af6b2a7bb0a85d636', 'Pak Dosen', 'dosen@eepis-its.edu', '2013-03-22 00:00:00', '2013-03-22 00:00:00', 'Surabaya', '1980-10-08', 'Surabaya', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kodeKategori` int(4) NOT NULL,
  `namaKategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`kodeKategori`, `namaKategori`) VALUES
(1, 'Novel');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `kodeMhs` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dateInput` datetime NOT NULL,
  `dateUpdate` datetime NOT NULL,
  `tempatLahir` varchar(40) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `alamat` text NOT NULL,
  `image` text NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`kodeMhs`, `username`, `password`, `nama`, `email`, `dateInput`, `dateUpdate`, `tempatLahir`, `tanggalLahir`, `alamat`, `image`, `jurusan`) VALUES
(1, 'deny', '05afb6ce69b9cef1bd6ece7e4745f96c', 'Deny Herianto', 'deny.hrnt@gmail.com', '2013-03-22 00:00:00', '2013-03-22 00:00:00', 'Surabaya', '1993-10-06', 'Surabaya', '', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penerbit`
--

CREATE TABLE `tb_penerbit` (
  `kodePenerbit` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(18) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penerbit`
--

INSERT INTO `tb_penerbit` (`kodePenerbit`, `nama`, `alamat`, `telp`, `email`) VALUES
(1, 'Gramedia', 'Jl. Jakarta', '0899', 'office@gramedia.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengarang`
--

CREATE TABLE `tb_pengarang` (
  `kodePengarang` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengarang`
--

INSERT INTO `tb_pengarang` (`kodePengarang`, `nama`) VALUES
(1, 'Dan Brown'),
(2, 'J.R.R. Tolkien'),
(4, 'Deny Herianto');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `kodePetugas` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` text NOT NULL,
  `dateInput` datetime NOT NULL,
  `dateUpdate` datetime NOT NULL,
  `tempatLahir` varchar(40) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `alamat` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`kodePetugas`, `username`, `password`, `nama`, `email`, `dateInput`, `dateUpdate`, `tempatLahir`, `tanggalLahir`, `alamat`, `image`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'admin@eepis-its.edu', '2013-03-22 00:00:00', '2013-03-22 00:00:00', 'Surabaya', '1990-10-06', 'Surabaya', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `kodePinjam` int(20) NOT NULL,
  `kodePetugas` int(10) NOT NULL,
  `kodePeminjam` int(10) NOT NULL,
  `tipePeminjam` int(1) NOT NULL,
  `tglPinjam` datetime NOT NULL,
  `tglKembali` datetime NOT NULL,
  `keterangan` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pinjam`
--

INSERT INTO `tb_pinjam` (`kodePinjam`, `kodePetugas`, `kodePeminjam`, `tipePeminjam`, `tglPinjam`, `tglKembali`, `keterangan`, `status`) VALUES
(2013033021, 0, 1, 2, '2013-03-30 10:16:36', '0000-00-00 00:00:00', '', 1),
(2013033031, 1, 1, 3, '2013-03-30 10:17:47', '2021-01-19 11:12:12', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjamdetail`
--

CREATE TABLE `tb_pinjamdetail` (
  `kodePinjamDetail` int(11) NOT NULL,
  `kodePinjam` int(20) NOT NULL,
  `kodeBuku` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pinjamdetail`
--

INSERT INTO `tb_pinjamdetail` (`kodePinjamDetail`, `kodePinjam`, `kodeBuku`) VALUES
(17, 2013033021, 2),
(18, 2013033021, 1),
(19, 2013033031, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`kodeBuku`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`kodeDosen`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kodeKategori`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`kodeMhs`);

--
-- Indexes for table `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  ADD PRIMARY KEY (`kodePenerbit`);

--
-- Indexes for table `tb_pengarang`
--
ALTER TABLE `tb_pengarang`
  ADD PRIMARY KEY (`kodePengarang`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`kodePetugas`);

--
-- Indexes for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`kodePinjam`);

--
-- Indexes for table `tb_pinjamdetail`
--
ALTER TABLE `tb_pinjamdetail`
  ADD PRIMARY KEY (`kodePinjamDetail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `kodeBuku` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `kodeDosen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kodeKategori` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `kodeMhs` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  MODIFY `kodePenerbit` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pengarang`
--
ALTER TABLE `tb_pengarang`
  MODIFY `kodePengarang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `kodePetugas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pinjamdetail`
--
ALTER TABLE `tb_pinjamdetail`
  MODIFY `kodePinjamDetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
