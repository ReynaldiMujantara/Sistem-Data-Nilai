-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2018 at 11:38 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `data_nilai`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_nilai`
--

CREATE TABLE IF NOT EXISTS `table_nilai` (
  `nis` int(12) NOT NULL,
  `mapel` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai_p` int(3) NOT NULL,
  `predikat_p` char(1) NOT NULL,
  `nilai_k` int(3) NOT NULL,
  `predikat_k` char(1) NOT NULL,
  `nilai_uts` int(3) NOT NULL,
  `nilai_uas` int(3) NOT NULL,
  `rata_rata` double NOT NULL,
  `keterangan` varchar(10) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_nilai`
--

INSERT INTO `table_nilai` (`nis`, `mapel`, `nama`, `nilai_p`, `predikat_p`, `nilai_k`, `predikat_k`, `nilai_uts`, `nilai_uas`, `rata_rata`, `keterangan`, `kelas`) VALUES
(123, 'PHP', 'reynaldi ', 98, 'A', 89, 'B', 90, 70, 86.75, 'Lulus', 'RPL XI-C'),
(8765, 'PHP', 'Rey reynaldi', 98, 'A', 99, 'A', 97, 99, 98.25, 'Lulus', 'RPL X-A'),
(6766687, 'Graphic', 'reynaldi', 98, 'A', 99, 'A', 90, 99, 96.5, 'Lulus', 'RPL XII-C'),
(12456787, 'DB', 'sadfgh', 97, 'A', 87, 'B', 76, 86, 86.5, 'Lulus', 'RPL X-A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_nilai`
--
ALTER TABLE `table_nilai`
 ADD PRIMARY KEY (`nis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
