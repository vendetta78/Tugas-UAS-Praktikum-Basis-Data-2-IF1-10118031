-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 01:23 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `10118031_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `NIP` varchar(18) NOT NULL,
  `Nama_Dosen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`NIP`, `Nama_Dosen`) VALUES
('196284291986011001', 'Darma Purwata'),
('196284291986011002', 'Asep Supardi'),
('196284291986011003', 'Kakang Subagja'),
('196284291986011004', 'Siti Mulyani');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(12) DEFAULT NULL,
  `Password` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` int(8) NOT NULL,
  `Nama_Mhs` varchar(25) NOT NULL,
  `Tgl_lahir` date NOT NULL,
  `Jenis_Klmn` enum('L','P') DEFAULT NULL,
  `Alamat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `Nama_Mhs`, `Tgl_lahir`, `Jenis_Klmn`, `Alamat`) VALUES
(10118017, 'Putri', '1999-10-19', 'P', 'Gegerkalong'),
(10118019, 'Satria', '2000-09-17', 'L', 'Dago'),
(10118031, 'Rizki', '2000-11-13', 'L', 'Sukgalih'),
(10118045, 'Lala Syalala', '2000-02-27', 'P', 'Dipatiukur');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `Kode_MK` int(6) NOT NULL,
  `Nama_MK` varchar(20) NOT NULL,
  `SKS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`Kode_MK`, `Nama_MK`, `SKS`) VALUES
(1040, 'Sistem', 6),
(1047, 'Sistem Operasi', 3),
(1125, 'Basis Data 2', 4),
(1126, 'Pemerograman', 8);

-- --------------------------------------------------------

--
-- Table structure for table `perkuliahan`
--

CREATE TABLE `perkuliahan` (
  `NIM` varchar(8) DEFAULT NULL,
  `Kode_MK` varchar(5) DEFAULT NULL,
  `NIP` varchar(18) DEFAULT NULL,
  `Nilai` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perkuliahan`
--

INSERT INTO `perkuliahan` (`NIM`, `Kode_MK`, `NIP`, `Nilai`) VALUES
('10118017', '01040', '196284291986011001', 'A'),
('10118031', '01047', '196284291986011002', 'B'),
('10118045', '01047', '196284291986011002', 'C'),
('10118045', '01026', '196284291986011003', 'D');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`Kode_MK`);

--
-- Indexes for table `perkuliahan`
--
ALTER TABLE `perkuliahan`
  ADD KEY `NIM` (`NIM`),
  ADD KEY `NIP` (`NIP`),
  ADD KEY `Kode_MK` (`Kode_MK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `NIM` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10118057;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `Kode_MK` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1231232;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
