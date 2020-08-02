-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 12:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `orang`
--

CREATE TABLE `orang` (
  `KodeOrang` int(11) NOT NULL,
  `Nickname` varchar(255) DEFAULT NULL,
  `NamaAsli` varchar(255) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  `Kesenangan` varchar(255) DEFAULT NULL,
  `SocialMedia` varchar(255) DEFAULT NULL,
  `Game` varchar(255) DEFAULT NULL,
  `CreatedAt` datetime DEFAULT NULL,
  `UpdatedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orang`
--

INSERT INTO `orang` (`KodeOrang`, `Nickname`, `NamaAsli`, `Alamat`, `Kesenangan`, `SocialMedia`, `Game`, `CreatedAt`, `UpdatedAt`) VALUES
(1, 'Kajikasama', 'Agus Chandra', 'Denpasar,Bali', 'Touhou, Osu!', 'fb.me/agushcandra', 'THCB, THLW, OSU!', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Maribel Hearn', 'Yuanto Suwandy', 'Jakarta', 'Touhou', 'fb.me/maribelhearn', 'THCB, THLW, OSU!', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Mandala Agus', 'Geraldo Ghiffari', 'Yogyakarta', 'Touhou, Vtuber', 'fb.me/mandalaagus', 'THCB, THLW, COD M', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Rikimaru', 'Ricky Dio', 'Jakarta', 'Touhou Game 2d Horror', 'fb.me/redzkywidyautomo', 'THCB', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orang`
--
ALTER TABLE `orang`
  ADD PRIMARY KEY (`KodeOrang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orang`
--
ALTER TABLE `orang`
  MODIFY `KodeOrang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
