-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17.10.2016 klo 11:59
-- Palvelimen versio: 10.1.13-MariaDB
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
-- Rakenne taululle `feel`
--

CREATE TABLE `feel` (
  `date` date NOT NULL,
  `feel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Vedos taulusta `feel`
--

INSERT INTO `feel` (`date`, `feel`) VALUES
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
('2016-10-16', 1);

-- --------------------------------------------------------

--
-- Rakenne taululle `feelref`
--

CREATE TABLE `feelref` (
  `feel` int(1) NOT NULL,
  `feelname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `feelref`
--

INSERT INTO `feelref` (`feel`, `feelname`) VALUES
(1, 'Hyvä'),
(2, 'Normaali'),
(3, 'Huono'),
(4, 'Erittäin huono');

-- --------------------------------------------------------

--
-- Rakenne taululle `jannyholm`
--

CREATE TABLE `jannyholm` (
  `date` date NOT NULL,
  `vehna` int(1) NOT NULL,
  `soija` int(1) NOT NULL,
  `pavut` int(1) NOT NULL,
  `ruis` int(1) NOT NULL,
  `chili` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Vedos taulusta `jannyholm`
--

INSERT INTO `jannyholm` (`date`, `vehna`, `soija`, `pavut`, `ruis`, `chili`) VALUES
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
('2016-10-16', 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feel`
--
ALTER TABLE `feel`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `feelref`
--
ALTER TABLE `feelref`
  ADD PRIMARY KEY (`feel`);

--
-- Indexes for table `jannyholm`
--
ALTER TABLE `jannyholm`
  ADD PRIMARY KEY (`date`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
