-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2018 at 05:03 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biryanipot`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Id` int(20) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Message` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Id`, `Name`, `Email`, `Phone`, `Message`) VALUES
(1, 'sfd', 'fsd', 0, 'dsf'),
(2, 'gjgh', 'jghj', 0, 'fhf'),
(3, 'gjgh', 'jghj', 0, 'fhf'),
(4, 'gjgh', 'vbcvn@gh.hjv', 0, 'vncv'),
(5, 'gjgh', 'vbcvn@gh.hjv', 1234561231, 'lll'),
(6, 'kavya', 'kavya@gmail.com', 1231231231, 'hi hello'),
(7, 'kavya', 'kavya@gmail.com', 1234561231, 'fhfg  fg');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Id` int(20) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `NoOfGuests` int(20) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Id`, `Name`, `Email`, `Phone`, `Date`, `Time`, `NoOfGuests`, `DateTime`) VALUES
(1, 'gjgh', 'kavya@gmail.com', 1234561231, '2018-10-26', '13:00:00', 2, '2018-10-01 19:26:56'),
(2, 'gjgh', 'kavya@gmail.com', 1234561231, '2018-10-25', '13:01:00', 1, '2018-10-01 19:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(20) NOT NULL,
  `FirstName` varchar(225) NOT NULL,
  `LastName` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `UserName` varchar(225) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
