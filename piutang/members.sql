-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2017 at 04:30 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `members`
--

-- --------------------------------------------------------

--
-- Table structure for table `ar`
--

CREATE TABLE `ar` (
  `de` int(25) NOT NULL,
  `ed` int(23) NOT NULL,
  `eee` int(23) NOT NULL,
  `dede` int(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_piutang`
--

CREATE TABLE `tbl_piutang` (
  `id` int(25) NOT NULL,
  `npwpd` varchar(25) NOT NULL,
  `jns_pajak` varchar(25) NOT NULL,
  `masa_pajak` varchar(25) NOT NULL,
  `thn_pajak` varchar(20) NOT NULL,
  `kode_pajak` varchar(20) NOT NULL,
  `nama_wp` text NOT NULL,
  `tgl_sspd` date NOT NULL,
  `no_sspd` varchar(25) NOT NULL,
  `pokok_bayar` decimal(25,0) NOT NULL,
  `denda` varchar(25) NOT NULL,
  `jml_byrdandenda` varchar(25) NOT NULL,
  `status_wp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_piutang`
--

INSERT INTO `tbl_piutang` (`id`, `npwpd`, `jns_pajak`, `masa_pajak`, `thn_pajak`, `kode_pajak`, `nama_wp`, `tgl_sspd`, `no_sspd`, `pokok_bayar`, `denda`, `jml_byrdandenda`, `status_wp`) VALUES
(1, '112234556536', 'HOTEL', '', '2016', '121212', 'GUSTI ASLIAN NOOR', '2017-05-17', '34343434', '10000000', '1000000', '11000000', 'Aktif'),
(2, '112234556536', 'HOTEL', '', '2016', '22222', 'LINTJE', '2017-05-17', '34343434', '200000', '50000', '250000', 'Pasif'),
(3, '4321234444', 'Hotel', 'Januari', '2017', '232323', 'AZZALEA', '2017-05-18', '200000', '100000', '300000', '400000', 'Aktif'),
(1, '112234556536', 'HOTEL', '', '2016', '121212', 'GUSTI ASLIAN NOOR', '2017-05-17', '34343434', '10000000', '1000000', '11000000', 'Aktif'),
(2, '112234556536', 'HOTEL', '', '2016', '22222', 'LINTJE', '2017-05-17', '34343434', '200000', '50000', '250000', 'Pasif'),
(3, '4321234444', 'Hotel', 'Januari', '2017', '232323', 'AZZALEA', '2017-05-18', '200000', '100000', '300000', '400000', 'Aktif');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
