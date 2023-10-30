-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 07:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brgy`
--

-- --------------------------------------------------------

--
-- Table structure for table `blotter`
--

CREATE TABLE `blotter` (
  `ID` int(11) NOT NULL,
  `REPORTUSERID` varchar(250) NOT NULL,
  `DATEHAPPEN` varchar(255) NOT NULL,
  `COMPLAINANT` varchar(250) NOT NULL,
  `PERSONTOCOMPLAIN` varchar(255) NOT NULL,
  `PLACEOF` varchar(255) NOT NULL,
  `DESCRIPTION` varchar(250) NOT NULL,
  `ACTIONTAKEN` varchar(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blotter`
--

INSERT INTO `blotter` (`ID`, `REPORTUSERID`, `DATEHAPPEN`, `COMPLAINANT`, `PERSONTOCOMPLAIN`, `PLACEOF`, `DESCRIPTION`, `ACTIONTAKEN`, `STATUS`) VALUES
(1, '1', '2023-10-16', 'AKO', 'SIYA', 'DINE', 'HAHAHHA CHISMOSA', 'GE away nalang kayo', 'Resolve'),
(2, '5', '2023-10-30', 'AKO', 'SIYA', 'BASTA', 'HAHAHA', 'PINAGUSAP NA ', 'Resolve');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `ID` int(11) NOT NULL,
  `USERID` varchar(250) NOT NULL,
  `DOCU` varchar(255) NOT NULL,
  `PURPOSE` varchar(250) NOT NULL,
  `STATUS` varchar(255) NOT NULL,
  `DATEP` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`ID`, `USERID`, `DOCU`, `PURPOSE`, `STATUS`, `DATEP`) VALUES
(1, '1', 'Barangay Clearance', 'HAHAHHHAHAH', 'SUCCESS', '2023-10-30 13:01:41'),
(2, '5', 'Barangay Clearance', 'BASTA', 'SUCCESS', '2023-10-30 14:38:42');

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `ID` int(11) NOT NULL,
  `LASTNAME` varchar(250) NOT NULL,
  `FIRSTNAME` varchar(255) NOT NULL,
  `MI` varchar(250) NOT NULL,
  `AGE` varchar(255) NOT NULL,
  `STREET` varchar(255) NOT NULL,
  `PUROK` varchar(250) NOT NULL,
  `BRGY` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `CONTACT` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL,
  `CIVILSTATUS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`ID`, `LASTNAME`, `FIRSTNAME`, `MI`, `AGE`, `STREET`, `PUROK`, `BRGY`, `EMAIL`, `CONTACT`, `PASSWORD`, `STATUS`, `CIVILSTATUS`) VALUES
(1, 'Cortiguerra', 'kent', 'Certiza', '21', '81 Labak', '2', 'Bliss Village, City of ilagan, Isabela', 'Yuukihan0523@gmail.com', '09353950971', '81dc9bdb52d04dc20036dbd8313ed055', 'ACCEPTED', 'SINGLE'),
(5, 'Is Back', 'Yoto', 'I', '21', 'Labak', '2', 'Bliss Village, City of ilagan, Isabela', 'you@gmail.com', '09353950971', '81dc9bdb52d04dc20036dbd8313ed055', 'ACCEPTED', 'Sakal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blotter`
--
ALTER TABLE `blotter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blotter`
--
ALTER TABLE `blotter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
