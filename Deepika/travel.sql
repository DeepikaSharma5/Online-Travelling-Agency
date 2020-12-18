-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2019 at 06:26 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(20) NOT NULL,
  `details` varchar(500) NOT NULL,
  `category` enum('Tours','Historical','Excursion') NOT NULL,
  `location` enum('Anuradhapura','Galle','Trincomalee','Jaffna','Kandy') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `image`, `details`, `category`, `location`) VALUES
('12112as', 'Fun filla', '296022.jpg', 'sdsfdsfsd dsfdsf ffsgfhgf gfhgfhfgh fghfhgf fghfghfgh fghfghfg', 'Historical', 'Trincomalee'),
('aaaaaaaaaa', 'aaaaaaaaa', '296022.jpg', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Tours', ''),
('deepika', 'serupu', 'photo-1502602898657-', 'at last.. i finished', 'Historical', 'Trincomalee'),
('dfdsf', 'Fun filla', '296022.jpg', 'sdsfdsfsd dsfdsf ffsgfhgf gfhgfhfgh fghfhgf fghfghfgh fghfghfg', 'Historical', 'Trincomalee'),
('dfdsfsdf', 'sdfsdfdsfdsf', '1441740-eiffel-tower', 'sdfsdfdsfdsfsdf', 'Excursion', 'Kandy'),
('ed3ed', 'dd', '1441740-eiffel-tower', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeee', 'Historical', 'Trincomalee'),
('final check', 'finalcheck', '296022.jpg', 'dadas dasdasdas dasdasd adad asda sdas dasd ', 'Historical', 'Trincomalee'),
('sdfsdf', 'Fun filla', '296022.jpg', 'sdsfdsfsd dsfdsf ffsgfhgf gfhgfhfgh fghfhgf fghfghfgh fghfghfg', 'Historical', 'Trincomalee'),
('ssg', 'Fdsfsdf', '1441740-eiffel-tower', 'sdsfdsfsd dsfdsf ffsgfhgf gfhgfhfgh fghfhgf fghfghfgh fghfghfgdfdsfdsf', 'Excursion', 'Jaffna');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Comment` varchar(300) NOT NULL,
  `rating1` enum('1','2','3','4','5') NOT NULL,
  `rating2` enum('1','2','3','4','5') NOT NULL,
  `rating3` enum('1','2','3','4','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`Name`, `Email`, `Title`, `Country`, `Comment`, `rating1`, `rating2`, `rating3`) VALUES
('Ajith', 'ajith06@gmail.com', 'Communication', 'India', 'good communication. good service goos locations', '1', '1', '1'),
('Rolondan', 'alfons2@gmail.com', 'Location', 'UK', 'Good selection of locations. good service', '5', '4', '5'),
('Aniruth', 'aniruth@gmail.com', 'Communication', 'London', 'good communication. good service goos locations', '5', '4', '5'),
('Chandra', 'chandu@gmail.com', 'Service', 'SriLanks', 'good service good food', '5', '4', '4'),
('deepika', 'deepass17138@gmail.com', 'location', 'sdfsdc', 'sdcsdcdscdsccdc', '2', '1', '2'),
('John Snow', 'Johnow23@yahoo.com', 'Location', 'USA', 'Good locations. ', '5', '4', '5'),
('Peter Bailish', 'Peterbail5467@gmail.com', 'Service', 'UK', 'Good locations and very well service', '2', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
