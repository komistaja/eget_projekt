-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2016 at 07:51 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olofseuranta`
--

-- --------------------------------------------------------

--
-- Table structure for table `feel`
--

CREATE TABLE IF NOT EXISTS `feel` (
  `date` date NOT NULL,
  `feel` int(1) NOT NULL,
  PRIMARY KEY (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELATIONS FOR TABLE `feel`:
--   `date`
--       `jannyholm` -> `date`
--   `feel`
--       `feelref` -> `feel`
--

--
-- Dumping data for table `feel`
--

REPLACE INTO `feel` (`date`, `feel`) VALUES
('2016-09-30', 3),
('2016-10-01', 2),
('2016-10-02', 2),
('2016-10-03', 2),
('2016-10-04', 2),
('2016-10-05', 4),
('2016-10-06', 4),
('2016-10-07', 3),
('2016-10-08', 3),
('2016-10-09', 3),
('2016-10-10', 2),
('2016-10-11', 1),
('2016-10-12', 3),
('2016-10-13', 2),
('2016-10-14', 2),
('2016-10-15', 1),
('2016-10-16', 1),
('2016-10-17', 2),
('2016-10-18', 2),
('2016-10-19', 3),
('2016-10-20', 2);

-- --------------------------------------------------------

--
-- Table structure for table `feelref`
--

CREATE TABLE IF NOT EXISTS `feelref` (
  `feel` int(1) NOT NULL,
  `feelname` varchar(20) NOT NULL,
  PRIMARY KEY (`feel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `feelref`:
--

--
-- Dumping data for table `feelref`
--

REPLACE INTO `feelref` (`feel`, `feelname`) VALUES
(1, 'Hyvä'),
(2, 'Normaali'),
(3, 'Huono'),
(4, 'Erittäin huono');

-- --------------------------------------------------------

--
-- Table structure for table `jannyholm`
--

CREATE TABLE IF NOT EXISTS `jannyholm` (
  `date` date NOT NULL,
  `vehna` int(1) NOT NULL,
  `soija` int(1) NOT NULL,
  `pavut` int(1) NOT NULL,
  `ruis` int(1) NOT NULL,
  `chili` int(1) NOT NULL,
  PRIMARY KEY (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELATIONS FOR TABLE `jannyholm`:
--

--
-- Dumping data for table `jannyholm`
--

REPLACE INTO `jannyholm` (`date`, `vehna`, `soija`, `pavut`, `ruis`, `chili`) VALUES
('2016-09-30', 2, 0, 0, 2, 0),
('2016-10-01', 1, 0, 0, 1, 0),
('2016-10-02', 1, 1, 1, 1, 1),
('2016-10-03', 3, 0, 0, 2, 2),
('2016-10-04', 1, 0, 1, 2, 2),
('2016-10-05', 0, 0, 3, 3, 2),
('2016-10-06', 1, 0, 0, 3, 2),
('2016-10-07', 3, 0, 3, 0, 3),
('2016-10-08', 0, 0, 1, 2, 0),
('2016-10-09', 0, 0, 2, 2, 2),
('2016-10-10', 0, 0, 3, 2, 2),
('2016-10-11', 1, 3, 1, 1, 0),
('2016-10-12', 0, 2, 1, 2, 2),
('2016-10-13', 0, 2, 2, 2, 1),
('2016-10-14', 1, 2, 2, 2, 1),
('2016-10-15', 0, 0, 1, 2, 1),
('2016-10-16', 0, 0, 0, 0, 0),
('2016-10-17', 2, 3, 2, 0, 1),
('2016-10-18', 3, 2, 2, 2, 2),
('2016-10-19', 0, 0, 3, 2, 2),
('2016-10-20', 2, 0, 0, 2, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
