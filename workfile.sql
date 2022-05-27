-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 01:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workfile`
--

-- --------------------------------------------------------

--
-- Table structure for table `wfile`
--

CREATE TABLE `wfile` (
  `wid` int(11) NOT NULL,
  `wtype` varchar(255) NOT NULL,
  `wuser` varchar(255) NOT NULL,
  `wtime` date NOT NULL,
  `wtitle` varchar(255) NOT NULL,
  `wsubject` varchar(255) NOT NULL,
  `wattachment` varchar(255) NOT NULL,
  `wto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wfile`
--

INSERT INTO `wfile` (`wid`, `wtype`, `wuser`, `wtime`, `wtitle`, `wsubject`, `wattachment`, `wto`) VALUES
(1, 'وارد', 'mohamed', '2021-12-29', '9999', 'ططططططططط', '20211018_123825.jpg', 'الادارة'),
(2, 'وارد', 'mohamed', '2021-12-29', 'first', '[[[[[[[[[', '20150214_095041.jpg', 'الجمهور'),
(3, 'وارد', 'mohamed', '2021-12-29', 'first', '9999999999999', '51.jpg', 'الموظفين'),
(4, 'صادر', 'mohamed', '2021-12-29', 'first2', '5555555555555', '52.jpg', 'الموظفين');

-- --------------------------------------------------------

--
-- Table structure for table `winfo`
--

CREATE TABLE `winfo` (
  `wid` int(11) NOT NULL,
  `wlag` varchar(255) NOT NULL,
  `wname` varchar(255) NOT NULL,
  `wline1` varchar(255) NOT NULL,
  `wline2` varchar(255) NOT NULL,
  `wline3` varchar(255) NOT NULL,
  `wline4` varchar(255) NOT NULL,
  `wline5` varchar(255) NOT NULL,
  `wbutn1` varchar(255) NOT NULL,
  `wbutn2` varchar(255) NOT NULL,
  `wbutn3` varchar(255) NOT NULL,
  `wbutn4` varchar(255) NOT NULL,
  `wimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `winfo`
--

INSERT INTO `winfo` (`wid`, `wlag`, `wname`, `wline1`, `wline2`, `wline3`, `wline4`, `wline5`, `wbutn1`, `wbutn2`, `wbutn3`, `wbutn4`, `wimg`) VALUES
(1, 'ar', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11'),
(2, 'en', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22');

-- --------------------------------------------------------

--
-- Table structure for table `wuser`
--

CREATE TABLE `wuser` (
  `wid` int(11) NOT NULL,
  `wname` varchar(50) NOT NULL,
  `wdate` date NOT NULL,
  `wusername` varchar(20) NOT NULL,
  `wpassword` varchar(20) NOT NULL,
  `wtele` varchar(20) NOT NULL,
  `wsex` varchar(5) NOT NULL,
  `wcountry` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wuser`
--

INSERT INTO `wuser` (`wid`, `wname`, `wdate`, `wusername`, `wpassword`, `wtele`, `wsex`, `wcountry`, `status`) VALUES
(11, 'محمد', '0000-00-00', 'محمد', 'محمد', 'محمد', 'ذكر', '', 'muthaf'),
(13, 'mohamed', '2021-11-16', 'mohamed', 'mohamed', 'mohamed', 'ذكر', 'EGYPT', 'muder'),
(15, 'سسسسسس', '0000-00-00', 'سسسسسسس', 'سسسسسسس', 'سسسس', 'ذكر', 'EGYPT', 'muthaf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wfile`
--
ALTER TABLE `wfile`
  ADD PRIMARY KEY (`wid`);

--
-- Indexes for table `winfo`
--
ALTER TABLE `winfo`
  ADD PRIMARY KEY (`wid`);

--
-- Indexes for table `wuser`
--
ALTER TABLE `wuser`
  ADD PRIMARY KEY (`wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wfile`
--
ALTER TABLE `wfile`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `winfo`
--
ALTER TABLE `winfo`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wuser`
--
ALTER TABLE `wuser`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
