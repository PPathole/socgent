-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 05:06 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2846651_socman`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `age` int(11) NOT NULL,
  `bldgname` varchar(30) NOT NULL,
  `flatno` int(11) NOT NULL,
  `phoneno` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `email`, `password`, `age`, `bldgname`, `flatno`, `phoneno`) VALUES
(1, '', '', '', 0, '', 0, 0),
(2, 'pranay', 'ppathole@outlook.com', 'pranay', 33, 'magnolia', 203, 998744343),
(3, 'rakesh', 'rakesh@gmail.com', 'rakesh123', 47, 'columbine', 405, 98786736),
(5, 'hrishi patil', 'hrishi@gmail.com', 'hrishi123', 23, 'magnolia', 701, 789687234),
(6, 'mohit patil', 'mohit@outlook.com', 'Mohit123', 38, 'Freesia', 503, 976567234),
(7, 'ashutosh raut', 'rautya@gmail.com', 'raut123', 47, 'Aster', 405, 2147483647),
(8, 'shaunik sharma', 'shaunik@yahoo.in', 'Shaunik123', 38, 'Freesia', 602, 788967541);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
