-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 07:40 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysem`
--
CREATE DATABASE IF NOT EXISTS `mysem` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mysem`;

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_user` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` int(11) NOT NULL,
  `id_data` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_user`, `username`, `password`, `level`, `id_data`) VALUES
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 3, NULL),
(5, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 1, NULL),
(6, 'panitia', 'd32b1673837a6a45f795c13ea67ec79e', 2, NULL),
(14, 'hondas', 'cfcd208495d565ef66e7dff9f98764da', 1, NULL),
(15, 'laras', 'cfcd208495d565ef66e7dff9f98764da', 1, NULL),
(16, 'asc', 'cfcd208495d565ef66e7dff9f98764da', 1, NULL),
(17, 'ringo', '598f5ef3f0d31cfc6743f79614b0c56e', 1, NULL),
(19, 'rino', 'af7ffc2a629a1c258336fde8a1f71e0a', 1, NULL),
(20, 'hsd', '2f73f3283b3e917d6c533b1dcb453735', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `keterangan`) VALUES
(1, 'Teknologi'),
(2, 'Ekonomi & Bisnis'),
(3, 'Pendidikan'),
(4, 'Sosial & Budaya'),
(5, 'Kesehatan'),
(6, 'Politik');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_seminar` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `id_user`, `id_seminar`, `status`) VALUES
(1, 5, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE `seminar` (
  `id_sem` int(11) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `speaker` varchar(40) NOT NULL,
  `deskripsi` text NOT NULL,
  `fasilitas` varchar(40) NOT NULL,
  `waktu` datetime NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_by` int(11) NOT NULL,
  `kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seminar`
--

INSERT INTO `seminar` (`id_sem`, `judul`, `speaker`, `deskripsi`, `fasilitas`, `waktu`, `foto`, `created`, `create_by`, `kategori`) VALUES
(1, 'Seminar Nasional Technoprener 2019', 'Drs. Koko Srimulyo, M.Si.', 'Seminar Nasional (TechnoPreneur) dengan tema \"How tech Inovations Have created a New Generation of Bilionaires\"', 'Sertifikat, Snack, Seminar Kit, Ilmu Yan', '2019-10-30 07:00:00', 'ex1.jpg', '2019-11-28 04:24:19', 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `keterangan`) VALUES
(1, 'Pending'),
(2, 'Terbayar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`id_sem`),
  ADD KEY `kategori` (`kategori`),
  ADD KEY `create_by` (`create_by`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seminar`
--
ALTER TABLE `seminar`
  MODIFY `id_sem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `seminar`
--
ALTER TABLE `seminar`
  ADD CONSTRAINT `seminar_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `seminar_ibfk_2` FOREIGN KEY (`create_by`) REFERENCES `akun` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
