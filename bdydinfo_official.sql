-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2015 at 11:11 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bdydinfo_official`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'domiworks@gmail.com', '$2y$10$0CGIjzPtPnju7dQJeBQPGe44PSHcRxQ88WZwIqy3BTuWyh0AKiBWy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'dikomunikasikan@gmail.com', '$2y$10$0CGIjzPtPnju7dQJeBQPGe44PSHcRxQ88WZwIqy3BTuWyh0AKiBWy', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
('2015_04_23_131210_createPesertaTable', 1),
('2015_04_23_131123_createQuotaTable', 1),
('2015_04_23_131141_createParokiTable', 1),
('2015_04_23_131155_createAdminTable', 1),
('2015_04_23_131210_createPesertaTable', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paroki`
--

CREATE TABLE IF NOT EXISTS `paroki` (
`id` int(10) unsigned NOT NULL,
  `nama_paroki` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_dekanat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quota` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `paroki`
--

INSERT INTO `paroki` (`id`, `nama_paroki`, `nama_dekanat`, `quota`, `created_at`, `updated_at`) VALUES
(1, 'Katedral St. Petrus                      ', 'Kacikamegar ', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Odilia Cicadas                       ', 'Kacikamegar ', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'St. Melania                          ', 'Kacikamegar ', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Kamuning/Salib Suci', 'Kacikamegar ', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Pandu / St. Perawan Maria Sapta Kedukaan           ', 'Palemsuci ', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Lembang / St. Maria Fatima                 ', 'Palemsuci ', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Sukajadi / Laurentius                    ', 'Palemsuci ', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Cimahi / St. Ignatius                      ', 'Palemsuci ', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Sumber Sari/ St. Gabriel                   ', 'Dasamawartoba', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Margahayu / St. Martinus                    ', 'Dasamawartoba', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Waringin / St. Mikael                   ', 'Dasamawartoba', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Moh. Toha / St. Paulus                    ', 'Dasamawartoba', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Buah Batu / Hati Tak Bernoda Santa Perawan Maria        ', 'Dasamawartoba', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Paroki Dayeuh Kolot                     ', 'Dasamawartoba', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Karawang / Kristus Raja                   ', 'Katabapa    ', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Purwakarta / Salib Suci                   ', 'Katabapa    ', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Subang / Kristus Sang Penabur               ', 'Katabapa    ', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Pamanukan / Maria Bunda Pembantu Abadi            ', 'Katabapa    ', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Cigugur / Kristus Raja                    ', 'Tasciciayu  ', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Dukuh Semar-Cirebon / Bunda Maria             ', 'Tasciciayu  ', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Indramayu / St. Mikael                      ', 'Tasciciayu  ', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Yos Sudarso-Cirebon / St. Yusuf               ', 'Tasciciayu  ', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Tasikmalaya / Hati Kudus Yesus                ', 'Tasciciayu  ', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Garut / Santa Perawan Maria Yang Terkandung Tak Bernoda   ', 'Kacikamegar ', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
`id` int(10) unsigned NOT NULL,
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
  `jumlah_hari` tinyint(1) NOT NULL,
  `birdtype` tinyint(4) NOT NULL,
  `status_aktivasi` tinyint(1) NOT NULL,
  `status_peserta` tinyint(1) NOT NULL,
  `status_bayar` tinyint(1) NOT NULL,
  `kesediaan_informasi` tinyint(1) NOT NULL,
  `days_count` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `id_pendaftaran`, `email`, `password`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `nama_panggilan`, `jenis_kelamin`, `alamat_tinggal`, `kota_tinggal`, `no_handphone`, `pekerjaan`, `kegiatan_gereja`, `hobi_bakat`, `dekanat`, `paroki`, `jumlah_hari`, `birdtype`, `status_aktivasi`, `status_peserta`, `status_bayar`, `kesediaan_informasi`, `days_count`, `price`, `created_at`, `updated_at`) VALUES
(1, '', '1', '1', '1', '1', '0000-00-00', '1', 1, '1', '1', 1, '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, 1, '20000', '2015-05-11 10:23:00', '2015-05-11 10:23:00'),
(2, '', '1', '1', '1', '1', '0000-00-00', '1', 1, '1', '1', 1, '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, 1, '20000', '2015-05-11 10:23:49', '2015-05-11 10:23:49'),
(3, '', '1', '1', '1', '1', '0000-00-00', '1', 1, '1', '1', 1, '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, 1, '20000', '2015-05-11 10:24:18', '2015-05-11 10:24:18'),
(4, '', '1', '1', '1', '1', '0000-00-00', '1', 1, '1', '1', 1, '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, 1, '20000', '2015-05-11 10:24:39', '2015-05-11 10:24:39'),
(5, '', '1', '1', '1', '1', '0000-00-00', '1', 1, '1', '1', 1, '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, 1, '20000', '2015-05-11 17:38:06', '2015-05-11 17:38:06'),
(6, '', '1', '1', '1', '1', '0000-00-00', '1', 1, '1', '1', 1, '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, 1, '20000', '2015-05-12 15:40:00', '2015-05-12 15:40:00'),
(7, '', '1', '1', '1', '1', '0000-00-00', '1', 1, '1', '1', 1, '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, 1, '20000', '2015-05-12 17:43:03', '2015-05-12 17:43:03'),
(13, '', '234234', '$2y$10$RQPzV5bEDncsmjdOd1WHE.7oLlOG3wNRdq.YDTXqqD9TaopwSjuvq', '4234234', '2342', '0000-00-00', '234234', 127, '4234234', 'ggdf', 12312, '313', '123123', '123', 'Katabapa    ', 'Karawang / Kristus Raja                   ', 3, 1, 0, 0, 0, 3, 0, '', '2015-05-13 18:41:37', '2015-05-13 18:41:37'),
(14, '', '232', '$2y$10$mcmLfMbjgYVwcpHkthqZx.Ji9QMwU3Vl3B2rfSzjp2e0dF0Qk8djO', '234', '4234', '0000-00-00', '2342', 127, '24234', '23423', 42342, '424', '2423', '24', 'Katabapa   ', 'Pamanukan / Maria Bunda Pembantu Abadi            ', 2, 1, 0, 0, 0, 1, 0, '', '2015-05-13 18:49:06', '2015-05-13 18:49:06'),
(15, '', '32423423', '$2y$10$bdhs.OBIRcu9DizfYct6Fuh1M5x59R0a0TToDajlAWqApSRUVZ/Zq', '234234', '23423', '0000-00-00', '234234', 127, '324234', '23423', 23423, '234234', '234', '234', 'Dasamawartoba', 'Paroki Dayeuh Kolot                      ', 2, 1, 0, 0, 0, 2, 0, '', '2015-05-13 18:51:10', '2015-05-13 18:51:10'),
(16, '', '8686778', '$2y$10$hgng9Ak4JLzvXZb5RyVLA.u0/eNm8YI3J1WxqHnUUpo5AtnKH4mQ6', '234', '87', '0000-00-00', '24', 6, '9876543', '9876543', 9876543, '9876543', '9876543', '9876543', 'Dasamawartoba', 'Buah Batu / Hati Tak Bernoda Santa Perawan Maria        ', 2, 1, 0, 0, 0, 2, 0, '50000', '2015-05-13 18:53:12', '2015-05-13 18:53:12'),
(17, '', '233434', '$2y$10$o4saUgJCzOU75630dqoWZuPtzeLFhQgxKWsXbbsHf840Paz/kmha.', '42', '233434', '0000-00-00', '233434', 127, '233434', '233434', 233434, '233434', '233434', '233434', 'Palemsuci  ', 'Lembang / St. Maria Fatima                  ', 2, 1, 0, 0, 0, 2, 0, '2015-05-13 18:54:46', '2015-05-13 18:54:46', '2015-05-13 18:54:46'),
(18, '', '77875657657', '$2y$10$yCuM10ZbhWR74nHbQhoSI.Y5xsuzwkJbAPS5toQKqV2tChSwZSgvW', '77875657657', '77875657657', '0000-00-00', '77875657657', 127, '77875657657', 'bandung', 2147483647, '77875657657', '77875657657', '77875657657', 'Katabapa    ', 'Karawang / Kristus Raja                   ', 1, 1, 0, 0, 0, 1, 0, 'bandung 1', '2015-05-13 18:57:21', '2015-05-13 18:57:21'),
(19, '', '77875657657', '$2y$10$aUawsip500dkr2QFRezUDuaUfQ0/KUnoChxF6Zwlg0FkwHwVTtf/a', '77875657657', '77875657657', '0000-00-00', '77875657657', 127, 'bandung', 'bandung', 2147483647, '77875657657', '77875657657', '77875657657', 'Katabapa    ', 'Pamanukan / Maria Bunda Pembantu Abadi            ', 2, 1, 0, 0, 0, 2, 0, 'bandung 2', '2015-05-13 18:58:48', '2015-05-13 18:58:48'),
(20, '', '77875657657', '$2y$10$CC9doQJjbKcu14JI4JX9hu85e0p/3Qx92MPAfEbjlOeFPyqJ40EFW', '77875657657', '77875657657', '0000-00-00', '77875657657', 127, 'bandung', 'dsa', 2147483647, '77875657657', '77875657657', '77875657657', 'Katabapa    ', 'Pamanukan / Maria Bunda Pembantu Abadi            ', 1, 1, 0, 0, 0, 2, 0, 'luar bandung 1', '2015-05-13 18:59:04', '2015-05-13 18:59:04'),
(21, '', '77875657657', '$2y$10$eh7tzxOakw2CVBtda.0BrubceEMWdf5vBE5Z1RCAcfnBMPwETsveu', '77875657657', '77875657657', '0000-00-00', '77875657657', 127, 'bandung', 'dsa', 2147483647, '77875657657', '77875657657', '77875657657', 'Katabapa    ', 'Pamanukan / Maria Bunda Pembantu Abadi            ', 2, 1, 0, 0, 0, 2, 0, 'luar bandung 2', '2015-05-13 18:59:16', '2015-05-13 18:59:16'),
(22, '', '77875657657', '$2y$10$Yfm3V0BSen09r3kw2trJkefz74IF5C9aIugewRfyB429D5W34gtHq', '77875657657', '77875657657', '0000-00-00', '77875657657', 127, 'BandunG', 'dsa', 2147483647, '77875657657', '77875657657', '77875657657', 'Katabapa    ', 'Pamanukan / Maria Bunda Pembantu Abadi            ', 2, 1, 0, 0, 0, 2, 0, 'luar bandung 2', '2015-05-13 19:01:37', '2015-05-13 19:01:37'),
(23, '', '77875657657', '$2y$10$5G4Pyi6YCtuyHgXef5NXfe4r9LbG3hzPZwdNs.wRPRqty/pZF3xWi', '77875657657', '77875657657', '0000-00-00', '77875657657', 127, 'BandunG', 'BandunG', 2147483647, '77875657657', '77875657657', '77875657657', 'Katabapa    ', 'Pamanukan / Maria Bunda Pembantu Abadi            ', 2, 1, 0, 0, 0, 2, 0, 'bandung 2', '2015-05-13 19:02:28', '2015-05-13 19:02:28'),
(24, '', '09876543', '$2y$10$eCJRA/Of29HynzC4mDzF1.XH2kCl6gqSmDj5kg2MpzAoDilWAPZxm', '09876543', '09876543', '0000-00-00', '09876543', 127, '09876543', 'bANDUNG', 9876543, '09876543', '09876543', '09876543', 'Katabapa   ', 'Pamanukan / Maria Bunda Pembantu Abadi            ', 1, 1, 0, 0, 0, 1, 0, '', '2015-05-13 19:07:50', '2015-05-13 19:07:50'),
(25, '', '42352352352', '$2y$10$/VH7FaVhk5jSZvtRRwnfNeqoA033tpq6jjLV8hGzdraFamLUWonSC', '42352352352', '42352352352', '0000-00-00', '42352352352', 127, '42352352352', 'Bandung', 2147483647, '42352352352', '42352352352', '42352352352', 'Katabapa    ', 'Karawang / Kristus Raja                   ', 1, 1, 0, 0, 0, 1, 0, ' gak masuk bandung 1', '2015-05-13 19:09:24', '2015-05-13 19:09:24'),
(26, '', '23456789', '$2y$10$L.6l7wmOU4JHn4.e91D1cOMMNBqaBz8dxWrqq23V0zOshx2q7R3z2', '23456789', '23456789', '0000-00-00', '23456789', 127, '23456789', 'bANDUNG', 0, '23456789', '23456789', '23456789', 'Dasamawartoba', 'Paroki Dayeuh Kolot                     ', 2, 1, 0, 0, 0, 1, 0, '100000', '2015-05-13 19:12:16', '2015-05-13 19:12:16'),
(27, '', '23456789', '$2y$10$ekDNbYljAoWqURxLB0sQp.os3dmxcUTPJzjFRoDNaO3MqBNhNFS/2', '23456789', '23456789', '0000-00-00', '23456789', 127, '23456789', 'jakahuiegr', 0, '23456789', '23456789', '23456789', 'Dasamawartoba', 'Paroki Dayeuh Kolot                      ', 2, 1, 0, 0, 0, 1, 0, '75000', '2015-05-13 19:12:57', '2015-05-13 19:12:57'),
(28, '', '23456789', '$2y$10$NkiIG7kaV/2V6eGtDRAYGOUi0tYNkSPeP2CqkS0WtpaY/fkHsxlWe', '23456789', '23456789', '0000-00-00', '23456789', 127, '23456789', 'jakahuiegr', 0, '23456789', '23456789', '23456789', 'Dasamawartoba', 'Paroki Dayeuh Kolot                      ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-13 19:13:16', '2015-05-13 19:13:16'),
(29, '', '123456789', '$2y$10$FbkqbXkSBUWOkTMKDo/i/OH2mY8pbyL9vFUepA6v7Y9vqTxJpdzAa', '123456789', '123456789', '0000-00-00', '123456789', 1, '123456789', '123456789', 123456789, '123456789', '123456789', '123456789', 'Katabapa   ', 'Subang / Kristus Sang Penabur               ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-13 19:36:11', '2015-05-13 19:36:11'),
(30, '', '123456789', '$2y$10$8Ho5iTXetomq7HwOTdi0l.TTLjzw2GlN9HlrF0zlEdiqHe6QmDv6S', '123456789', '123456789', '0000-00-00', '123456789', 1, '123456789', '123456789', 123456789, '123456789', '123456789', '123456789', 'Katabapa   ', 'Subang / Kristus Sang Penabur               ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-13 19:36:36', '2015-05-13 19:36:36'),
(31, '', '234567', '$2y$10$qU1b3WhxzZuQK9ibb4kkE.y8umfL36Fj9z/6kocJNiQkuoZqE1l2y', '234567', '234567', '0000-00-00', '234567', 1, '234567', '234567', 234567, '234567', '234567', '234567', 'Katabapa   ', 'Pamanukan / Maria Bunda Pembantu Abadi            ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-14 11:19:26', '2015-05-14 11:19:26'),
(32, '', '456789', '$2y$10$vgrkrn2/W8v6T5.y3yVikubc1AvL7wlN5EBV9B7PaT8WFTwQnAzEW', '456789', '456789', '0000-00-00', '456789', 1, '456789', '456789', 456789, '456789', '456789', '456789', 'Tasciciayu ', 'Cigugur / Kristus Raja                    ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-14 11:27:20', '2015-05-14 11:27:20'),
(33, '', '123456789', '$2y$10$S1ohhQnx4.zhXIM1WC1Quug65Ixw.AhZryF6JwOuH57DCokM/JVMS', '123456789', '123456789', '0000-00-00', '123456789', 1, '123456789', '123456789', 123456789, '123456789', '123456789', '123456789', 'Palemsuci  ', 'Sukajadi / Laurentius                     ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-14 11:40:01', '2015-05-14 11:40:01'),
(34, 'p5xvsyrCzl', '2345678', '$2y$10$V9fJt7aU.JAmW5A5CpbiOeJY4W7pdBTlKxBT8NHOvtWaWYkwTSMsO', '2345678', '2345678', '0000-00-00', '2345678', 1, '2345678', '2345678', 2345678, '2345678', '2345678', '2345678', 'Katabapa   ', 'Pamanukan / Maria Bunda Pembantu Abadi            ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-15 16:17:09', '2015-05-15 16:17:09'),
(35, 'dsa', '2345678', '$2y$10$bEEuRC3LXz8e4Ol9WW4IQOOm367Oq0XWOHTT4gri7wzHimBd/hvNa', '2345678', '2345678', '0000-00-00', '2345678', 1, '2345678', '2345678', 2345678, '2345678', '2345678', '2345678', 'Katabapa    ', 'Pamanukan / Maria Bunda Pembantu Abadi            ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-15 16:18:40', '2015-05-15 16:18:40'),
(36, '6reoIROo0j', '23457', '$2y$10$oYlnrxEDUg7YjEUBk5wFJ.uRPMZGPSR9t2SmsB02/12wKaXwHassO', '23457', '23457', '0000-00-00', '23457', 1, '23457', '23457', 23457, '23457', '23457', '23457', 'Katabapa   ', 'Purwakarta / Salib Suci                   ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-15 16:23:47', '2015-05-15 16:23:47'),
(37, '9i1oFrKEGz', 'jumlah_hari', '$2y$10$j377ppDru7/xTn.7Rxz0de0gd0ZJU2ZqCqw3doRZ7sjJAdByOSG.i', 'jumlah_hari', 'jumlah_hari', '0000-00-00', 'jumlah_hari', 1, 'jumlah_hari', 'jumlah_hari', 0, 'jumlah_hari', 'jumlah_hari', 'jumlah_hari', 'Katabapa   ', 'Pamanukan / Maria Bunda Pembantu Abadi            ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-15 16:24:54', '2015-05-15 16:24:54'),
(38, 'OtKezCZy4q', ':selected', '$2y$10$tJIXat02q30fMCcNiuxr8OLevbk3GgtTeyB7xwtS9CmPO.8uteGg2', ':selected', ':selected', '0000-00-00', ':selected', 0, ':selected', ':selected', 0, ':selected', ':selected', ':selected', 'Katabapa   ', 'Subang / Kristus Sang Penabur               ', 0, 1, 0, 0, 0, 2, 0, '', '2015-05-15 16:25:53', '2015-05-15 16:25:53'),
(39, 'mTtNK09F0q', 'checked', '$2y$10$/KPWrhAAvjF4y9UIAoo0AuhlBRV27ahYt/AUoaM.NnxTF200/H4Xy', 'checked', 'checked', '0000-00-00', 'checked', 0, 'checked', 'checked', 0, 'checked', 'checked', 'checked', 'Dasamawartoba', 'Buah Batu / Hati Tak Bernoda Santa Perawan Maria        ', 2, 1, 0, 0, 0, 1, 0, '75000', '2015-05-15 16:27:05', '2015-05-15 16:27:05'),
(40, 'H8tCaqZzbh', ':checked', '$2y$10$VFL2C5qK0h1fHyTCV1qLn.j7XY62xDP24NFKTrL5nMaYEhtVUEUCu', ':checked', ':checked', '0000-00-00', ':checked', 0, ':checked', ':checked', 0, ':checked', ':checked', ':checked', 'Dasamawartoba', 'Paroki Dayeuh Kolot                      ', 2, 1, 0, 0, 0, 0, 0, '75000', '2015-05-15 16:47:38', '2015-05-15 16:47:38'),
(41, 'tmxppUXIG1', '34567890-', '$2y$10$gqrpGaDnahvRwaogSO0ljugZ6I2rGZufNWOZy7VBNSkxUJV92gGou', '34567890-', '34567890-', '2015-05-12', '34567890-', 1, '34567890-', '34567890-', 0, '34567890-', '34567890-', '34567890-', 'Katabapa   ', 'Subang / Kristus Sang Penabur               ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-15 19:18:33', '2015-05-15 19:18:33'),
(42, 'wFKZg1OMp8', 'asdkjhasdo', '$2y$10$7GouPoFFTK7nSROzJ1OkVe96KesppAMQGA2lgj1bdrIMk8.A4DoWS', 'jo', 'Bandung', '2015-03-30', 'jo', 1, 'dodododood', 'Bandung', 0, '123012', 'alskdjalskdj', 'jaskdljalskdjla', 'Palemsuci  ', 'Pandu / St. Perawan Maria Sapta Kedukaan            ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-15 19:27:41', '2015-05-15 19:27:41'),
(43, 'prjxktiv2s', '$quota_total', '$2y$10$OZOmV5d9iUZpnbhSs0ztzuGjT5Ye1wZ0Gb0OjHwCvwaH69vlzQx0i', '$quota_total', '$quota_total', '2015-05-19', '$quota_total', 1, '$quota_total', '$quota_total', 0, '$quota_total', '$quota_total', '$quota_total', 'Katabapa    ', 'Karawang / Kristus Raja                   ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-16 15:21:28', '2015-05-16 15:21:28'),
(44, '5vtXqV96xz', 'oiuytr23435', '$2y$10$tXvSd64hTJFWRgAuxLgWhucwznnXA.M6SBTuSjQ4zsRnmA/9d8Zd.', 'oiuytr23435', 'oiuytr23435', '2015-05-11', 'oiuytr23435', 1, 'oiuytr23435', 'oiuytr23435', 0, 'oiuytr23435', 'oiuytr23435', 'oiuytr23435', 'Katabapa   ', 'Karawang / Kristus Raja                   ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-16 15:25:08', '2015-05-16 15:25:08'),
(45, '2Zt7OvaptDL', '098765432', '$2y$10$W9wtEoEVKahD.qwgvxC3j.uMZbqKichavO2EKWYmZfr6hxcNhsYrO', '098765432', '098765432', '2015-05-12', '098765432', 1, '098765432', '098765432', 98765432, '098765432', '098765432', '', 'Tasciciayu  ', 'Cigugur / Kristus Raja                    ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-16 15:26:29', '2015-05-16 15:26:29'),
(46, '3ROoBCX8SwW', 'sedrftgyuhji', '$2y$10$lwTzvnluVFz4Ntrs7NBQUerQZwy.RTXhFQwlL9RSO9c/2rySU81TK', 'sedrftgyuhji', 'sedrftgyuhji', '2015-05-11', 'sedrftgyuhji', 1, 'sedrftgyuhji', 'sedrftgyuhji', 0, 'sedrftgyuhji', 'sedrftgyuhji', 'sedrftgyuhji', 'Katabapa   ', 'Subang / Kristus Sang Penabur               ', 2, 1, 0, 0, 0, 0, 0, '75000', '2015-05-16 16:09:53', '2015-05-16 16:09:53'),
(47, '47UQntX8zbY', 'adfafasfashji', '$2y$10$q7pP20Kh.mlj9cuPO5Kb.ONtZmKnO7PyMskdQCKpAglrI/5KUFxrq', 'adfafasfashji', 'adfafasfashji', '2015-05-05', 'adfafasfashji', 0, 'adfafasfashji', 'adfafasfashji', 0, 'adfafasfashji', 'adfafasfashji', 'adfafasfashji', 'Katabapa    ', 'Subang / Kristus Sang Penabur               ', 2, 1, 0, 0, 0, 1, 0, '75000', '2015-05-16 16:11:50', '2015-05-16 16:11:50'),
(48, '5mtFMC2nQWL', '', '$2y$10$tg0OZv3u1K8926NgL8ZZ7eEPCZE0aqwoVcLGKpjpv7XQOMK.47c5u', '', '', '0000-00-00', '', 0, '', '', 0, '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '2015-05-16 17:11:52', '2015-05-16 17:11:52'),
(49, '6rques3b2zx', '$(''#nama_panggilan'').val()', '$2y$10$BLx2GwOHd.h3PavH5B3PS.nE6f4w8UK7B0P6e4nDytnRv0VImvLJi', '$(''#nama_panggilan'').val()', '$(''#nama_panggilan'').val()', '2015-05-16', '', 1, '$(''#nama_panggilan'').val()', '$(''#nama_panggilan'').val()', 0, '$(''#nama_panggilan'').val()', '$(''#nama_panggilan'').val()', '$(''#nama_panggilan'').val()', 'Dasamawartoba', 'Paroki Dayeuh Kolot                     ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-16 17:24:48', '2015-05-16 17:24:48'),
(50, '7V5MdlOW5Fg', '$(''#nama_panggilan'').val()', '$2y$10$oLOlCR4nn2tKfvGJLZvLU.j55lvUGM/fNb4PezHeCKo1miU51kG1y', '$(''#nama_panggilan'').val()', '$(''#nama_panggilan'').val()', '2015-05-16', '$(''#nama_panggilan'').val()', 1, '$(''#nama_panggilan'').val()', '$(''#nama_panggilan'').val()', 0, '$(''#nama_panggilan'').val()', '$(''#nama_panggilan'').val()', '$(''#nama_panggilan'').val()', 'Katabapa   ', 'Karawang / Kristus Raja                   ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-16 17:25:10', '2015-05-16 17:25:10'),
(51, '8VINA1TIqir', 'dsffs', '$2y$10$t.03Pto9Fnfba/kPtjDSkeFRiDXimSHOSEGuu61bc2M016EJ4XsEa', '', '', '0000-00-00', '', 0, '', '', 0, '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '2015-05-16 17:44:03', '2015-05-16 17:44:03'),
(52, '9iq5PDPf2kk', '', '$2y$10$j7Fdy5T.MVYlxp3ktPR.6u3iikF1fU7rgaBB8IXRxOmLipJDMSHf6', '', '', '0000-00-00', '', 0, '', '', 0, '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '2015-05-16 17:44:08', '2015-05-16 17:44:08'),
(53, '10feJoglSG7F', 'sdsad', '$2y$10$DVWMCHbuADUvPfRrBt1u2.X8Z1Y2kdrbVRa5BtbOflkfizofgeFIS', 'sdsad', 'sdsad', '2015-05-16', 'sdsad', 1, 'sdsad', 'sdsad', 0, 'sdsad', 'sdsad', 'sdsad', 'Dasamawartoba', 'Buah Batu / Hati Tak Bernoda Santa Perawan Maria        ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-16 17:48:57', '2015-05-16 17:48:57'),
(54, '11W5nUh58iJE', 'email', '$2y$10$sYNcTcTyz9k.2pjCcE9ISu5FpKHGuN6aDW9qUyMkbxly7pC2HfN7m', 'nama', 'tem la', '2015-04-29', 'pang', 1, 'ala', 'bdg', 7654, 'job', 'kegi h', 'hob', 'Katabapa    ', 'Purwakarta / Salib Suci                   ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-16 17:49:39', '2015-05-16 17:49:39'),
(55, '12ObjUCFb0RB', '234567890', '$2y$10$2fNulLWZe8fKGI4RT4OcjOUqaA5S/hZ6RYFiBqgehUW2pW4YMdTp.', '234567890', '234567890', '0000-00-00', '', 1, '234567890', '234567890', 234567890, '234567890', '234567890', '234567890', 'Dasamawartoba', 'Paroki Dayeuh Kolot                      ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-16 19:09:58', '2015-05-16 19:09:58'),
(56, '13vpJ4OxNcPF', '', '$2y$10$lTMCq2PcNjSjgoEVd2qL2ODTxOqw0VALIEJ//jo2.X5uQqc2U9fR2', '', '', '0000-00-00', '', 0, '', '', 0, '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '2015-05-16 19:11:26', '2015-05-16 19:11:26'),
(57, '14Vp8FCVv5aU', '', '$2y$10$hmuKVDYk8IL2yKBecPvLjeEEFwKhSBzJ30ocjurWr0OfPH52gaplK', '', '', '0000-00-00', '', 0, '', 'Tasikmalaya', 0, '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '2015-05-16 19:58:37', '2015-05-16 19:58:37'),
(58, '15VINbj7d7bo', 'domi654', '$2y$10$PkGAMDXd0hk6UJzxEwHoKuABLfnjFitFp/u19.or9oXL7SeJOq4rq', '0987654', '987654', '0000-00-00', '87654', 1, '98765', 'Bandung', 987654, '-098765', '098765', '4987', 'Katabapa   ', 'Karawang / Kristus Raja                   ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-16 20:00:19', '2015-05-16 20:00:19'),
(59, '16ExuaOMHuWI', '765', '$2y$10$GtR1SAFcLuzJUU3zwPPl9OESjGw/VTgyxgyoyLnv7vcKsBwDLYDKy', '098765', '87654', '0000-00-00', '87654', 1, '87654', 'Bandung', 0, '8765', '7654', '76543', 'Katabapa    ', 'Pamanukan / Maria Bunda Pembantu Abadi            ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-16 20:01:32', '2015-05-16 20:01:32'),
(60, '17SaXsKD5han', 'uytre', '$2y$10$rNR3m1xzUlKcKRPMuHDrgOFyqghd3JWyHj75u/cUpb80GzsNBtC9.', '098765', 'hgfhg', '0000-00-00', 'uytre', 1, 'hgfd', 'Bandung', 6543, 'uytr', 'uytre', 'uytr', 'Dasamawartoba', 'Paroki Dayeuh Kolot                      ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-16 20:35:45', '2015-05-16 20:35:45'),
(61, '18f9uOyixXAp', '', '$2y$10$nxhTiKQckYdOpUqRlLyzMePKPJXB34DXQ93K4O9CxDxeoVJSHuYzy', '', '', '0000-00-00', '', 0, '', 'Bandung', 0, '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '2015-05-16 20:38:41', '2015-05-16 20:38:41'),
(62, '19vFLN9HkR51', '0987654', '$2y$10$M1xn0GhtLKwaZ3w/qZ69AuANCDfSU11ejXuMhssGdrdcnNU3p9suy', '0987654', '0987654', '0000-00-00', '0987654', 1, '0987654', 'Bandung', 40987654, '0987654', '0987654', '0987654', 'Katabapa    ', 'Pamanukan / Maria Bunda Pembantu Abadi            ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-16 20:42:58', '2015-05-16 20:42:58'),
(63, '20oJGI4woqwf', '2423423', '$2y$10$zx/3JuY/FuuKmJZ3YwGqjeBclcYI9msyfB0aWfrXjKHxWtrBhThVe', 'ertyui', 'werwerew', '0000-00-00', 'wertyu', 0, 'wrwerwe', 'Bandung', 623242342, 'werwerwer', '24234234234', 'werwerwer', 'Dasamawartoba', 'Buah Batu / Hati Tak Bernoda Santa Perawan Maria       ', 1, 1, 0, 0, 0, 1, 0, '20000', '2015-05-16 21:15:17', '2015-05-16 21:15:17'),
(64, '21WbIv2l8pTK', '9876', '$2y$10$5dHv9SUzM2ZaTXVH/IMIp.AGQWRTrL3oCeNTTCv45dGFPgJNSH3YO', '9876543', '0987654', '0000-00-00', '987654', 0, '987654', 'Cirebon', 629876, '098765', '098765', '09876', 'Dasamawartoba', 'Buah Batu / Hati Tak Bernoda Santa Perawan Maria        ', 2, 1, 0, 0, 0, 0, 0, '75000', '2015-05-16 21:16:24', '2015-05-16 21:16:24'),
(65, 'DceKarawang / Kristus Raja                    22', '334', '$2y$10$UGU2P2dgikUOgjVjFRRGQObYW3bt/5umbq7iZnpRynA5/pzWPWokO', 'asdasda', 'sadasdas', '0000-00-00', 'dasdas', 0, 'asdasd', 'Bandung', 2147483647, '234', '2342342', '234', 'Katabapa   ', 'Karawang / Kristus Raja                   ', 2, 1, 0, 0, 0, 1, 0, '100000', '2015-05-18 15:59:08', '2015-05-18 15:59:08'),
(66, 'DcePurwakarta / Salib Suci                    23', '12345', '$2y$10$mIXa0MZ0YQPlArpdVTK06.4Iz3BevhDsXoE/pMXStsYaZFKshTquu', 'asdas', 'eqeqweq', '0000-00-00', 'wqrqwr', 0, '23423423', 'Bandung', 62234234, '234', '234', '234234', 'Katabapa   ', 'Purwakarta / Salib Suci                   ', 2, 1, 0, 0, 0, 1, 0, '100000', '2015-05-18 16:03:01', '2015-05-18 16:03:01'),
(67, 'DcoSubang / Kristus Sang Penabur                24', '23423', '$2y$10$FCuNrfCEXnYcJYwCEaRdaeHEuUEI.wV1DDaRplKczHHQPtULn6Sua', '32423423', '2342342', '0000-00-00', '234234', 1, '234234', 'Bandung', 6223423, '234234', '23423', '4242', 'Katabapa    ', 'Subang / Kristus Sang Penabur               ', 2, 1, 0, 0, 0, 1, 0, '100000', '2015-05-18 16:06:45', '2015-05-18 16:06:45');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE IF NOT EXISTS `price` (
`id` int(11) NOT NULL,
  `earlybird` tinyint(4) NOT NULL,
  `daytype` tinyint(4) NOT NULL,
  `dalam_kota` int(11) NOT NULL,
  `luar_kota` int(11) NOT NULL,
  `periode_start` datetime NOT NULL,
  `periode_end` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `earlybird`, `daytype`, `dalam_kota`, `luar_kota`, `periode_start`, `periode_end`) VALUES
(1, 1, 1, 20000, 20000, '2015-05-20 00:00:00', '2015-06-30 23:59:59'),
(2, 2, 1, 30000, 30000, '2015-07-01 00:00:00', '2015-08-31 23:59:59'),
(3, 3, 1, 50000, 50000, '2015-09-01 00:00:00', '2015-09-30 23:59:59'),
(4, 1, 2, 100000, 75000, '2015-05-20 00:00:00', '2015-06-30 23:59:59'),
(5, 2, 2, 125000, 100000, '2015-07-01 00:00:00', '2015-08-31 23:59:59'),
(6, 3, 2, 150000, 150000, '2015-09-01 00:00:00', '2015-09-30 23:59:59');

-- --------------------------------------------------------

--
-- Table structure for table `quota`
--

CREATE TABLE IF NOT EXISTS `quota` (
  `id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quota`
--

INSERT INTO `quota` (`id`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 24, '0000-00-00 00:00:00', '2015-05-18 16:06:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paroki`
--
ALTER TABLE `paroki`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `paroki`
--
ALTER TABLE `paroki`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
