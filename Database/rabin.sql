-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Sep 2020 pada 11.35
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rabin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `source` text,
  `pertama` text,
  `kedua` text,
  `key` varchar(250) DEFAULT NULL,
  `k-gram` int(11) DEFAULT NULL,
  `basis` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kedua`
--

CREATE TABLE `kedua` (
  `id` int(11) NOT NULL,
  `source` varchar(50) DEFAULT NULL,
  `key` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertama`
--

CREATE TABLE `pertama` (
  `id` int(11) NOT NULL,
  `source` varchar(50) DEFAULT NULL,
  `key` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `source`
--

CREATE TABLE `source` (
  `id` int(11) NOT NULL,
  `source` varchar(50) DEFAULT NULL,
  `key` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kedua`
--
CREATE TABLE `v_kedua` (
`id` int(11)
,`source` varchar(50)
,`key` varchar(250)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pertama`
--
CREATE TABLE `v_pertama` (
`id` int(11)
,`source` varchar(50)
,`key` varchar(250)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_source`
--
CREATE TABLE `v_source` (
`id` int(11)
,`source` varchar(50)
,`key` varchar(250)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_kedua`
--
DROP TABLE IF EXISTS `v_kedua`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kedua`  AS  select `kedua`.`id` AS `id`,`kedua`.`source` AS `source`,`kedua`.`key` AS `key` from `kedua` group by `kedua`.`source` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_pertama`
--
DROP TABLE IF EXISTS `v_pertama`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pertama`  AS  select `pertama`.`id` AS `id`,`pertama`.`source` AS `source`,`pertama`.`key` AS `key` from `pertama` group by `pertama`.`source` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_source`
--
DROP TABLE IF EXISTS `v_source`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_source`  AS  select `source`.`id` AS `id`,`source`.`source` AS `source`,`source`.`key` AS `key` from `source` group by `source`.`source` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kedua`
--
ALTER TABLE `kedua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertama`
--
ALTER TABLE `pertama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `source`
--
ALTER TABLE `source`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kedua`
--
ALTER TABLE `kedua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pertama`
--
ALTER TABLE `pertama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `source`
--
ALTER TABLE `source`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
