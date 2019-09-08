-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2019 at 12:32 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimol_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bimbingan`
--

CREATE TABLE `tb_bimbingan` (
  `Id` int(11) NOT NULL,
  `nim_id` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jenis_bimbingan` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `dokumen` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `nidn_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bimbingan`
--

INSERT INTO `tb_bimbingan` (`Id`, `nim_id`, `tanggal`, `jenis_bimbingan`, `judul`, `keterangan`, `dokumen`, `status`, `nidn_id`) VALUES
(4, '1415444', '2018-12-13', 'Kuliah Praktek', 'BIMOL', 'proses', NULL, '0', '123345');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `Id` int(11) NOT NULL,
  `nidn` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `program_studi` varchar(255) DEFAULT NULL,
  `nomor_hp` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`Id`, `nidn`, `nama`, `program_studi`, `nomor_hp`, `pic`) VALUES
(1, '123345', 'Bobby', 'Komputer Akuntansi', '2837487', NULL),
(2, '1234', 'Jajang', 'Teknik Informatika', '87896796', NULL),
(4, '123124', 'Dwi Nurul Huda', 'Sistem Informasi', '0998675', NULL),
(5, '9864', 'M Rizky Romdhoni', 'Komputer Akuntansi', '998097', NULL),
(6, '13579', 'Fajar', 'Teknik Informatika', '081384898', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenisbimbingan`
--

CREATE TABLE `tb_jenisbimbingan` (
  `Id` int(11) NOT NULL,
  `jenis_bimbingan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenisbimbingan`
--

INSERT INTO `tb_jenisbimbingan` (`Id`, `jenis_bimbingan`) VALUES
(1, 'KP'),
(2, 'skripsi'),
(3, 'skripsi'),
(4, 'skripsi'),
(5, 'skripsi'),
(6, 'skripsi'),
(7, 'skripsi'),
(8, 'skripsi'),
(9, 'skripsi'),
(10, 'skripsi'),
(11, 'skripsi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `Id` int(11) NOT NULL,
  `nim_id` varchar(255) DEFAULT NULL,
  `nama_mahasiswa` varchar(255) DEFAULT NULL,
  `program_studi` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nomor_hp` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`Id`, `nim_id`, `nama_mahasiswa`, `program_studi`, `alamat`, `nomor_hp`, `pic`) VALUES
(1, '1415444', 'Yusuf', 'Sistem Informasi', 'ABCDE', '0823778', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `reg_id` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `auth` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `reg_id`, `username`, `password`, `jabatan`, `role`, `auth`) VALUES
(1, '1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'dosen', 'admin', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bimbingan`
--
ALTER TABLE `tb_bimbingan`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `nim_id` (`nim_id`),
  ADD KEY `nidn_id` (`nidn_id`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `nidn` (`nidn`);

--
-- Indexes for table `tb_jenisbimbingan`
--
ALTER TABLE `tb_jenisbimbingan`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `nim_id` (`nim_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bimbingan`
--
ALTER TABLE `tb_bimbingan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_jenisbimbingan`
--
ALTER TABLE `tb_jenisbimbingan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_bimbingan`
--
ALTER TABLE `tb_bimbingan`
  ADD CONSTRAINT `tb_bimbingan_ibfk_1` FOREIGN KEY (`nim_id`) REFERENCES `tb_mahasiswa` (`nim_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_bimbingan_ibfk_2` FOREIGN KEY (`nidn_id`) REFERENCES `tb_dosen` (`nidn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
