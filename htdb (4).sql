-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2025 at 03:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `htdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE `app` (
  `id` int(11) NOT NULL,
  `appname` varchar(50) NOT NULL,
  `api` varchar(50) NOT NULL,
  `secretkey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app`
--

INSERT INTO `app` (`id`, `appname`, `api`, `secretkey`) VALUES
(1, 'Hue and Tartan', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(225) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `password` varchar(255) NOT NULL,
  `passcode` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` varchar(15) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `ip` varchar(225) NOT NULL,
  `balance` int(11) NOT NULL,
  `timezone` varchar(50) NOT NULL,
  `profile_pic` varchar(225) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `online` tinyint(1) NOT NULL,
  `data` tinyint(1) NOT NULL,
  `type` varchar(5) NOT NULL,
  `count` int(11) NOT NULL,
  `agree` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userid`, `firstname`, `lastname`, `email`, `gender`, `password`, `passcode`, `address`, `date`, `contact`, `country`, `state`, `ip`, `balance`, `timezone`, `profile_pic`, `dob`, `online`, `data`, `type`, `count`, `agree`) VALUES
(1, 'dLTklWyC9RY4A5unXbiK', 'Muhammed', 'Ali', 'administrator@gmail.com', 0, '21232f297a57a5a743894a0e4a801fc3', 'admin', '', '2024-12-20', '', '', '', '::1', 0, '', '', '', 0, 1, 'admin', 1, ''),
(2, 'YzRCPH9wNqrTp6eafo4U', 'Abdul Razak', 'Mamud', 'ehis@gmail.com', 0, '21232f297a57a5a743894a0e4a801fc3', 'admin', '', '2024-12-20', '', 'United Kingdom', '', '::1', 0, 'Europe/London', '', '', 0, 1, 'user', 1, ''),
(3, 'Z4EMC70ufR8Yd6mrH5pU', 'Abdul Razak', 'Mamud', 'ehismahmud@gmail.com', 0, '21232f297a57a5a743894a0e4a801fc3', 'admin', '', '2024-12-27', '', 'United Kingdom', '', '::1', 0, 'Europe/London', '', '', 0, 0, 'user', 1, ''),
(8, 'l6qkZ91KyIeJvYMuWthT', 'Abdul Razak', 'Mamud', 'ehismamud@gmail.com', 0, '21232f297a57a5a743894a0e4a801fc3', 'admin', '', '2024-12-27', '', 'United Kingdom', '', '::1', 0, 'Europe/London', '', '', 0, 0, 'user', 1, ''),
(9, 'P1AWYz4Spk0V7d9LgBCN', 'Abdul Razak', 'Mamud', 'ehismu@gmail.com', 0, '21232f297a57a5a743894a0e4a801fc3', 'admin', '', '2025-01-08', '', 'United Kingdom', '', '::1', 0, 'Europe/London', '', '', 0, 0, 'user', 1, 'I Agree to the terms');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `userid` varchar(21) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `street` text NOT NULL,
  `state` varchar(50) NOT NULL,
  `postcode` int(15) NOT NULL,
  `cartype` varchar(225) NOT NULL,
  `makeyear` varchar(15) NOT NULL,
  `ownershipstatus` varchar(10) NOT NULL,
  `batteryrange` int(11) NOT NULL,
  `chargingstationtype` varchar(20) NOT NULL,
  `homechargingaccess` varchar(3) NOT NULL,
  `specify` varchar(20) NOT NULL,
  `officechargingaccess` varchar(3) NOT NULL,
  `oftencharge` varchar(20) NOT NULL,
  `charginglocation` varchar(20) NOT NULL,
  `hometype` varchar(20) NOT NULL,
  `homeownership` varchar(10) NOT NULL,
  `electricityprovider` varchar(225) NOT NULL,
  `subscriber` varchar(3) NOT NULL,
  `avgdistance` int(11) NOT NULL,
  `vehicleuse` varchar(20) NOT NULL,
  `challenges` text NOT NULL,
  `greentech` varchar(3) NOT NULL,
  `subscription` varchar(20) NOT NULL,
  `communicationmethod` varchar(20) NOT NULL,
  `consent` varchar(10) NOT NULL,
  `newsletter` varchar(3) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `userid`, `fullname`, `dob`, `contact`, `email`, `street`, `state`, `postcode`, `cartype`, `makeyear`, `ownershipstatus`, `batteryrange`, `chargingstationtype`, `homechargingaccess`, `specify`, `officechargingaccess`, `oftencharge`, `charginglocation`, `hometype`, `homeownership`, `electricityprovider`, `subscriber`, `avgdistance`, `vehicleuse`, `challenges`, `greentech`, `subscription`, `communicationmethod`, `consent`, `newsletter`, `count`) VALUES
(1, 'dLTklWyC9RY4A5unXbiK', 'Muhammed Ali', '2024-12-20', '+44(0) 743 7565 411', 'administrator@gmail.com', 'Fleet Road, Dartford, Kent, United Kingdom', 'United Kingdom', 456786, 'Tesla', '2024', 'Owned', 120, 'Home Charging', 'Yes', 'Standard Outlet', 'Yes', 'Weekly', 'Work', 'Detached House', 'Owned', 'Manchester City', 'Yes', 120, 'Personal', 'None', 'Yes', 'monthly Plan', 'Email', 'i agree', 'Yes', 1),
(2, 'YzRCPH9wNqrTp6eafo4U', 'Abdul Razak Ehis Mamud', '2024-12-20', '+449031183604', 'ehis@gmail.com', 'Fleet Road, Dartford, Kent, United Kingdom', 'United Kingdom', 456786, 'Tesla', '2024', 'Owned', 120, 'Home Charging', 'Yes', 'Wallbox', 'Yes', 'Weekly', 'Fastcharginghubs', 'Apartment', 'Rented', 'Manchester City', 'Yes', 120, 'Personal', 'None', 'Yes', 'monthly Plan', 'Email', 'i agree', 'Yes', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app`
--
ALTER TABLE `app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app`
--
ALTER TABLE `app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
