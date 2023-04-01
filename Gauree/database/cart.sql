-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 12, 2022 at 10:22 PM
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
-- Database: `gauree`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cartID` int(30) NOT NULL AUTO_INCREMENT,
  `amount` int(255) NOT NULL,
  `proID` int(30) NOT NULL,
  `CustomerID` int(100) NOT NULL,
  `flag` int(11) NOT NULL,
  `cflag` int(30) NOT NULL,
  PRIMARY KEY (`cartID`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartID`, `amount`, `proID`, `CustomerID`, `flag`, `cflag`) VALUES
(21, 1, 4, 8, 0, 0),
(22, 1, 2, 8, 0, 0),
(23, 1, 3, 8, 0, 0),
(27, 1, 5, 11, 1, 1),
(13, 1, 3, 9, 0, 0),
(12, 1, 5, 9, 0, 0),
(11, 1, 1, 9, 0, 0),
(14, 1, 4, 9, 0, 0),
(15, 1, 3, 9, 0, 0),
(16, 1, 5, 10, 0, 0),
(17, 1, 3, 10, 0, 0),
(18, 1, 2, 10, 0, 0),
(24, 1, 3, 8, 0, 0),
(25, 1, 3, 8, 0, 0),
(28, 1, 1, 12, 1, 1),
(29, 1, 5, 12, 1, 0),
(30, 1, 6, 12, 1, 1),
(31, 1, 9, 12, 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
