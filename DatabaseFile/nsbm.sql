-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2024 at 12:53 AM
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
-- Table structure for table `aproperties`
--

CREATE TABLE `aproperties` (
  `apid` int(50) NOT NULL,
  `apname` text NOT NULL,
  `apowner` text NOT NULL,
  `apaddress` text NOT NULL,
  `apcn` int(10) NOT NULL,
  `aprice` int(10) NOT NULL,
  `alatitude` varchar(50) NOT NULL,
  `alongitude` varchar(50) NOT NULL,
  `asuitable` text NOT NULL,
  `adescription` text NOT NULL,
  `aimage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aproperties`
--

INSERT INTO `aproperties` (`apid`, `apname`, `apowner`, `apaddress`, `apcn`, `aprice`, `alatitude`, `alongitude`, `asuitable`, `adescription`, `aimage`) VALUES
(1, 'Siri Samanmal', 'Samantha', 'Siri Samanmal Residence Pitipana', 765237891, 12000, '6.823856635813669 ', '80.04425648786945', '	Boys', 'comfateble boding place , have water , curent 24 hours', '');

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
(1002, 'rjganegama', 'rj@gamail.con', '87654321', 771234567);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `pid` int(11) NOT NULL,
  `pname` text DEFAULT NULL,
  `ownern` text DEFAULT NULL,
  `paddress` text DEFAULT NULL,
  `pcn` int(10) NOT NULL,
  `price` int(6) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `suitable` text NOT NULL,
  `description` text NOT NULL,
  `pimage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`pid`, `pname`, `ownern`, `paddress`, `pcn`, `price`, `latitude`, `longitude`, `suitable`, `description`, `pimage`) VALUES
(4, 'Siri Samanmal ', 'Samantha ', 'Siri Samanmal Residence Pitipana', 765237891, 12000, '80.04425648786945', '6.823856635813669', 'Boys', 'comfateble boding place , have water , curent 24 hours ', 'uploads/thumbnail.jpg');

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
-- Indexes for table `aproperties`
--
ALTER TABLE `aproperties`
  ADD PRIMARY KEY (`apid`);

--
-- Indexes for table `landlords`
--
ALTER TABLE `landlords`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`pid`);

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aproperties`
--
ALTER TABLE `aproperties`
  MODIFY `apid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
