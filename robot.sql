-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 02:52 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robot`
--

-- --------------------------------------------------------

--
-- Table structure for table `armmove`
--

CREATE TABLE `armmove` (
  `ID` varchar(1) NOT NULL,
  `angle` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `armmove`
--

INSERT INTO `armmove` (`ID`, `angle`) VALUES
('1', '61'),
('2', '37'),
('3', '50'),
('4', '87'),
('5', '19'),
('6', '86');

-- --------------------------------------------------------

--
-- Table structure for table `offon`
--

CREATE TABLE `offon` (
  `ID` int(1) NOT NULL,
  `OFF/ON` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offon`
--

INSERT INTO `offon` (`ID`, `OFF/ON`) VALUES
(1, 'OFF'),
(2, 'OFF'),
(3, 'OFF'),
(4, 'OFF'),
(5, 'OFF'),
(6, 'OFF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `armmove`
--
ALTER TABLE `armmove`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
