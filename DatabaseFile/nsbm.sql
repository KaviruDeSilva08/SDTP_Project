-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 06:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nsbm`
--

-- --------------------------------------------------------

--
-- Table structure for table `landlords`
--

CREATE TABLE `landlords` (
  `lid` int(11) NOT NULL,
  `lusern` text DEFAULT NULL,
  `lemail` text DEFAULT NULL,
  `lpsw` varchar(8) NOT NULL,
  `lcn` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `landlords`
--

INSERT INTO `landlords` (`lid`, `lusern`, `lemail`, `lpsw`, `lcn`) VALUES
(1001, 'sktdesilva', 'skt@gamail.com', '12345678', 766045278),
(1002, 'rjganegama', 'rj@gamail.con', '87654321', 771234567),
(1003, 'pasan', 'pasan@gamai.com', '78945612', 784561238);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sid` int(11) NOT NULL,
  `susern` text DEFAULT NULL,
  `semail` text DEFAULT NULL,
  `spsw` varchar(8) DEFAULT NULL,
  `scn` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `susern`, `semail`, `spsw`, `scn`) VALUES
(2001, 'kaviru', 'kaviru@gmail.com', '12345678', 766045278);

-- --------------------------------------------------------

--
-- Table structure for table `warden`
--

CREATE TABLE `warden` (
  `wid` int(11) NOT NULL,
  `wusern` text DEFAULT NULL,
  `wemail` text DEFAULT NULL,
  `wpsw` varchar(8) DEFAULT NULL,
  `wcn` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warden`
--

INSERT INTO `warden` (`wid`, `wusern`, `wemail`, `wpsw`, `wcn`) VALUES
(3001, 'ranuka', 'ranuka@gmail.com', '32165498', 741234567);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `landlords`
--
ALTER TABLE `landlords`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `warden`
--
ALTER TABLE `warden`
  ADD PRIMARY KEY (`wid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
