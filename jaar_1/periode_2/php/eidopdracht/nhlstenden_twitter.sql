-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2019 at 11:27 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhlstenden_twitter`
--

-- --------------------------------------------------------

--
-- Table structure for table `nhl_stenden_messages`
--

CREATE TABLE `nhl_stenden_messages` (
  `msgId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nhl_stenden_users`
--

CREATE TABLE `nhl_stenden_users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(25) NOT NULL,
  `userPass` varchar(25) NOT NULL,
  `userEmail` varchar(40) NOT NULL,
  `userImagePath` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nhl_stenden_messages`
--
ALTER TABLE `nhl_stenden_messages`
  ADD PRIMARY KEY (`msgId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `nhl_stenden_users`
--
ALTER TABLE `nhl_stenden_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nhl_stenden_messages`
--
ALTER TABLE `nhl_stenden_messages`
  MODIFY `msgId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhl_stenden_users`
--
ALTER TABLE `nhl_stenden_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nhl_stenden_messages`
--
ALTER TABLE `nhl_stenden_messages`
  ADD CONSTRAINT `nhl_stenden_messages_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `nhl_stenden_users` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
