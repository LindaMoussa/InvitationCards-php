-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2019 at 01:48 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invitationcards`
--

-- --------------------------------------------------------

--
-- Table structure for table `inv_users`
--

CREATE TABLE `inv_users` (
  `ID` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inv_users`
--

INSERT INTO `inv_users` (`ID`, `username`, `email`, `password`) VALUES
(1, 'Linda Moussa', 'linda.dodo@hotmail.com', '123456lolo'),
(2, 'Linda Moussa', 'linda.dodo@hotmail.com', 'ddddd'),
(4, 'linda', '', 'lindamoussa'),
(5, 'Lou', 'lou@hotmail.com', '123456789'),
(6, 'Lou', 'lou@hotmail.com', '123456789'),
(7, 'koko', 'koki@gmail.com', '123456'),
(8, 'adoo', 'adoo@gmail.com', 'ado'),
(9, 'dddd', 'linda.dodo@hotmail.com', '12345'),
(10, '', '', ''),
(11, 'lolo', 'linda@hotmail.com', 'lolo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inv_users`
--
ALTER TABLE `inv_users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inv_users`
--
ALTER TABLE `inv_users`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
