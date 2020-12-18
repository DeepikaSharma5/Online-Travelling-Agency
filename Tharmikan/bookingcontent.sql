-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 10:59 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwt`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingcontent`
--

CREATE TABLE `bookingcontent` (
  `Name` varchar(50) NOT NULL,
  `EmailID` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Cardnumber` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Cardholdername` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Zipcode` varchar(50) NOT NULL,
  `Expiredate` varchar(50) NOT NULL,
  `Cvv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingcontent`
--

INSERT INTO `bookingcontent` (`Name`, `EmailID`, `Phone`, `Time`, `Fullname`, `Cardnumber`, `Address`, `Cardholdername`, `City`, `Zipcode`, `Expiredate`, `Cvv`) VALUES
('Rakavan', 'rakav@gmail.com', '0769887678', '11', 'uthaya', '86898778', 'jaffna', 'uthaya', 'jaffna', 'zip code', '4', '123'),
('', '', '', '', '', '', '', '', '', '', '', ''),
('RAKAVAN', 'RAKAVAN@GAMIL.COM', '0768976543', '11', 'UTHAY', '0987653', 'BROWN ROAD', 'RAKAVAN', 'JAFFNA', '40000', '10', '123'),
('sithu', 'sithu@gmail.com', '342332', '3', 'sithu', '324432', 'jaffna', 'sithu', 'colombo', 'zip code', '2', '123'),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('rakavannnn', 'Email@gmail.com', '', 'time', 'john doe', '', '497 evergreenRD', 'john doe', 'Rosevile', 'zip code', '', '123'),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('hiii', 'Email@gmail.com', '34342', 'time', 'john doe', '', '497 evergreenRD', 'john doe', 'Rosevile', 'zip code', '', '123'),
('', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', ''),
('jathu', 'Email@gmail.com', '090989879898', '11', 'john doe', '78798o', '497 evergreenRD', 'john doe', 'Rosevile', 'zip code', '68', '123'),
('tharmi', 'tharmi@gmail.com', '0765678654', '11', 'tharmideacon', '323432423', 'jaffna', 'tharmideacon', 'colombo', '40000', '11', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
