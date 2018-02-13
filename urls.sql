-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2018 at 07:00 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urlshort`
--

-- --------------------------------------------------------

--
-- Table structure for table `urls`
--

CREATE TABLE `urls` (
  `URL_ID` int(11) NOT NULL,
  `Original_Url` varchar(255) NOT NULL,
  `Short_Url` varchar(20) NOT NULL,
  `Clcik` int(11) NOT NULL,
  `DateRegistered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urls`
--

INSERT INTO `urls` (`URL_ID`, `Original_Url`, `Short_Url`, `Clcik`, `DateRegistered`) VALUES
(1, 'wwwb.instagram.com/', '8qWFc0', 0, '2018-02-07 12:34:42'),
(2, 'https://havecv.com/blog', '9Vhv5J', 17, '2018-02-07 12:49:44'),
(3, 'https://havecv.com/blogs', 'oXVS7C', 0, '2018-02-07 13:06:59'),
(4, 'http://www.sportket.com/', 'aDGHwR', 2, '2018-02-09 12:35:27'),
(5, 'http://www.sportket.com', 'b0ieab', 2, '2018-02-09 12:41:34'),
(6, 'https://havecv.com/', 'bn6MVT', 0, '2018-02-12 19:28:27'),
(7, 'https://www.linkedin.com/notifications/', 'nKdHbB', 0, '2018-02-13 04:54:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `urls`
--
ALTER TABLE `urls`
  ADD PRIMARY KEY (`URL_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `urls`
--
ALTER TABLE `urls`
  MODIFY `URL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
