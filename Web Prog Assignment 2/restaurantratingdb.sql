-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 27, 2021 at 08:19 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurantratingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ratinginfo`
--

DROP TABLE IF EXISTS `ratinginfo`;
CREATE TABLE IF NOT EXISTS `ratinginfo` (
  `rate_ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_ID` int(11) NOT NULL,
  `food_rate` int(11) NOT NULL,
  `menu_rate` int(11) NOT NULL,
  `service_rate` int(11) NOT NULL,
  `atmosphere_rate` int(11) NOT NULL,
  `transaction_date` date NOT NULL,
  `remarks` varchar(500) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`rate_ID`),
  KEY `user-ID` (`user_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratinginfo`
--

INSERT INTO `ratinginfo` (`rate_ID`, `user_ID`, `food_rate`, `menu_rate`, `service_rate`, `atmosphere_rate`, `transaction_date`, `remarks`, `status`) VALUES
(1, 1, 5, 5, 5, 5, '2021-11-20', 'test', 0),
(2, 2, 4, 4, 4, 4, '2021-12-01', 'new test', 0),
(3, 3, 5, 3, 5, 4, '2021-11-20', 'test 3', 0),
(4, 4, 4, 4, 4, 4, '2021-11-27', 'test before submit', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usersinfo`
--

DROP TABLE IF EXISTS `usersinfo`;
CREATE TABLE IF NOT EXISTS `usersinfo` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersinfo`
--

INSERT INTO `usersinfo` (`user_id`, `first_name`, `last_name`, `email`, `phone`) VALUES
(1, 'Hanzalah', 'Patel', 'hanzalah_20@hotmail.com', '4372491184'),
(2, 'zalah', 'khan', 'zalah@hotmail.com', '1234567890'),
(3, 'john', 'smith', 'john@hotmail.com', '0987654321'),
(4, 'Hanzalah', 'Patel', 'hanzalah2002@hotmail.com', '0987654321');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ratinginfo`
--
ALTER TABLE `ratinginfo`
  ADD CONSTRAINT `ratinginfo_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `usersinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
