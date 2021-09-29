-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 04:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `abc`
--

CREATE TABLE `abc` (
  `accountno` int(11) NOT NULL,
  `username` text NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `amount` text NOT NULL,
  `password` text NOT NULL,
  `re password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abc`
--

INSERT INTO `abc` (`accountno`, `username`, `address`, `phone`, `amount`, `password`, `re password`) VALUES
(2, 'rohit@gmail.com', 'delhi', '123456789', '15000', 'rohit', 'rohit'),
(3, 'komal@gmail.com', 'jaipur', '123456789', '10000', 'komal', 'komal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abc`
--
ALTER TABLE `abc`
  ADD PRIMARY KEY (`accountno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abc`
--
ALTER TABLE `abc`
  MODIFY `accountno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
