-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 04:16 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fwcproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `USERID` varchar(10) NOT NULL,
  `TOPICCODE` varchar(20) NOT NULL,
  `TNAME` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `SNAME` varchar(20) NOT NULL,
  `CONTACT` int(10) NOT NULL,
  `MAIL` varchar(50) NOT NULL,
  `USERID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `SUBJECT` varchar(20) NOT NULL,
  `TOPIC` varchar(20) NOT NULL,
  `TOPICCODE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`SUBJECT`, `TOPIC`, `TOPICCODE`) VALUES
('MATHS', 'CALCULUS', 'MACA001'),
('MATHS', 'ALGEBRA', 'MAAL002'),
('MATHS', 'TRIGONMETRY', 'MATR003'),
('MATHS', 'PROBABILITY', 'MAPR004'),
('MATHS', 'STATISTICS', 'MAST005'),
('MATHS', 'COORDINATEGEOMETRY', 'MACG006'),
('MATHS', 'LOGARITHM', 'MALO007'),
('MATHS', 'NUMBERSYSTEM', 'MANS008'),
('MATHS', 'LINEARPROGRAMMING', 'MALP009'),
('MATHS', 'SEQUENCESERIES', 'MASS010'),
('MATHS', 'PROFITLOSS', 'MAPL011'),
('MATHS', 'TIMEWORK', 'MACA012'),
('MATHS', 'MATRICES', 'MAMT013'),
('MATHS', '3DGEOMETRY', 'MA3D014'),
('PHYSICS', 'KINEMATICS', 'PHKI001'),
('PHYSICS', 'DYNAMICS', 'PHDY002'),
('PHYSICS', 'MECHANICS', 'PHME003'),
('PHYSICS', 'LIGHT', 'PHLI004'),
('PHYSICS', 'ELECTRICITY', 'PHEL005'),
('PHYSICS', 'FLUIDMECHANICS', 'PHKI006'),
('PHYSICS', 'GRAVITATION', 'PHKI007'),
('PHYSICS', 'HUMANEYE', 'PHHE008'),
('PHYSICS', 'MIRRORLENS', 'PHML001'),
('CHEMISTRY', 'ORGANIC', 'CHOR001'),
('CHEMISTRY', 'INORGANIC', 'CHIO002'),
('CHEMISTRY', 'PHYSICAL', 'CHPY003'),
('COMPUTER', 'NUMBERSYSTEM', 'CSNS001'),
('COMPUTER', 'DATASTRUCTURE', 'CSDS002'),
('COMPUTER', 'OOPS', 'CSOP003'),
('COMPUTER', 'FILEHANDLING', 'CSFH004'),
('COMPUTER', 'DATABASE', 'CSDB005'),
('COMPUTER', 'MYSQL', 'CSSQ006'),
('COMPUTER', 'PYTHON', 'CSPY007'),
('COMPUTER', 'WEBDEVELOPMENT', 'CSWD008'),
('COMPUTER', 'FULLSTACK', 'CSFS009');

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `TNAME` varchar(20) NOT NULL,
  `CONTACT` int(10) NOT NULL,
  `MAIL` varchar(50) NOT NULL,
  `TOPICCODE` varchar(20) NOT NULL,
  `USERID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`TNAME`, `CONTACT`, `MAIL`, `TOPICCODE`, `USERID`) VALUES
('abcd', 1234567890, 'ujwalkumarmahatohcs41@gmail.com', 'MACA001', 'ujwalm231');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `NAME` text NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `USERID` varchar(11) NOT NULL,
  `VERIFICATION` tinyint(1) NOT NULL,
  `PASSWORD` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`NAME`, `EMAIL`, `USERID`, `VERIFICATION`, `PASSWORD`) VALUES
('', '', '31', 0, '$2y$10$IQa8AzZB5E.y8zs57i3a.eR26N7s8CwaEyFRwpnCZ3OmBYc9BjcSK'),
('stark', 'st@gmail.com', 'stark1387', 0, '$2y$10$7L6nVo1bQR0bspIJVitcau0chyrAjfyVP9R9Wuq5qvOGnLqzowZa2'),
('stark', 's@gmail.com', 'stark1587', 0, '$2y$10$98s4HlJoy7i0FgkVeE1QN.YDs7FTUCbydhj.EbSasRwq5YEN45yU.'),
('tony', 'dhm77436@gmail.com', 'tony642', 1, '$2y$10$pny27VWKd9jjWOdZUTF1eeUMYMkQG3usgs127pXHVTGkZMqPkWs1y'),
('ujwal', 'k2@gmail.com', 'ujwal1591', 0, '$2y$10$BMJAHyX0PIQ3XS/ll2PU6.yqmMJjeUdPsH4bCiyt3WKeL8l8eVztS'),
('ujwal', 'k@gmail.com', 'ujwal1671', 0, '$2y$10$BHOa9MA/hQWuT5VojwmQCuuCoWOXP.liAFA4FDgcyYEejUfGhqOP.'),
('ujwal', 'kujwal147@gmail.com', 'ujwal1739', 1, '$2y$10$EQ.9Uy/8mZmwcpTNkX54sOLg/oT4DEPVsyMZMkedgrcFS.0dbDV52'),
('ujwalm', 'ujwalkumarmahatohcs41@gmail.com', 'ujwalm231', 1, '$2y$10$xBE2kJRZbGnYzzFccNP9WO4aDwHeRchR6bt0ZUvD7oMjQe9Smd9KK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `USERID` (`USERID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
