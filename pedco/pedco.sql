-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 12:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pedco`
--

-- --------------------------------------------------------

--
-- Table structure for table `farm`
--

CREATE TABLE `farm` (
  `id` int(11) NOT NULL,
  `fid` varchar(8) NOT NULL,
  `farmsize` int(10) DEFAULT NULL,
  `plantpop` int(10) DEFAULT NULL,
  `yearplant` date DEFAULT NULL,
  `distance` int(10) DEFAULT NULL,
  `servicerequest` varchar(15) DEFAULT NULL,
  `supervisor` varchar(15) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `id` int(11) NOT NULL,
  `fid` varchar(8) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `sex` enum('M','F') NOT NULL,
  `address` varchar(200) NOT NULL,
  `mob1` bigint(10) NOT NULL,
  `mob2` bigint(10) NOT NULL,
  `idtype` varchar(10) NOT NULL,
  `idnum` varchar(10) NOT NULL,
  `district` varchar(10) NOT NULL,
  `community` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`id`, `fid`, `fname`, `mname`, `sname`, `dob`, `sex`, `address`, `mob1`, `mob2`, `idtype`, `idnum`, `district`, `community`) VALUES
(1, 'readonly', 'Strato', 'Angsoteng', 'Bayitaa', '0000-00-00', 'M', 'Box 200', 248129213, 201235521, 'VoterID', '123452', 'Kintampo', 'Sunkwa'),
(2, 'readonly', 'Strato', 'Angsoteng', 'Bayitaa', '0000-00-00', 'F', 'Box 200', 248129213, 201235521, 'Passport', '123452', 'Techiman', 'Sunkwa'),
(3, 'readonly', 'Strato', 'Angsoteng', 'Bayitaa', '0000-00-00', 'F', 'Box 200', 248129213, 201235521, 'Passport', '123452', 'Techiman', 'Sunkwa'),
(4, 'readonly', 'Strato', 'Angsoteng', 'Bayitaa', '0000-00-00', 'M', 'Box 500', 248129213, 201235521, 'Passport', '123452', 'Nkuranza', 'Sunkwa'),
(5, 'readonly', 'Strato', 'Angsoteng', 'Bayitaa', '0000-00-00', 'M', 'Box 500', 248129213, 201235521, 'Passport', '123452', 'Nkuranza', 'Sunkwa'),
(6, 'readonly', 'Bayitaa', 'Angsoteng ', 'Strato', '0000-00-00', 'M', 'Box 200', 248129213, 201235521, 'Passport', '123452', 'Techiman', 'Sunkwa'),
(7, 'readonly', 'Bayitaa', 'Angsoteng', 'Strato', '0000-00-00', 'F', 'Box 200', 248129213, 201235521, 'VoterID', '123452', 'Kintampo', 'Sunkwa'),
(8, 'readonly', 'Strato', 'Angsoteng', 'Bayitaa', '0000-00-00', 'M', 'Box 200', 248129213, 201235521, 'Passport', '123452', 'Kintampo', 'Sunkwa'),
(9, 'readonly', 'Angsoteng', 'Strato', 'Bayitaa', '0000-00-00', 'F', 'Box 300', 2020202, 201235521, 'Ghana Card', '123452', 'Techiman', 'Sunkwa'),
(10, 'PD000010', 'Angsoteng', 'Strato', 'Bayitaa', '0000-00-00', 'M', 'Box 300', 248129213, 201235521, 'VoterID', '123452', 'Kintampo', 'Sunkwa'),
(11, 'PD000011', 'Strato', 'Angsoteng', 'Bayitaa', '1970-01-01', 'M', 'Box 200', 248129213, 201235521, 'VoterID', '123452', 'Kintampo', 'Sunkwa');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `fid` int(8) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `spraying` int(1) DEFAULT NULL,
  `pruning` int(1) DEFAULT NULL,
  `harvesting` int(1) DEFAULT NULL,
  `weedcont` int(1) DEFAULT NULL,
  `planting` int(1) DEFAULT NULL,
  `linpeg` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farm`
--
ALTER TABLE `farm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farm`
--
ALTER TABLE `farm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
