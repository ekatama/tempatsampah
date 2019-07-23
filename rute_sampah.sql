-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 12:00 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rute_sampah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(10) NOT NULL,
  `hakakses` varchar(10) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tempatsampah`
--

CREATE TABLE IF NOT EXISTS `tempatsampah` (
  `id_tempatsampah` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `kapasitas` varchar(10) NOT NULL,
  `gambar` varchar(10) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_tempatsampah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tempatsampah`
--

INSERT INTO `tempatsampah` (`id_tempatsampah`, `nama`, `jenis`, `kapasitas`, `gambar`, `latitude`, `longitude`, `alamat`) VALUES
(4, 'Jurusan MIa', 'Organik', '-', '', '5.569400', '95.367949', 'Fakultas MIPA Jurusan Manajemen Informatika'),
(5, 'ICT', 'Organik', '-', '-', '5.571418', '95.367488', 'Darussalam'),
(6, 'Fakultas MIPA', '-', '-', '34-512.png', '5.5670668', '95.3703729', 'JL. Syech Abdurrauf No.3, Kopelma Darussalam, Syiah Kuala, Kota Banda Aceh, Aceh 23111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
