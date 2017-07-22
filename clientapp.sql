-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2017 at 07:54 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clientapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uID` int(11) NOT NULL,
  `fName` varchar(45) NOT NULL,
  `lName` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `emailAddress` varchar(45) NOT NULL,
  `phoneNo` varchar(45) NOT NULL,
  `uName` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `confirmPassword` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uID`, `fName`, `lName`, `gender`, `emailAddress`, `phoneNo`, `uName`, `password`, `confirmPassword`) VALUES
(1, 'denise', 'htmjk', 'Female', 'kdkdenise4@gmail.com', 'ngjk', 'mgkl', 'hen', 'hen'),
(2, 'Kasiimwe', 'htmjkjfi', 'Male', 'kdkdenise4@gmail.com', 'ngjk', 'mgkl', 'den', 'den'),
(3, 'Kasiimwe', 'htmjkjfi', 'Other', 'kdkdenise4@gmail.com', 'ngjk', 'mgkl', 'jet', 'jet'),
(4, 'Kasiimwe', 'htmjkjfi', 'Female', 'kdkdenise4@gmail.com', 'ngjk', 'nhj', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
