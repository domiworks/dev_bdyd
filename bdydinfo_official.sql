-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2015 at 09:05 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bdydinfo_official`
--
CREATE DATABASE IF NOT EXISTS `bdydinfo_official` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdydinfo_official`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_04_23_131123_createQuotaTable', 1),
('2015_04_23_131141_createParokiTable', 1),
('2015_04_23_131155_createAdminTable', 1),
('2015_04_23_131210_createPesertaTable', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paroki`
--

CREATE TABLE IF NOT EXISTS `paroki` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_paroki` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_dekanat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quota` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `paroki`
--

INSERT INTO `paroki` (`id`, `nama_paroki`, `nama_dekanat`, `quota`, `created_at`, `updated_at`) VALUES
(1, 'Katedral St. Petrus											', 'Kacikamegar	', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Odilia Cicadas												', 'Kacikamegar	', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'St. Melania													', 'Kacikamegar	', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Kamuning / Salib Suci											', 'Kacikamegar	', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Pandu / St. Perawan Maria Sapta Kedukaan						', 'Palemsuci	', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Lembang / St. Maria Fatima									', 'Palemsuci	', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Sukajadi / Laurentius 										', 'Palemsuci	', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Cimahi / St. Ignatius											', 'Palemsuci	', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Sumber Sari/ St. Gabriel										', 'Dasamawartoba', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Margahayu / St. Martinus										', 'Dasamawartoba', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Waringin / St. Mikael										', 'Dasamawartoba', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Moh. Toha / St. Paulus										', 'Dasamawartoba', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Buah Batu / Hati Tak Bernoda Santa Perawan Maria				', 'Dasamawartoba', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Paroki Dayeuh Kolot											', 'Dasamawartoba', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Karawang / Kristus Raja										', 'Katabapa		', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Purwakarta / Salib Suci										', 'Katabapa		', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Subang / Kristus Sang Penabur								', 'Katabapa		', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Pamanukan / Maria Bunda Pembantu Abadi						', 'Katabapa		', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Cigugur / Kristus Raja										', 'Tasciciayu	', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Dukuh Semar - Cirebon / Bunda Maria							', 'Tasciciayu	', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Indramayu/St. Mikael											', 'Tasciciayu	', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Yos Sudarso-Cirebon / St. Yusuf								', 'Tasciciayu	', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Tasikmalaya / Hati Kudus Yesus								', 'Tasciciayu	', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Garut / Santa Perawan Maria Yang Terkandung Tak Bernoda		', 'Kacikamegar	', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_pendaftaran` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_panggilan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` tinyint(4) NOT NULL,
  `alamat_tinggal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kota_tinggal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_handphone` int(11) NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kegiatan_gereja` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hobi_bakat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dekanat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paroki` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birdtype` tinyint(4) NOT NULL,
  `status_aktivasi` tinyint(1) NOT NULL,
  `status_peserta` tinyint(1) NOT NULL,
  `status_bayar` tinyint(1) NOT NULL,
  `kesediaan_informasi` tinyint(1) NOT NULL,
  `days_count` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `id_pendaftaran`, `email`, `password`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `nama_panggilan`, `jenis_kelamin`, `alamat_tinggal`, `kota_tinggal`, `no_handphone`, `pekerjaan`, `kegiatan_gereja`, `hobi_bakat`, `dekanat`, `paroki`, `birdtype`, `status_aktivasi`, `status_peserta`, `status_bayar`, `kesediaan_informasi`, `days_count`, `created_at`, `updated_at`) VALUES
(1, '', '1', '1', '1', '1', '0000-00-00', '1', 1, '1', '1', 1, '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, '2015-05-11 10:23:00', '2015-05-11 10:23:00'),
(2, '', '1', '1', '1', '1', '0000-00-00', '1', 1, '1', '1', 1, '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, '2015-05-11 10:23:49', '2015-05-11 10:23:49'),
(3, '', '1', '1', '1', '1', '0000-00-00', '1', 1, '1', '1', 1, '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, '2015-05-11 10:24:18', '2015-05-11 10:24:18'),
(4, '', '1', '1', '1', '1', '0000-00-00', '1', 1, '1', '1', 1, '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, '2015-05-11 10:24:39', '2015-05-11 10:24:39'),
(5, '', '1', '1', '1', '1', '0000-00-00', '1', 1, '1', '1', 1, '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, '2015-05-11 17:38:06', '2015-05-11 17:38:06'),
(6, '', '1', '1', '1', '1', '0000-00-00', '1', 1, '1', '1', 1, '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, '2015-05-12 15:40:00', '2015-05-12 15:40:00'),
(7, '', '1', '1', '1', '1', '0000-00-00', '1', 1, '1', '1', 1, '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, '2015-05-12 17:43:03', '2015-05-12 17:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE IF NOT EXISTS `price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `earlybird` tinyint(4) NOT NULL,
  `daytype` tinyint(4) NOT NULL,
  `dalam_kota` int(11) NOT NULL,
  `luar_kota` int(11) NOT NULL,
  `periode_start` datetime NOT NULL,
  `periode_end` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `earlybird`, `daytype`, `dalam_kota`, `luar_kota`, `periode_start`, `periode_end`) VALUES
(1, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `quota`
--

CREATE TABLE IF NOT EXISTS `quota` (
  `jumlah` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
