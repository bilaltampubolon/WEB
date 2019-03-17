-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2017 at 11:03 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik3`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_mahasiswa`
--

CREATE TABLE `db_mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(36) NOT NULL,
  `kom` enum('A','B','C','') NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_mahasiswa`
--

INSERT INTO `db_mahasiswa` (`id_mhs`, `nim`, `nama`, `kom`, `jurusan`) VALUES
(1, 161401058, 'Nazli Alvira Siregar', 'A', 'Teknologi Informasi'),
(2, 2, 'aaa', 'A', 'Teknologi Informasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_mahasiswa`
--
ALTER TABLE `db_mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_mahasiswa`
--
ALTER TABLE `db_mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
