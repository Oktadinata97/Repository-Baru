-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2020 at 02:50 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sd`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE IF NOT EXISTS `alternatif` (
  `id_alternatif` int(11) NOT NULL AUTO_INCREMENT,
  `nama_alternatif` varchar(200) DEFAULT NULL,
  `deskripsi` text,
  `lokasi` varchar(290) DEFAULT NULL,
  `long` varchar(200) NOT NULL,
  `telp` varchar(200) DEFAULT NULL,
  `lat` varchar(200) NOT NULL,
  PRIMARY KEY (`id_alternatif`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`, `deskripsi`, `lokasi`, `long`, `telp`, `lat`) VALUES
(1, 'SD Negeri Demakan 1', 'Desa Demakan', '-75119940', 'aa', '1.108.008.659', 'aa'),
(2, 'SD Negeri Palur 1', 'Desa Palur', '', '', '', ''),
(3, 'SD Negeri Palur 5', 'Desa Palur', '-75132139', '', '1.107.999.904', ''),
(4, 'SD Negeri Palur 2', 'Desa Palur', '-75122177', '', '1.108.011.676', ''),
(5, 'SD Negeri Palur 3', 'Desa Palur', '-75132492', '', '1.108.023.706', ''),
(6, 'SD Negeri Cangkol 3', 'Desa Cangkol', '-75129819', '', '1.108.026.043', ''),
(7, 'SD Negeri Laban 2', 'Desa Laban', '-75131215', '', '1.107.994.567', ''),
(8, 'SD Negeri Plumbon 1', 'Desa Plumbon', '-75128207', '', '1.108.010.523', ''),
(9, 'SD Negeri Demakan 2', 'Desa Demakan', '-75128420', '', '1.108.010.238', ''),
(10, 'SD Negeri Cangkol 2', 'Desa Cangkol', '-75123131', '', '1.108.006.231', ''),
(11, 'SD Negeri Gadingan 3', 'Desa Gadingan', '-75120665', '', '1.108.003.653', ''),
(12, 'SD Negeri Laban 1', 'Desa Laban', '-75114911', '', '1.107.993.471', ''),
(13, 'SD Negeri Bekonang 3', 'Desa Bekonang', '-75115569', '', '1.107.997.041', ''),
(14, 'SD Negeri Dukuh 2', 'Desa Dukuh', '-75117537', '', '1.107.996.679', ''),
(15, 'SD Negeri Kragilan 2', 'Desa Kragilan', '-75121702', '', '1.107.996.072', ''),
(16, 'SD Negeri Plumbon 2', 'Desa Plumbon', '-75107545', '', '1.107.994.393', ''),
(17, 'SD Negeri Gadingan 1', 'Desa Gadingan', '-75107359', '', '1.107.989.025', ''),
(18, 'SD Negeri Klumprit 1', 'Desa Klumprit', '-75107422', '', '1.107.989.756', ''),
(19, 'SD Negeri Klumprit 3', 'Desa Klumprit', '-75116673', '', '1.107.984.247', ''),
(20, 'SD Negeri Kragilan 1', 'Desa Kragilan', '-75115400', '', '1.107.991.600', ''),
(21, 'SD Negeri Sapen 3', 'Desa Sapen', '-75116064', '', '1.107.993.313', ''),
(22, 'SD Negeri Joho 2', 'Desa Joho', '-75118009', '', '1.108.010.382', ''),
(23, 'SD Negeri Joho 1', 'Desa Joho', '-75110822', '', '1.108.014.439', ''),
(24, 'SD Negeri Kragilan 3', 'Desa Kragilan', '-75114409', '', '1.108.006.845', ''),
(25, 'SD Negeri Wirun 5', 'Desa Wirun', '-75107336', '', '1.108.006.426', '');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif_kriteria`
--

CREATE TABLE IF NOT EXISTS `alternatif_kriteria` (
  `id_alternatif_kriteria` int(11) NOT NULL AUTO_INCREMENT,
  `id_alternatif` int(11) DEFAULT NULL,
  `id_kriteria` int(11) DEFAULT NULL,
  `nilai_guru` double DEFAULT NULL,
  PRIMARY KEY (`id_alternatif_kriteria`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=213 ;

--
-- Dumping data for table `alternatif_kriteria`
--

INSERT INTO `alternatif_kriteria` (`id_alternatif_kriteria`, `id_alternatif`, `id_kriteria`, `nilai_guru`) VALUES
(1, 1, 1, 3),
(2, 2, 1, 3),
(3, 3, 1, 3),
(4, 4, 1, 4),
(5, 5, 1, 3),
(6, 6, 1, 3),
(7, 7, 1, 1),
(8, 8, 1, 3),
(9, 9, 1, 4),
(10, 10, 1, 3),
(11, 11, 1, 3),
(12, 12, 1, 3),
(13, 13, 1, 3),
(14, 14, 1, 3),
(15, 15, 1, 1),
(16, 16, 1, 3),
(17, 17, 1, 3),
(18, 18, 1, 3),
(19, 19, 1, 3),
(20, 20, 1, 1),
(21, 21, 1, 3),
(22, 22, 1, 1),
(23, 23, 1, 3),
(24, 24, 1, 2),
(25, 25, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kriteria` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`) VALUES
(1, 'guru'),
(2, 'fasilitas'),
(3, 'lahan');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `no` int(10) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `lat` varchar(30) NOT NULL,
  `lng` varchar(30) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`no`, `id`, `nama`, `alamat`, `lat`, `lng`) VALUES
(1, 2, 'SD Negeri Klumprit 1', 'Premban, Klumprit, Mojolaban', '-7.5119940', '110.8008659'),
(3, 3, 'SD Negeri Palur 5', 'Gerdu RT 02 RW 07, Palur, Mojolaban', '-7.5132139', '110.7999904'),
(4, 5, 'SD Negeri Kragilan 1', 'Kragilan, Kragilan, Mojolaban', '-7.5122177', '110.8011676');

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE IF NOT EXISTS `tbadmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `pswd` varchar(70) NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`id`, `username`, `pswd`, `foto`) VALUES
(1, 'okta', '16500011', 'okta.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbdata_sd`
--

CREATE TABLE IF NOT EXISTS `tbdata_sd` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_sd` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `guru` varchar(30) NOT NULL,
  `fasilitas` varchar(30) NOT NULL,
  `lahan` varchar(30) NOT NULL,
  `tahun` varchar(30) NOT NULL,
  `lat` varchar(30) NOT NULL,
  `long` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `tbdata_sd`
--

INSERT INTO `tbdata_sd` (`id`, `nama_sd`, `alamat`, `guru`, `fasilitas`, `lahan`, `tahun`, `lat`, `long`) VALUES
(1, 'SD Negeri Demakan 1', 'Jalan Veteran, Demakan, Mojolaban', '3', '2', '3', '2020', '-7.5119940', '110.8008659'),
(2, 'SD Negeri Palur 1', 'Klaruan RT 01 RW 14, Palur, Mojolaban', '3', '3', '3', '2020', '', ''),
(3, 'SD Negeri Palur 5', 'Gerdu RT 02 RW 07, Palur, Mojolaban', '3', '4', '3', '2020', '-7.5132139', '110.7999904'),
(4, 'SD Negeri Palur 2', 'Turisari RT 03 RW 19, Palur, Mojolaban', '4', '3', '2', '2020', '-7.5122177', '110.8011676'),
(5, 'SD Negeri Palur 3', 'Gerdu RT 02 RW 07, Palur, Mojolaban', '3', '3', '3', '2020', '-7.5132492', '110.8023706'),
(6, 'SD Negeri Cangkol 3', 'Jalan Mayor Achmadi No.105', '3', '2', '3', '2020', '-7.5129819', '110.8026043'),
(7, 'SD Negeri Laban 2', 'Jalan Sawokecik, Badran, Mojolaban', '1', '2', '3', '2020', '-7.5131215', '110.7994567'),
(8, 'SD Negeri Plumbon 1', 'Karang RT 03 RW 07, Plumbon, Mojolaban', '3', '3', '3', '2020', '-7.5128207', '110.8010523'),
(9, 'SD Negeri Demakan 2', 'Kalipelang RT 01 RW 07, Demakan, Mojolaban', '4', '1', '2', '2020', '-7.5128420', '110.8010238'),
(10, 'SD Negeri Cangkol 2', 'Cangkol RT 01 RW 08, Cangkol, Mojolaban', '3', '2', '3', '2020', '-7.5123131', '110.8006231'),
(11, 'SD Negeri Gadingan 3', 'Jetis RT 03 RW 03, Gadingan, Mojolaban', '3', '3', '2', '2020', '-7.5120665', '110.8003653'),
(12, 'SD Negeri Laban 1', 'Jalan Sawokecik No.1, Laban, Mojolaban', '3', '3', '2', '2020', '-7.5114911', '110.7993471'),
(13, 'SD Negeri Bekonang 3', 'Sentul RT 02 RW 10, Bekonang, Mojolaban', '3', '1', '2', '2020', '-7.5115569', '110.7997041'),
(14, 'SD Negeri Dukuh 2', 'Dukuh, Mojolaban', '3', '4', '1', '2020', '-7.5117537', '110.7996679'),
(15, 'SD Negeri Kragilan 2', 'Kuntungan, Kragilan, Mojolaban', '1', '3', '1', '2020', '-7.5121702', '110.7996072'),
(16, 'SD Negeri Plumbon 2', 'Plumbon, Mojolaban', '3', '3', '2', '2020', '-7.5107545', '110.7994393'),
(17, 'SD Negeri Gadingan 1', 'Badran RT 03 RW 04, Gadingan, Mojolaban', '3', '2', '3', '2020', '-7.5107359', '110.7989025'),
(18, 'SD Negeri Klumprit 1', 'Premban, Klumprit, Mojolaban', '3', '2', '3', '2020', '-7.5107422', '110.7989756'),
(19, 'SD Negeri Klumprit 3', 'Klumprit, Klumprit, Mojolaban', '3', '2', '3', '2020', '-7.5116673', '110.7984247'),
(20, 'SD Negeri Kragilan 1', 'Kragilan, Kragilan, Mojolaban', '1', '1', '1', '2020', '-7.5115400', '110.7991600'),
(21, 'SD Negeri Sapen 3', 'Sapen, Sapen, Mojolaban', '3', '4', '3', '2020', '-7.5116064', '110.7993313'),
(22, 'SD Negeri Joho 2', 'Joho RT 02 RW 04, Joho, Mojolaban', '1', '4', '3', '2020', '-7.5118009', '110.8010382'),
(23, 'SD Negeri Joho 1', 'Gondang RT 04 RW 08, Joho, Mojolaban', '3', '3', '2', '2020', '-7.5110822', '110.8014439'),
(24, 'SD Negeri Kragilan 3', 'Sumuran Wetan RT 02 RW 05, Kragilan, Mojolaban', '2', '2', '1', '2020', '-7.5114409', '110.8006845'),
(25, 'SD Negeri Wirun 5', 'Jalan Durno No.22, Pabrik, Wirun, Mojolaban', '3', '1', '3', '2020', '-7.5107336', '110.8006426');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD CONSTRAINT `lokasi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tbdata_sd` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
