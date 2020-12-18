-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 08:32 PM
-- Server version: 5.6.21
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwt_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetails`
--

CREATE TABLE `bookingdetails` (
  `booking_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `no_of_adults` int(11) NOT NULL,
  `no_of_children` int(11) NOT NULL,
  `no_of_days` int(11) NOT NULL,
  `total_price` double NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingdetails`
--

INSERT INTO `bookingdetails` (`booking_id`, `booking_date`, `no_of_adults`, `no_of_children`, `no_of_days`, `total_price`, `fullname`, `country`, `email`, `mobile`, `description`) VALUES
(1, '2019-10-01', 4, 2, 8, 15000, 'Dilitha Ranjuna', 'SriLanka', 'ranjunadilitha@gmail.com', '0711234567', '	With breakfast and Dinner		'),
(2, '2019-09-09', 2, 2, 4, 10000, 'Nimali Fernando', 'SriLanka', 'nimali@gmail.com', '0912212333', '		With Breakfast 	'),
(3, '2019-09-18', 3, 1, 4, 10000, 'Kamal Jayasinghe', 'SriLanka', 'kamalj@gmail.com', '0771232132', '			Requesting outdoor pool');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  ADD PRIMARY KEY (`booking_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
