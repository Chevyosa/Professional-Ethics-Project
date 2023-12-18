-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 18, 2023 at 05:19 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccrp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_report`
--

DROP TABLE IF EXISTS `tb_report`;
CREATE TABLE IF NOT EXISTS `tb_report` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `buktidigital_ss` varchar(100) NOT NULL,
  `buktidigital_log` varchar(100) NOT NULL,
  `kartu_identitas` varchar(100) NOT NULL,
  `kartu_anggota` varchar(100) NOT NULL,
  `bukti_transaksi` varchar(100) NOT NULL,
  `laporan_polisi` varchar(100) NOT NULL,
  `bukti_tambahan` varchar(100) NOT NULL,
  `pernyataan_hukum` varchar(100) NOT NULL,
  `laporan_analisis` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `email`, `password`) VALUES
(1, 'user', 'user@gmail.com', 'user'),
(3, 'admin', 'admin@gmail.com', '$2y$10$eXSpjju4bUXxN9/XYJ3NJu2kiMD8iEKx.3QswJB0ObYg3c7eOzN1S');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
