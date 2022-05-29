-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 07:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Faculty_ID` varchar(30) NOT NULL,
  `Fuser` varchar(30) NOT NULL,
  `Fpass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Faculty_ID`, `Fuser`, `Fpass`) VALUES
('123456', 'S N RAJAN', '123456'),
('12896', 'A K RANJAN', '789012'),
('PawanSharma@1234', 'Pawan Sharma', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `ID` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`ID`, `User`, `Pass`) VALUES
(1, 'admin', 'admin'),
(2, 'Akshat@12', '123456'),
(3, 'Aishwarya123', '123456'),
(4, 'Ashima123', '123456'),
(5, 'Aman1234', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `studentmarks`
--

CREATE TABLE `studentmarks` (
  `User` varchar(50) NOT NULL,
  `English` int(10) NOT NULL,
  `Maths` int(10) NOT NULL,
  `Physics` int(10) NOT NULL,
  `Chemistry` int(10) NOT NULL,
  `ComputerScience` int(10) NOT NULL,
  `Pass` text NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentmarks`
--

INSERT INTO `studentmarks` (`User`, `English`, `Maths`, `Physics`, `Chemistry`, `ComputerScience`, `Pass`, `Name`) VALUES
('Aishwarya123', 88, 77, 66, 55, 44, '123456', 'Aishwarya Sharma'),
('Akshat@12', 77, 88, 99, 66, 88, '123456', 'Akshat Saxena'),
('Aman1234', 50, 70, 80, 90, 66, '123456', 'Aman Chaurasiya'),
('Ashima123', 66, 78, 88, 98, 99, '123456', 'Ashima Gupta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Faculty_ID`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentmarks`
--
ALTER TABLE `studentmarks`
  ADD PRIMARY KEY (`User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
