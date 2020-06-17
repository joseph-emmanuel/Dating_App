-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2020 at 04:24 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdating`
--

-- --------------------------------------------------------

--
-- Table structure for table `fav`
--

CREATE TABLE `fav` (
  `fuid` int(11) NOT NULL,
  `uemail` varchar(45) NOT NULL,
  `femail` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fav`
--

INSERT INTO `fav` (`fuid`, `uemail`, `femail`) VALUES
(18, 'agnes@gmail.com', 'roy@gmail.com'),
(19, 'agnes@gmail.com', 'gauthier@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `ulevel` int(10) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `lname`, `email`, `pwd`, `ulevel`, `img`) VALUES
(6, 'Pierre', 'Roy', 'roy@gmail.com', 'r123', 3, '1.jpg'),
(7, 'Michel', 'Gauthier', 'gauthier@gmail.com', 'g123', 1, '2.jpg'),
(8, 'Jacques', 'Martin', 'martin@gmail.com', 'm123', 1, '3.jpg'),
(9, 'Nicolas', 'Paul', 'paul@gmail.com', 'p123', 1, '4.jpg'),
(10, 'Gabriel', 'Amable', 'amable@gmail.com', 'a123', 1, '5.jpg'),
(11, 'Marie ', 'Louise', 'louise@gmail.com', 'l123', 1, '44.jpg'),
(12, 'Catherine', 'Francoise', 'francoise@gmail.com', 'f123', 2, '47.jpg'),
(13, 'Charlotte', 'Allard', 'Allard@gmail.com', 'a123', 1, '63.jpg'),
(16, 'Monica', 'Geller', 'geller@gmail.com', 'g123', 1, 'hh.jpg'),
(17, 'Nairobi', 'Agnes', 'agnes@gmail.com', 'a123', 1, 'money-heist-nairobi-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wink`
--

CREATE TABLE `wink` (
  `wid` int(11) NOT NULL,
  `semail` varchar(45) NOT NULL,
  `remail` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wink`
--

INSERT INTO `wink` (`wid`, `semail`, `remail`) VALUES
(11, 'agnes@gmail.com', 'roy@gmail.com'),
(12, 'agnes@gmail.com', 'gauthier@gmail.com'),
(13, 'roy@gmail.com', 'agnes@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fav`
--
ALTER TABLE `fav`
  ADD PRIMARY KEY (`fuid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `wink`
--
ALTER TABLE `wink`
  ADD PRIMARY KEY (`wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fav`
--
ALTER TABLE `fav`
  MODIFY `fuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `wink`
--
ALTER TABLE `wink`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
